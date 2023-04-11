<?php
namespace Wok\WokPhotostation\Controller;

/***
 *
 * This file is part of the "PhotoStation" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018
 *
 ***/

// Müssen für die Umwandlung der Dateinamen aus den Settings eingebunden werden
use \TYPO3\CMS\Core\Utility\GeneralUtility;
use \TYPO3\CMS\Core\Utility\PathUtility;

/**
 * DisplayController
 */
class DisplayController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
	/**
	 * Initializes the current action
	 *
	 * @return void
	 */
	public function initializeAction()
	{

		$newline = "\n";
		$jsSourceFile = "";
		$cssFile = "";
		// Für die Einbindung der GPXViewer JavaScript-Datei in den Header (NICHT IN DEN FOOTER, da sonst eventuell die Lightbox nicht schnell genug geladen ist!
		// Für die Umwandlung des Dateinamens aus den Settings müssen oben FilePathSanitizer und GeneralUtility mit use eingebunden werden
		$jsSourceFile = '<script src="' . 
				PathUtility::getAbsoluteWebPath(GeneralUtility::getFileAbsFileName($this->settings['jsSourceFile'])) .
				'" type="text/javascript"></script>';
		$GLOBALS['TSFE']->additionalHeaderData['tx_' . $this->request->getControllerExtensionKey()] = $jsSourceFile;

/*
EINBINDUNG VON CSS ERFOLGT MIT INCLUDE.CSS IM TYPOSCRIPT-SETUP
Damit wird zwar das Photostation-CSS immer eingebunden, aber das ist nicht so dramatisch.
		// Für die Einbindung der GPXViewer CSS-Datei
		// Für die Umwandlung des Dateinamens aus den Settings müssen oben FilePathSanitizer und GeneralUtility mit use eingebunden werden
		$cssFile = 	'<link rel="stylesheet" href="' . 
				PathUtility::getAbsoluteWebPath(GeneralUtility::getFileAbsFileName($this->settings['cssFile'])) .
				'" />';
		$GLOBALS['TSFE']->additionalFooterData['tx_' . $this->request->getControllerExtensionKey()] = $cssFile;
*/
		// Header und Footer werden bei jedem neuen CE überschrieben!
	}


	/**
	 * action index
	 *
	 * @return void
	 */
	public function indexAction()
	{
		if(!isset($this->settings['info'])) {
			$this->settings['info'] = '';
		};
		if(!isset($this->settings['album'])) {
			$this->settings['album'] = '';
		};
		if(!isset($this->settings['description'])) {
			$this->settings['description'] = '';
		};

		// Werte aus Flexform auslesen
		$info = $this->settings['info'];
		$album = $this->settings['album'];
		$description = $this->settings['description'];

		// Werte zuweisen
		$this->view->assign('info', $info);
		$this->view->assign('album', $album);
		$this->view->assign('description', $description);

		// uid auslesen und zuweisen
		// This might throw a deprecation message which can be ignored, see here:
		// https://stackoverflow.com/questions/56463377/deprecationmessage-getting-content-object-in-controller
		$uid = $this->configurationManager->getContentObject()->data['uid'];
		$this->view->assign('uid', $uid);

	}
}
