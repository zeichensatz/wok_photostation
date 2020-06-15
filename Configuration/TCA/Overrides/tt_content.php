<?php
defined('TYPO3_MODE') || die();

/***************
 * Register plugin for selection in the backend plugin list
 */
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'WokPhotostation',
    'Albumdisplay',
    'PhotoStation album display',
    'EXT:wok_photostation/Resources/Public/Icons/user_plugin_albumdisplay.svg'
);

/***************
 * Add flexForms for content element configuration
 */
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['wokphotostation_albumdisplay'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    // plugin signature: <extension key without underscores> '_' <plugin name in lowercase>
    'wokphotostation_albumdisplay',
    // Flexform configuration schema file
    'FILE:EXT:wok_photostation/Configuration/FlexForms/Albumdisplay.xml'
);

/***************
 * Deactivate pages and recursive in tab "plugin" of content element 
 */
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['wokphotostation_albumdisplay'] = 'pages,recursive';
