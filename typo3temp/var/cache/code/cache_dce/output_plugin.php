<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    'mod.wizards.newContentElement.wizardItems.dce.header = ' .
    'LLL:EXT:dce/Resources/Private/Language/locallang_db.xlf:tx_dce_domain_model_dce_long'
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    \T3\Dce\Compatibility::isTypo3Version('10.0.0') ? 'dce' : 'T3.dce',
    'tettt',
    [
        \T3\Dce\Compatibility::isTypo3Version('10.0.0') ? \T3\Dce\Controller\DceController::class : 'Dce' => 'show',
    ],
    [],
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'dce',
    'setup',
    'temp.dceContentElement < tt_content.dce_tettt.20
     tt_content.dce_tettt >
     tt_content.dce_tettt < temp.dceContentElement
     temp.dceContentElement >
    ',
    43
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'dce',
    'setup',
    "# Hide lib.stdheader for DCE with identifier dce_tettt
     tt_content.dce_tettt.10 >",
    43
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    "
    mod.wizards.newContentElement.wizardItems.dce.elements.dce_tettt {
        iconIdentifier = content-header
        title = tettt
        description = 
        tt_content_defValues {
            CType = dce_tettt
        }
    }
    mod.wizards.newContentElement.wizardItems.dce.show := addToList(dce_tettt)
    TCEFORM.tt_content.pi_flexform.types.dce_tettt.label = LLL:EXT:dce/Resources/Private/Language/locallang_db.xlf:tx_dce_domain_model_dce.flexformLabel.default
    "
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    \T3\Dce\Compatibility::isTypo3Version('10.0.0') ? 'dce' : 'T3.dce',
    'test',
    [
        \T3\Dce\Compatibility::isTypo3Version('10.0.0') ? \T3\Dce\Controller\DceController::class : 'Dce' => 'show',
    ],
    [],
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'dce',
    'setup',
    'temp.dceContentElement < tt_content.dce_test.20
     tt_content.dce_test >
     tt_content.dce_test < temp.dceContentElement
     temp.dceContentElement >
    ',
    43
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'dce',
    'setup',
    "# Hide lib.stdheader for DCE with identifier dce_test
     tt_content.dce_test.10 >",
    43
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    "
    mod.wizards.newContentElement.wizardItems.dce.elements.dce_test {
        iconIdentifier = content-header
        title = test
        description = 
        tt_content_defValues {
            CType = dce_test
        }
    }
    mod.wizards.newContentElement.wizardItems.dce.show := addToList(dce_test)
    TCEFORM.tt_content.pi_flexform.types.dce_test.label = LLL:EXT:dce/Resources/Private/Language/locallang_db.xlf:tx_dce_domain_model_dce.flexformLabel.default
    "
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    \T3\Dce\Compatibility::isTypo3Version('10.0.0') ? 'dce' : 'T3.dce',
    'checkbox',
    [
        \T3\Dce\Compatibility::isTypo3Version('10.0.0') ? \T3\Dce\Controller\DceController::class : 'Dce' => 'show',
    ],
    [],
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'dce',
    'setup',
    'temp.dceContentElement < tt_content.dce_checkbox.20
     tt_content.dce_checkbox >
     tt_content.dce_checkbox < temp.dceContentElement
     temp.dceContentElement >
    ',
    43
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'dce',
    'setup',
    "# Hide lib.stdheader for DCE with identifier dce_checkbox
     tt_content.dce_checkbox.10 >",
    43
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    "
    mod.wizards.newContentElement.wizardItems.dce.elements.dce_checkbox {
        iconIdentifier = content-header
        title = checkBox
        description = 
        tt_content_defValues {
            CType = dce_checkbox
        }
    }
    mod.wizards.newContentElement.wizardItems.dce.show := addToList(dce_checkbox)
    TCEFORM.tt_content.pi_flexform.types.dce_checkbox.label = LLL:EXT:dce/Resources/Private/Language/locallang_db.xlf:tx_dce_domain_model_dce.flexformLabel.default
    "
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    \T3\Dce\Compatibility::isTypo3Version('10.0.0') ? 'dce' : 'T3.dce',
    'simple_test',
    [
        \T3\Dce\Compatibility::isTypo3Version('10.0.0') ? \T3\Dce\Controller\DceController::class : 'Dce' => 'show',
    ],
    [],
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'dce',
    'setup',
    'temp.dceContentElement < tt_content.dce_simple_test.20
     tt_content.dce_simple_test >
     tt_content.dce_simple_test < temp.dceContentElement
     temp.dceContentElement >
    ',
    43
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'dce',
    'setup',
    "# Hide lib.stdheader for DCE with identifier dce_simple_test
     tt_content.dce_simple_test.10 >",
    43
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    "
    mod.wizards.newContentElement.wizardItems.dce.elements.dce_simple_test {
        iconIdentifier = content-header
        title = input+selectedt items+group
        description = 
        tt_content_defValues {
            CType = dce_simple_test
        }
    }
    mod.wizards.newContentElement.wizardItems.dce.show := addToList(dce_simple_test)
    TCEFORM.tt_content.pi_flexform.types.dce_simple_test.label = LLL:EXT:dce/Resources/Private/Language/locallang_db.xlf:tx_dce_domain_model_dce.flexformLabel.default
    "
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    \T3\Dce\Compatibility::isTypo3Version('10.0.0') ? 'dce' : 'T3.dce',
    'teaser',
    [
        \T3\Dce\Compatibility::isTypo3Version('10.0.0') ? \T3\Dce\Controller\DceController::class : 'Dce' => 'show',
    ],
    [],
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'dce',
    'setup',
    'temp.dceContentElement < tt_content.dce_teaser.20
     tt_content.dce_teaser >
     tt_content.dce_teaser < temp.dceContentElement
     temp.dceContentElement >
    ',
    43
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'dce',
    'setup',
    "# Hide lib.stdheader for DCE with identifier dce_teaser
     tt_content.dce_teaser.10 >",
    43
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    "
    mod.wizards.newContentElement.wizardItems.dce.elements.dce_teaser {
        iconIdentifier = content-header
        title = text+text area+ image
        description = 
        tt_content_defValues {
            CType = dce_teaser
        }
    }
    mod.wizards.newContentElement.wizardItems.dce.show := addToList(dce_teaser)
    TCEFORM.tt_content.pi_flexform.types.dce_teaser.label = LLL:EXT:dce/Resources/Private/Language/locallang_db.xlf:tx_dce_domain_model_dce.flexformLabel.default
    "
);


#
