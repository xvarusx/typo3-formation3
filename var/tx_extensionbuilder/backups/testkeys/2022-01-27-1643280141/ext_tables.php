<?php
defined('TYPO3_MODE') || die();

(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_testkeys_domain_model_produit', 'EXT:testkeys/Resources/Private/Language/locallang_csh_tx_testkeys_domain_model_produit.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_testkeys_domain_model_produit');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_testkeys_domain_model_category', 'EXT:testkeys/Resources/Private/Language/locallang_csh_tx_testkeys_domain_model_category.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_testkeys_domain_model_category');
})();
