<?php
namespace AshokaTree\AtSlider\Controller;

/***
 *
 * This file is part of the "AshokaTree Slider" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Nirmalya Mondal <nirmalya.mondal@gmail.com>, https://ashokatree.net
 *
 ***/
/**
 * RecordController
 */
class RecordController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * recordRepository
     * 
     * @var \AshokaTree\AtSlider\Domain\Repository\RecordRepository
     */
    protected $recordRepository = null;

    /**
     * @param \AshokaTree\AtSlider\Domain\Repository\RecordRepository $recordRepository
     */
    public function injectRecordRepository(\AshokaTree\AtSlider\Domain\Repository\RecordRepository $recordRepository)
    {
        $this->recordRepository = $recordRepository;
    }

    /**
     * @var \TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface
     */
    protected $configurationManager;

    /**
     * Initializes the current action
     *
     * @return void
     */
    public function initializeAction()
    {
         parent::initializeAction();
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $pidList = $this->configurationManager->getConfiguration(\TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK
)['persistence']['storagePid'];
        if($pidList) {
             $records = $this->recordRepository->findBySysfolderOrAll($pidList);
        } else {
            $records = $this->recordRepository->findAll();
        }
        $this->view->assign('records', $records);
    }
}
