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
use \TYPO3\CMS\Frontend\Resource\FilePathSanitizer;
use \TYPO3\CMS\Core\Utility\GeneralUtility;

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
				GeneralUtility::makeInstance(FilePathSanitizer::class)->sanitize((string)$this->settings['jsSourceFile']) . 
				'" type="text/javascript"></script>';
		$GLOBALS['TSFE']->additionalHeaderData['tx_' . $this->request->getControllerExtensionKey()] = $jsSourceFile;

		// Für die Einbindung der GPXViewer CSS-Datei
		// Für die Umwandlung des Dateinamens aus den Settings müssen oben FilePathSanitizer und GeneralUtility mit use eingebunden werden
		$cssFile = 	'<link rel="stylesheet" href="' . 
				GeneralUtility::makeInstance(FilePathSanitizer::class)->sanitize((string)$this->settings['cssFile']) . 
				'" />';
		$GLOBALS['TSFE']->additionalFooterData['tx_' . $this->request->getControllerExtensionKey()] = $cssFile;

		// Header und Footer werden bei jedem neuen CE überschrieben!
	}


	/**
	 * action index
	 *
	 * @return void
	 */
	public function indexAction()
	{

		// Werte aus Flexform auslesen
		$info = $this->settings['info'];
		$album = $this->settings['album'];
		$description = $this->settings['description'];

		// Werte zuweisen
		$this->view->assign('info', $info);
		$this->view->assign('album', $album);
		$this->view->assign('description', $description);

		// uid auslesen und zuweisen
		$uid = $this->configurationManager->getContentObject()->data['uid'];
		$this->view->assign('uid', $uid);

	}
}
