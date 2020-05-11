<?php
namespace Wok\WokPhotostation\Domain\Model;


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
/**
 * Display
 */
class Display extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * albumhash
     * 
     * @var string
     */
    protected $albumhash = '';

    /**
     * Returns the albumhash
     * 
     * @return string $albumhash
     */
    public function getAlbumhash()
    {
        return $this->albumhash;
    }

    /**
     * Sets the albumhash
     * 
     * @param string $albumhash
     * @return void
     */
    public function setAlbumhash($albumhash)
    {
        $this->albumhash = $albumhash;
    }
}
