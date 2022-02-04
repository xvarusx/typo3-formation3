<?php

$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['itemGroups']['dce'] =
    'LLL:EXT:dce/Resources/Private/Language/locallang_db.xlf:tx_dce_domain_model_dce_long';$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xlf:tx_dce_domain_model_dce.miscellaneous',
    1 => '--div--'
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'tettt',
        'dce_tettt',
        'content-header',
        \T3\Dce\Compatibility::isTypo3Version('10.4') ? 'dce' : null
    ]
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['dce_tettt'] = 'content-header';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['dce_tettt'] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',dce_tettt'] = <<<XML
<?xml version="1.0"?>
<T3DataStructure><meta><langDisable>1</langDisable><langDatabaseOverlay>1</langDatabaseOverlay></meta><sheets><sheet.tettt><ROOT><sheetTitle><![CDATA[tettt]]></sheetTitle><type>array</type><el><settings.ttt><TCEforms><label><![CDATA[ttt]]></label><config>
    <type>input</type>
</config></TCEforms></settings.ttt></el></ROOT></sheet.tettt><sheet.ttttt><ROOT><sheetTitle><![CDATA[tttt]]></sheetTitle><type>array</type><el><settings.reregreg><TCEforms><label><![CDATA[er'reg]]></label><config>
    <type>input</type>
</config></TCEforms></settings.reregreg></el></ROOT></sheet.ttttt></sheets></T3DataStructure>

XML;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_tettt_head']['canNotCollapse'] = true;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_tettt_head']['showitem'] = 'CType';
$GLOBALS['TCA']['tt_content']['types']['dce_tettt']['showitem'] = '--palette--;;dce_palette_dce_tettt_head,
--palette--;;dce_palette_dce_tettt,
pi_flexform,
--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended';
if (\T3\Dce\Compatibility::isTypo3Version('10.0.0')) {
    $GLOBALS['TCA']['tt_content']['types']['dce_tettt']['previewRenderer'] =
        \T3\Dce\Components\BackendView\DcePreviewRenderer::class;
}
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_tettt']['canNotCollapse'] = true;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_tettt']['showitem'] = 'sys_language_uid, l18n_parent, colPos, hidden';
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_tettt']['showitem'] .=
    ',tx_gridelements_container,tx_gridelements_columns';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'test',
        'dce_test',
        'content-header',
        \T3\Dce\Compatibility::isTypo3Version('10.4') ? 'dce' : null
    ]
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['dce_test'] = 'content-header';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['dce_test'] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',dce_test'] = <<<XML
<?xml version="1.0"?>
<T3DataStructure><meta><langDisable>1</langDisable><langDatabaseOverlay>1</langDatabaseOverlay></meta><sheets><sheet.tabGeneral><ROOT><sheetTitle><![CDATA[LLL:EXT:dce/Resources/Private/Language/locallang.xlf:generaltab]]></sheetTitle><type>array</type><el><settings.test><title><![CDATA[test]]></title><tx_templatevoila><title><![CDATA[test]]></title></tx_templatevoila><section>1</section><type>array</type><el><container_test><type>array</type><title><![CDATA[test]]></title><tx_templatevoila><title><![CDATA[test]]></title></tx_templatevoila><el><input1><TCEforms><label><![CDATA[input1]]></label><config>
    <type>input</type>
</config></TCEforms></input1><image><TCEforms><label><![CDATA[image]]></label><config>
	<type>group</type>
	<internal_type>db</internal_type>
	<allowed>pages</allowed>
	<size>5</size>
	<minitems>0</minitems>
	<maxitems>999</maxitems>
	<show_thumbs>1</show_thumbs>

	<!-- This enables the access on properties/attributes of given table/object
		 example: {field.yourvariable.title} -->
	<dce_load_schema>1</dce_load_schema>
	<!-- If enabled, will automatically translate pages or records if translation exists. -->
	<dce_enable_autotranslation>1</dce_enable_autotranslation>
</config>
</TCEforms></image><image2><TCEforms><label><![CDATA[image2]]></label><config>
	<type>group</type>
	<internal_type>db</internal_type>
	<allowed>file</allowed>
	<size>1</size>
	<minitems>0</minitems>
	<maxitems>1</maxitems>
	<uploadfolder>fileadmin</uploadfolder>
	<show_thumbs>1</show_thumbs>
</config>
</TCEforms></image2></el></container_test></el></settings.test><settings.hh><TCEforms><label><![CDATA[thyh]]></label><config>
	<type>inline</type>
	<foreign_table>sys_file_reference</foreign_table>
	<foreign_field>uid_foreign</foreign_field>
	<foreign_sortby>sorting_foreign</foreign_sortby>
	<foreign_table_field>tablenames</foreign_table_field>
	<foreign_match_fields>
		<fieldname>hh</fieldname>
	</foreign_match_fields>
	<foreign_label>uid_local</foreign_label>
	<foreign_selector>uid_local</foreign_selector>
	<overrideChildTca>
		<columns>
			<uid_local>
				<config>
					<appearance>
						<elementBrowserType>file</elementBrowserType>
						<elementBrowserAllowed>gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg</elementBrowserAllowed>
					</appearance>
				</config>
			</uid_local>
		</columns>
		<types type="array">
			<numIndex index="2">
				<showitem>--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,--palette--;;filePalette</showitem>
			</numIndex>
		</types>
	</overrideChildTca>

	<minitems>0</minitems>
	<maxitems>99</maxitems>

	<appearance>
		<useSortable>1</useSortable>
		<headerThumbnail>
			<field>uid_local</field>
			<width>45c</width>
			<height>45</height>
		</headerThumbnail>

		<enabledControls>
			<info>1</info>
			<dragdrop>1</dragdrop>
			<hide>1</hide>
			<new>0</new>
			<sort>0</sort>
			<delete>1</delete>
		</enabledControls>

		<createNewRelationLinkTitle>LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference</createNewRelationLinkTitle>
	</appearance>

	<behaviour>
		<allowLanguageSynchronization>1</allowLanguageSynchronization>
	</behaviour>

	<dce_load_schema>1</dce_load_schema>
	<dce_get_fal_objects>1</dce_get_fal_objects>
</config>
</TCEforms></settings.hh></el></ROOT></sheet.tabGeneral></sheets></T3DataStructure>

XML;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_test_head']['canNotCollapse'] = true;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_test_head']['showitem'] = 'CType';
$GLOBALS['TCA']['tt_content']['types']['dce_test']['showitem'] = '--palette--;;dce_palette_dce_test_head,
--palette--;;dce_palette_dce_test,
pi_flexform,
--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended';
if (\T3\Dce\Compatibility::isTypo3Version('10.0.0')) {
    $GLOBALS['TCA']['tt_content']['types']['dce_test']['previewRenderer'] =
        \T3\Dce\Components\BackendView\DcePreviewRenderer::class;
}
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_test']['canNotCollapse'] = true;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_test']['showitem'] = 'sys_language_uid, l18n_parent, colPos, hidden';
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_test']['showitem'] .=
    ',tx_gridelements_container,tx_gridelements_columns';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'checkBox',
        'dce_checkbox',
        'content-header',
        \T3\Dce\Compatibility::isTypo3Version('10.4') ? 'dce' : null
    ]
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['dce_checkbox'] = 'content-header';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['dce_checkbox'] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',dce_checkbox'] = <<<XML
<?xml version="1.0"?>
<T3DataStructure><meta><langDisable>1</langDisable><langDatabaseOverlay>1</langDatabaseOverlay></meta><sheets><sheet.tabGeneral><ROOT><sheetTitle><![CDATA[LLL:EXT:dce/Resources/Private/Language/locallang.xlf:generaltab]]></sheetTitle><type>array</type><el><settings.variableOfCheck><TCEforms><label><![CDATA[TitleOfCheckBox]]></label><config>
	<type>check</type>
	<default>0</default>
</config>
</TCEforms></settings.variableOfCheck></el></ROOT></sheet.tabGeneral></sheets></T3DataStructure>

XML;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_checkbox_head']['canNotCollapse'] = true;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_checkbox_head']['showitem'] = 'CType';
$GLOBALS['TCA']['tt_content']['types']['dce_checkbox']['showitem'] = '--palette--;;dce_palette_dce_checkbox_head,
--palette--;;dce_palette_dce_checkbox,
pi_flexform,
--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended';
if (\T3\Dce\Compatibility::isTypo3Version('10.0.0')) {
    $GLOBALS['TCA']['tt_content']['types']['dce_checkbox']['previewRenderer'] =
        \T3\Dce\Components\BackendView\DcePreviewRenderer::class;
}
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_checkbox']['canNotCollapse'] = true;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_checkbox']['showitem'] = 'sys_language_uid, l18n_parent, colPos, hidden';
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_checkbox']['showitem'] .=
    ',tx_gridelements_container,tx_gridelements_columns';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'input+selectedt items+group',
        'dce_simple_test',
        'content-header',
        \T3\Dce\Compatibility::isTypo3Version('10.4') ? 'dce' : null
    ]
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['dce_simple_test'] = 'content-header';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['dce_simple_test'] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',dce_simple_test'] = <<<XML
<?xml version="1.0"?>
<T3DataStructure><meta><langDisable>1</langDisable><langDatabaseOverlay>1</langDatabaseOverlay></meta><sheets><sheet.tabGeneral><ROOT><sheetTitle><![CDATA[LLL:EXT:dce/Resources/Private/Language/locallang.xlf:generaltab]]></sheetTitle><type>array</type><el><settings.requiredInput><TCEforms><label><![CDATA[Required input]]></label><config>
	<type>input</type>
	<size>30</size>
	<eval>trim,required</eval>
</config>
</TCEforms></settings.requiredInput><settings.selectItem><TCEforms><label><![CDATA[select item]]></label><config>
	<type>select</type>
	<renderType>selectSingle</renderType>
	<items type="array">
		<numIndex index="0" type="array">
			<numIndex index="0">Label A</numIndex>
			<numIndex index="1">0</numIndex>
		</numIndex>
		<numIndex index="1" type="array">
			<numIndex index="0">Label B</numIndex>
			<numIndex index="1">1</numIndex>
		</numIndex>
	</items>
	<size>1</size>
	<minitems>1</minitems>
	<maxitems>1</maxitems>
</config>
<!-- <onChange>reload</onChange> -->
</TCEforms></settings.selectItem><settings.linkPages><TCEforms><label><![CDATA[Link pages]]></label><config>
	<type>group</type>
	<internal_type>db</internal_type>
	<allowed>pages</allowed>
	<size>5</size>
	<minitems>0</minitems>
	<maxitems>999</maxitems>
	<show_thumbs>1</show_thumbs>

	<!-- This enables the access on properties/attributes of given table/object
		 example: {field.yourvariable.title} -->
	<dce_load_schema>1</dce_load_schema>
	<!-- If enabled, will automatically translate pages or records if translation exists. -->
	<dce_enable_autotranslation>1</dce_enable_autotranslation>
</config>
</TCEforms></settings.linkPages></el></ROOT></sheet.tabGeneral></sheets></T3DataStructure>

XML;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_simple_test_head']['canNotCollapse'] = true;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_simple_test_head']['showitem'] = 'CType';
$GLOBALS['TCA']['tt_content']['types']['dce_simple_test']['showitem'] = '--palette--;;dce_palette_dce_simple_test_head,
--palette--;;dce_palette_dce_simple_test,
pi_flexform,
--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended';
if (\T3\Dce\Compatibility::isTypo3Version('10.0.0')) {
    $GLOBALS['TCA']['tt_content']['types']['dce_simple_test']['previewRenderer'] =
        \T3\Dce\Components\BackendView\DcePreviewRenderer::class;
}
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_simple_test']['canNotCollapse'] = true;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_simple_test']['showitem'] = 'sys_language_uid, l18n_parent, colPos, hidden';
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_simple_test']['showitem'] .=
    ',tx_gridelements_container,tx_gridelements_columns';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'text+text area+ image',
        'dce_teaser',
        'content-header',
        \T3\Dce\Compatibility::isTypo3Version('10.4') ? 'dce' : null
    ]
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['dce_teaser'] = 'content-header';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['dce_teaser'] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',dce_teaser'] = <<<XML
<?xml version="1.0"?>
<T3DataStructure><meta><langDisable>1</langDisable><langDatabaseOverlay>1</langDatabaseOverlay></meta><sheets><sheet.tabGeneral><ROOT><sheetTitle><![CDATA[LLL:EXT:dce/Resources/Private/Language/locallang.xlf:generaltab]]></sheetTitle><type>array</type><el><settings.title><TCEforms><label><![CDATA[Title]]></label><config>
	<type>input</type>
	<size>30</size>
	<eval>trim,required</eval>
</config>
</TCEforms></settings.title><settings.descriptionVariable><TCEforms><label><![CDATA[Description_title]]></label><config>
	<type>text</type>
	<rows>5</rows>
	<cols>30</cols>
	<eval>trim,required</eval>
	<enableRichtext>1</enableRichtext>
	<richtextConfiguration>default</richtextConfiguration>
</config>
</TCEforms></settings.descriptionVariable><settings.images><TCEforms><label><![CDATA[Images]]></label><config>
	<type>inline</type>
	<foreign_table>sys_file_reference</foreign_table>
	<foreign_field>uid_foreign</foreign_field>
	<foreign_sortby>sorting_foreign</foreign_sortby>
	<foreign_table_field>tablenames</foreign_table_field>
	<foreign_match_fields>
		<fieldname>images</fieldname>
	</foreign_match_fields>
	<foreign_label>uid_local</foreign_label>
	<foreign_selector>uid_local</foreign_selector>
	<overrideChildTca>
		<columns>
			<uid_local>
				<config>
					<appearance>
						<elementBrowserType>file</elementBrowserType>
						<elementBrowserAllowed>gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg</elementBrowserAllowed>
					</appearance>
				</config>
			</uid_local>
		</columns>
		<types type="array">
			<numIndex index="2">
				<showitem>--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,--palette--;;filePalette</showitem>
			</numIndex>
		</types>
	</overrideChildTca>

	<minitems>0</minitems>
	<maxitems>99</maxitems>

	<appearance>
		<useSortable>1</useSortable>
		<headerThumbnail>
			<field>uid_local</field>
			<width>45c</width>
			<height>45</height>
		</headerThumbnail>

		<enabledControls>
			<info>1</info>
			<dragdrop>1</dragdrop>
			<hide>1</hide>
			<new>0</new>
			<sort>0</sort>
			<delete>1</delete>
		</enabledControls>

		<createNewRelationLinkTitle>LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference</createNewRelationLinkTitle>
	</appearance>

	<behaviour>
		<allowLanguageSynchronization>1</allowLanguageSynchronization>
	</behaviour>

	<dce_load_schema>1</dce_load_schema>
	<dce_get_fal_objects>1</dce_get_fal_objects>
</config>
</TCEforms></settings.images></el></ROOT></sheet.tabGeneral></sheets></T3DataStructure>

XML;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_teaser_head']['canNotCollapse'] = true;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_teaser_head']['showitem'] = 'CType';
$GLOBALS['TCA']['tt_content']['types']['dce_teaser']['showitem'] = '--palette--;;dce_palette_dce_teaser_head,
--palette--;;dce_palette_dce_teaser,
pi_flexform,
--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended';
if (\T3\Dce\Compatibility::isTypo3Version('10.0.0')) {
    $GLOBALS['TCA']['tt_content']['types']['dce_teaser']['previewRenderer'] =
        \T3\Dce\Components\BackendView\DcePreviewRenderer::class;
}
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_teaser']['canNotCollapse'] = true;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_teaser']['showitem'] = 'sys_language_uid, l18n_parent, colPos, hidden';
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_teaser']['showitem'] .=
    ',tx_gridelements_container,tx_gridelements_columns';



#
