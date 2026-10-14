<?php
defined('TYPO3') or die('Access denied.');

use Wok\WokPhotostation\Controller\DisplayController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

(static function() {
    // Registrierung als eigenständiges Inhaltselement (TYPO3 13/14 Standard)
    ExtensionUtility::configurePlugin(
        'WokPhotostation',
        'Albumdisplay',
        [
            DisplayController::class => 'index'
        ],
        // non-cacheable actions
        [
            DisplayController::class => 'index'
        ],
        ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT // FÜNFTER PARAMETER ERGÄNZT
    );
})();
## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder