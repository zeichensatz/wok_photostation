<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Wok.WokPhotostation',
            'Albumdisplay',
            [
                'Display' => 'index'
            ],
            // non-cacheable actions
            [
                'Display' => 'index'
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
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'wok_photostation-plugin-albumdisplay',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:wok_photostation/Resources/Public/Icons/user_plugin_albumdisplay.svg']
			);
		
    }
);
## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder