<?php
defined('TYPO3') or die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wokphotostation_domain_model_display', 'EXT:wok_photostation/Resources/Private/Language/locallang_csh_tx_wokphotostation_domain_model_display.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wokphotostation_domain_model_display');

    }
);
