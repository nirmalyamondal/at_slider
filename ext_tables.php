<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'AshokaTree.AtSlider',
            'Pi1',
            'AT Slider'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('at_slider', 'Configuration/TypoScript', 'AT Slider');

    }
);
