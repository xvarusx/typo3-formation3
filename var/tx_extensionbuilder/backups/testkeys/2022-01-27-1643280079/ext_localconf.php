<?php
defined('TYPO3_MODE') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Testkeys',
        'Products',
        [
            \Oussema\Testkeys\Controller\ProduitController::class => 'list, show, new, create, edit, update, delete',
            \Oussema\Testkeys\Controller\CategoryController::class => 'list, show, new, create, edit, update, delete'
        ],
        // non-cacheable actions
        [
            \Oussema\Testkeys\Controller\ProduitController::class => 'create, update, delete',
            \Oussema\Testkeys\Controller\CategoryController::class => 'create, update, delete'
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    products {
                        iconIdentifier = testkeys-plugin-products
                        title = LLL:EXT:testkeys/Resources/Private/Language/locallang_db.xlf:tx_testkeys_products.name
                        description = LLL:EXT:testkeys/Resources/Private/Language/locallang_db.xlf:tx_testkeys_products.description
                        tt_content_defValues {
                            CType = list
                            list_type = testkeys_products
                        }
                    }
                }
                show = *
            }
       }'
    );

    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    $iconRegistry->registerIcon(
        'testkeys-plugin-products',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:testkeys/Resources/Public/Icons/user_plugin_products.svg']
    );
})();
