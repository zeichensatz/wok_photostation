<?php
defined('TYPO3') or die('Access denied.');

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

$pluginSignature = 'wokphotostation_albumdisplay';

// 1. Plugin registrieren
ExtensionUtility::registerPlugin(
    'WokPhotostation',
    'Albumdisplay',
    'PhotoStation album display',
    'EXT:wok_photostation/Resources/Public/Icons/Extension.svg',
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

// 2. FlexForm-Datenstruktur über die offizielle API an den CType binden
ExtensionManagementUtility::addPiFlexFormValue(
    '*', // Wildcard steuert, dass das FlexForm über die Signatur geladen wird
    'FILE:EXT:wok_photostation/Configuration/FlexForms/Albumdisplay.xml',
    $pluginSignature
);

// 3. Dem Inhaltselement mitteilen, dass das pi_flexform-Feld eingeblendet werden soll
// Nutzt die Core-Hilfsmethode, um das Feld sauber nach dem Header-Bereich zu platzieren
ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'pi_flexform',
    $pluginSignature,
    'after:palette:headers'
);
