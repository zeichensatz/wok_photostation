<?php
defined('TYPO3') or die('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'WokPhotostation',
    'Albumdisplay',
    'PhotoStation album display'
);
## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder
/***************
 * Above: Register plugin for selection in the backend plugin list
 */

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