<?php
defined('TYPO3') or die('Access denied.');

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'WokPhotostation',
        'Albumdisplay',
        [
            \Wok\WokPhotostation\Controller\DisplayController::class => 'index'
        ],
        // non-cacheable actions
        [
            \Wok\WokPhotostation\Controller\DisplayController::class => 'index'
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    albumdisplay {
                        iconIdentifier = wok_photostation-plugin-albumdisplay
                        title = LLL:EXT:wok_photostation/Resources/Private/Language/locallang_db.xlf:tx_wok_photostation_albumdisplay.name
                        description = LLL:EXT:wok_photostation/Resources/Private/Language/locallang_db.xlf:tx_wok_photostation_albumdisplay.description
                        tt_content_defValues {
                            CType = list
                            list_type = wokphotostation_albumdisplay
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder