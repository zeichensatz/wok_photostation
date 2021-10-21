<?php
declare(strict_types=1);

namespace Wok\WokPhotostation\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Wolfgang Kleinbach <info@zeichensatz.de>
 */
class DisplayTest extends UnitTestCase
{
    /**
     * @var \Wok\WokPhotostation\Domain\Model\Display|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \Wok\WokPhotostation\Domain\Model\Display::class,
            ['dummy']
        );
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getAlbumhashReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getAlbumhash()
        );
    }

    /**
     * @test
     */
    public function setAlbumhashForStringSetsAlbumhash(): void
    {
        $this->subject->setAlbumhash('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('albumhash'));
    }
}
