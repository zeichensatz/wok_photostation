<?php
namespace Wok\WokPhotostation\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Wolfgang Kleinbach <info@zeichensatz.de>
 */
class DisplayTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Wok\WokPhotostation\Domain\Model\Display
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wok\WokPhotostation\Domain\Model\Display();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getAlbumhashReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAlbumhash()
        );
    }

    /**
     * @test
     */
    public function setAlbumhashForStringSetsAlbumhash()
    {
        $this->subject->setAlbumhash('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'albumhash',
            $this->subject
        );
    }
}
