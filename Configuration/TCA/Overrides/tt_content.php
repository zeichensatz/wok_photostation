<?php
defined('TYPO3') or die('Access denied.');

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

$pluginSignature = 'wokphotostation_albumdisplay';

// 1. Inhaltselement/Plugin registrieren
ExtensionUtility::registerPlugin(
    'WokPhotostation',
    'Albumdisplay',
    'PhotoStation album display',
    'EXT:wok_photostation/Resources/Public/Icons/Extension.svg',
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

// 2. FlexForm-Datenstruktur direkt an das TCA des Inhaltselements binden (Ersetzt addPiFlexFormValue)
$GLOBALS['TCA']['tt_content']['types'][$pluginSignature]['columnsOverrides']['pi_flexform']['config']['ds'] = [
    'default' => 'FILE:EXT:wok_photostation/Configuration/FlexForms/Albumdisplay.xml',
];

// 3. Dem Inhaltselement mitteilen, dass das pi_flexform-Feld eingeblendet werden soll
ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'pi_flexform',
    $pluginSignature,
    'after:palette:headers'
);
