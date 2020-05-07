<?php
namespace Wok\WokPhotostation\Tests\Unit\Controller;

/**
 * Test case.
 */
class DisplayControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wok\WokPhotostation\Controller\DisplayController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Wok\WokPhotostation\Controller\DisplayController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

}
