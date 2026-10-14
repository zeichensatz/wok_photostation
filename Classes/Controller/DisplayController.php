<?php
namespace Wok\WokPhotostation\Controller;

/***
 *
 * This file is part of the "PhotoStation" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 - 2026
 *
 ***/

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Page\AssetCollector;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\PathUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * DisplayController
 */
class DisplayController extends ActionController
{
	/**
	* action index
	*
	* @return ResponseInterface
	*/
	public function indexAction(): ResponseInterface
	{
		$info = $this->settings['info'] ?? '';
		$album = $this->settings['album'] ?? '';
		$description = $this->settings['description'] ?? '';

		$currentContentObject = $this->request->getAttribute('currentContentObject');
		// @extensionScannerIgnoreLine
		$uid = $currentContentObject ? $currentContentObject->data['uid'] : 0;

		$this->view->assign('info', $info);
		$this->view->assign('album', $album);
		$this->view->assign('description', $description);
		$this->view->assign('uid', $uid);

		return $this->htmlResponse();
	}
}
