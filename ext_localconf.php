<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'AshokaTree.AtSlider',
            'Pi1',
            [
                'Record' => 'list'
            ],
            // non-cacheable actions
            [
                
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        pi1 {
                            iconIdentifier = atslider-plugin-pi1
                            title = LLL:EXT:at_slider/Resources/Private/Language/locallang_db.xlf:tx_atslider_pi1.name
                            description = LLL:EXT:at_slider/Resources/Private/Language/locallang_db.xlf:tx_atslider_pi1.description
                            tt_content_defValues {
                                CType = list
                                list_type = atslider_pi1
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'atslider-plugin-pi1',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:at_slider/Resources/Public/Icons/user_plugin_pi1.svg']
			);
		
    }
);
