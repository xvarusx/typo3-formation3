<?php

declare(strict_types=1);

namespace B13\Container\Hooks\Datahandler;

/*
 * This file is part of TYPO3 CMS-based extension "container" by b13.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 */

use B13\Container\Domain\Factory\ContainerFactory;
use B13\Container\Tca\Registry;
use TYPO3\CMS\Core\DataHandling\DataHandler;
use TYPO3\CMS\Core\Messaging\FlashMessage;
use TYPO3\CMS\Core\Messaging\FlashMessageService;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\MathUtility;

class CommandMapBeforeStartHook
{
    /**
     * @var Registry
     */
    protected $tcaRegistry;

    /**
     * @var ContainerFactory
     */
    protected $containerFactory;

    /**
     * @var Database
     */
    protected $database;

    /**
     * UsedRecords constructor.
     * @param ContainerFactory|null $containerFactory
     * @param Registry|null $tcaRegistry
     * @param Database|null $database
     */
    public function __construct(
        ContainerFactory $containerFactory = null,
        Registry $tcaRegistry = null,
        Database $database = null
    ) {
        $this->containerFactory = $containerFactory ?? GeneralUtility::makeInstance(ContainerFactory::class);
        $this->tcaRegistry = $tcaRegistry ?? GeneralUtility::makeInstance(Registry::class);
        $this->database = $database ?? GeneralUtility::makeInstance(Database::class);
    }
    /**
     * @param DataHandler $dataHandler
     */
    public function processCmdmap_beforeStart(DataHandler $dataHandler): void
    {
        $this->unsetInconsistentLocalizeCommands($dataHandler);
        $dataHandler->cmdmap = $this->rewriteSimpleCommandMap($dataHandler->cmdmap);
        $dataHandler->cmdmap = $this->extractContainerIdFromColPosOnUpdate($dataHandler->cmdmap);
    }

    protected function rewriteSimpleCommandMap(array $cmdmap): array
    {
        if (!empty($cmdmap['tt_content'])) {
            foreach ($cmdmap['tt_content'] as $id => &$cmd) {
                if (empty($cmd['copy']) && empty($cmd['move'])) {
                    continue;
                }
                foreach ($cmd as $operation => $value) {
                    if (in_array($operation, ['copy', 'move'], true) === false) {
                        continue;
                    }
                    if (is_array($cmd[$operation])) {
                        continue;
                    }
                    if ((int)$cmd[$operation] < 0) {
                        $target = (int)$cmd[$operation];
                        $recordToCopy = $this->database->fetchOneRecord((int)abs($target));
                        if ($recordToCopy === null || $recordToCopy['tx_container_parent'] === 0) {
                            continue;
                        }
                        $cmd = [
                                $operation => [
                                    'action' => 'paste',
                                    'target' => $target,
                                    'update' => [
                                        'colPos' => $recordToCopy['tx_container_parent'] . '-' . $recordToCopy['colPos'],
                                        'sys_language_uid' => $recordToCopy['sys_language_uid']

                                    ]
                                ]
                            ];
                    }
                }
            }
        }
        return $cmdmap;
    }

    protected function unsetInconsistentLocalizeCommands(DataHandler $dataHandler): void
    {
        if (!empty($dataHandler->cmdmap['tt_content'])) {
            foreach ($dataHandler->cmdmap['tt_content'] as $id => $cmds) {
                foreach ($cmds as $cmd => $data) {
                    if ($cmd === 'localize') {
                        $record = $this->database->fetchOneRecord((int)$id);
                        if ($record['tx_container_parent'] > 0) {
                            $container = $this->database->fetchOneRecord($record['tx_container_parent']);
                            if ($container === null) {
                                // should not happen
                                continue;
                            }
                            $translatedContainer = $this->database->fetchOneTranslatedRecord($container['uid'], (int)$data);
                            if ($translatedContainer === null || (int)$translatedContainer['l18n_parent'] === 0) {
                                $flashMessage = GeneralUtility::makeInstance(
                                    FlashMessage::class,
                                    'Localization failed: container is in free mode or not translated',
                                    '',
                                    FlashMessage::ERROR,
                                    true
                                );
                                $flashMessageService = GeneralUtility::makeInstance(FlashMessageService::class);
                                $defaultFlashMessageQueue = $flashMessageService->getMessageQueueByIdentifier();
                                $defaultFlashMessageQueue->enqueue($flashMessage);
                                unset($dataHandler->cmdmap['tt_content'][$id][$cmd]);
                                if (!empty($dataHandler->cmdmap['tt_content'][$id])) {
                                    unset($dataHandler->cmdmap['tt_content'][$id]);
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    /**
     * @param array $cmdmap
     */
    protected function extractContainerIdFromColPosOnUpdate(array $cmdmap): array
    {
        if (!empty($cmdmap['tt_content'])) {
            foreach ($cmdmap['tt_content'] as $id => &$cmds) {
                foreach ($cmds as &$cmd) {
                    if (
                        (!empty($cmd['update'])) &&
                        isset($cmd['update']['colPos'])
                    ) {
                        $cmd['update'] = $this->dataFromContainerIdColPos($cmd['update']);
                    }
                }
            }
        }
        return $cmdmap;
    }

    /**
     * @param array $data
     * @return array
     */
    protected function dataFromContainerIdColPos(array $data): array
    {
        $colPos = $data['colPos'];
        if (MathUtility::canBeInterpretedAsInteger($colPos) === false) {
            [$containerId, $newColPos] = GeneralUtility::intExplode('-', $colPos);
            $data['colPos'] = $newColPos;
            $data['tx_container_parent'] = $containerId;
        } elseif (!isset($data['tx_container_parent'])) {
            $data['tx_container_parent'] = 0;
            $data['colPos'] = (int)$colPos;
        }
        return $data;
    }
}
