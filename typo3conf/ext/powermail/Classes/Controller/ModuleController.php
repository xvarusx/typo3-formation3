<?php
declare(strict_types = 1);
namespace In2code\Powermail\Controller;

use In2code\Powermail\Domain\Model\Answer;
use In2code\Powermail\Domain\Model\Mail;
use In2code\Powermail\Domain\Repository\PageRepository;
use In2code\Powermail\Utility\BackendUtility;
use In2code\Powermail\Utility\BasicFileUtility;
use In2code\Powermail\Utility\ConfigurationUtility;
use In2code\Powermail\Utility\MailUtility;
use In2code\Powermail\Utility\ReportingUtility;
use In2code\Powermail\Utility\StringUtility;
use TYPO3\CMS\Backend\Routing\Exception\RouteNotFoundException;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Exception\StopActionException;
use TYPO3\CMS\Extbase\Mvc\Exception\UnsupportedRequestTypeException;
use TYPO3\CMS\Extbase\Object\Exception;
use TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException;
use TYPO3\CMS\Extbase\Reflection\Exception\PropertyNotAccessibleException;

/**
 * Class ModuleController for backend modules
 */
class ModuleController extends AbstractController
{

    /**
     * @param string $forwardToAction
     * @throws StopActionException
     * @return void
     * @noinspection PhpUnused
     */
    public function dispatchAction($forwardToAction = 'list'): void
    {
        $this->forward($forwardToAction);
    }

    /**
     * @return void
     * @throws InvalidQueryException
     * @throws RouteNotFoundException
     * @noinspection PhpUnused
     */
    public function listAction(): void
    {
        $formUids = $this->mailRepository->findGroupedFormUidsToGivenPageUid((int)$this->id);
        $firstFormUid = StringUtility::conditionalVariable($this->piVars['filter']['form'], key($formUids));
        $beUser = BackendUtility::getBackendUserAuthentication();
        $this->view->assignMultiple(
            [
                'mails' => $this->mailRepository->findAllInPid((int)$this->id, $this->settings, $this->piVars),
                'formUids' => $formUids,
                'firstForm' => $this->formRepository->findByUid($firstFormUid),
                'piVars' => $this->piVars,
                'pid' => $this->id,
                'moduleUri' => BackendUtility::getRoute('ajax_record_process'),
                'perPage' => ($this->settings['perPage'] ? $this->settings['perPage'] : 10),
                'writeAccess' => $beUser->check('tables_modify', Answer::TABLE_NAME)
                    && $beUser->check('tables_modify', Mail::TABLE_NAME),
            ]
        );
    }

    /**
     * @return void
     * @throws InvalidQueryException
     * @noinspection PhpUnused
     */
    public function exportXlsAction(): void
    {
        $this->view->assignMultiple(
            [
                'mails' => $this->mailRepository->findAllInPid($this->id, $this->settings, $this->piVars),
                'fieldUids' => GeneralUtility::trimExplode(
                    ',',
                    StringUtility::conditionalVariable($this->piVars['export']['fields'], ''),
                    true
                )
            ]
        );

        $fileName = StringUtility::conditionalVariable($this->settings['export']['filenameXls'], 'export.xls');
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: inline; filename="' . $fileName . '"');
        header('Pragma: no-cache');
    }

    /**
     * @return void
     * @throws InvalidQueryException
     * @noinspection PhpUnused
     */
    public function exportCsvAction(): void
    {
        $this->view->assignMultiple(
            [
                'mails' => $this->mailRepository->findAllInPid($this->id, $this->settings, $this->piVars),
                'fieldUids' => GeneralUtility::trimExplode(
                    ',',
                    StringUtility::conditionalVariable($this->piVars['export']['fields'], ''),
                    true
                )
            ]
        );

        $fileName = StringUtility::conditionalVariable($this->settings['export']['filenameCsv'], 'export.csv');
        header('Content-Type: text/x-csv');
        header('Content-Disposition: attachment; filename="' . $fileName . '"');
        header('Pragma: no-cache');
    }

    /**
     * @return void
     * @throws InvalidQueryException
     * @throws RouteNotFoundException
     * @noinspection PhpUnused
     */
    public function reportingFormBeAction(): void
    {
        $mails = $this->mailRepository->findAllInPid($this->id, $this->settings, $this->piVars);
        $firstMail = $this->mailRepository->findFirstInPid($this->id);
        $groupedAnswers = ReportingUtility::getGroupedAnswersFromMails($mails);

        $this->view->assignMultiple(
            [
                'groupedAnswers' => $groupedAnswers,
                'mails' => $mails,
                'firstMail' => $firstMail,
                'piVars' => $this->piVars,
                'pid' => $this->id,
                'moduleUri' => BackendUtility::getRoute('ajax_record_process'),
                'perPage' => ($this->settings['perPage'] ? $this->settings['perPage'] : 10)
            ]
        );
    }

    /**
     * @return void
     * @throws InvalidQueryException
     * @throws RouteNotFoundException
     * @throws PropertyNotAccessibleException
     * @noinspection PhpUnused
     */
    public function reportingMarketingBeAction(): void
    {
        $mails = $this->mailRepository->findAllInPid($this->id, $this->settings, $this->piVars);
        $firstMail = $this->mailRepository->findFirstInPid($this->id);
        $groupedMarketing = ReportingUtility::getGroupedMarketingPropertiesFromMails($mails);

        $this->view->assignMultiple(
            [
                'groupedMarketingStuff' => $groupedMarketing,
                'mails' => $mails,
                'firstMail' => $firstMail,
                'piVars' => $this->piVars,
                'pid' => $this->id,
                'moduleUri' => BackendUtility::getRoute('ajax_record_process'),
                'perPage' => ($this->settings['perPage'] ? $this->settings['perPage'] : 10)
            ]
        );
    }

    /**
     * @return void
     * @throws InvalidQueryException
     * @throws Exception
     * @noinspection PhpUnused
     */
    public function overviewBeAction(): void
    {
        $forms = $this->formRepository->findAllInPidAndRootline($this->id);
        $this->view->assign('forms', $forms);
        $this->view->assign('pid', $this->id);
    }

    /**
     * @return void
     * @throws StopActionException
     * @noinspection PhpUnused
     */
    public function initializeCheckBeAction(): void
    {
        $this->checkAdminPermissions();
    }

    /**
     * @param string $email email address
     * @return void
     * @throws Exception
     * @noinspection PhpUnused
     */
    public function checkBeAction($email = null): void
    {
        $this->view->assign('pid', $this->id);
        $this->sendTestEmail($email);
    }

    /**
     * @param null $email
     * @return void
     * @throws Exception
     */
    protected function sendTestEmail($email = null): void
    {
        if ($email !== null && GeneralUtility::validEmail($email)) {
            $body = 'New Test Email from User ' . BackendUtility::getPropertyFromBackendUser('username');
            $body .= ' (' . GeneralUtility::getIndpEnv('HTTP_HOST') . ')';
            $senderEmail = ConfigurationUtility::getDefaultMailFromAddress('powermail@domain.net');
            $this->view->assignMultiple(
                [
                    'issent' => MailUtility::sendPlainMail($email, $senderEmail, 'New Powermail Test Email', $body),
                    'email' => $email
                ]
            );
        }
    }

    /**
     * @return void
     * @throws StopActionException
     * @noinspection PhpUnused
     */
    public function initializeConverterBeAction(): void
    {
        $this->checkAdminPermissions();
    }

    /**
     * @return void
     * @throws StopActionException
     * @noinspection PhpUnused
     */
    public function initializeFixUploadFolderAction(): void
    {
        $this->checkAdminPermissions();
    }

    /**
     * @return void
     * @throws StopActionException
     * @throws UnsupportedRequestTypeException
     * @throws \Exception
     * @noinspection PhpUnused
     */
    public function fixUploadFolderAction(): void
    {
        BasicFileUtility::createFolderIfNotExists(GeneralUtility::getFileAbsFileName('uploads/tx_powermail/'));
        $this->redirect('checkBe');
    }

    /**
     * @return void
     * @throws StopActionException
     * @noinspection PhpUnused
     */
    public function initializeFixWrongLocalizedFormsAction(): void
    {
        $this->checkAdminPermissions();
    }

    /**
     * @return void
     * @throws StopActionException
     * @throws UnsupportedRequestTypeException
     * @noinspection PhpUnused
     */
    public function fixWrongLocalizedFormsAction(): void
    {
        $this->formRepository->fixWrongLocalizedForms();
        $this->redirect('checkBe');
    }

    /**
     * @return void
     * @throws StopActionException
     * @noinspection PhpUnused
     */
    public function initializeFixWrongLocalizedPagesAction(): void
    {
        $this->checkAdminPermissions();
    }

    /**
     * @return void
     * @throws StopActionException
     * @throws UnsupportedRequestTypeException
     * @noinspection PhpUnused
     */
    public function fixWrongLocalizedPagesAction(): void
    {
        $pageRepository = $this->objectManager->get(PageRepository::class);
        $pageRepository->fixWrongLocalizedPages();
        $this->redirect('checkBe');
    }

    /**
     * Check if admin is logged in
     *        If not, forward to tools overview
     *
     * @return void
     * @throws StopActionException
     */
    protected function checkAdminPermissions(): void
    {
        if (!BackendUtility::isBackendAdmin()) {
            $this->controllerContext = $this->buildControllerContext();
            $this->forward('toolsBe');
        }
    }
}
