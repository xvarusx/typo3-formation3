<?php

declare(strict_types=1);

namespace Oussema\Testkeys\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class CategoryTest extends UnitTestCase
{
    /**
     * @var \Oussema\Testkeys\Domain\Model\Category|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \Oussema\Testkeys\Domain\Model\Category::class,
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
    public function getIdReturnsInitialValueForInt(): void
    {
        self::assertSame(
            0,
            $this->subject->getId()
        );
    }

    /**
     * @test
     */
    public function setIdForIntSetsId(): void
    {
        $this->subject->setId(12);

        self::assertEquals(12, $this->subject->_get('id'));
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName(): void
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('name'));
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription(): void
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('description'));
    }

    /**
     * @test
     */
    public function getCreatedAtReturnsInitialValueForDateTime(): void
    {
        self::assertEquals(
            null,
            $this->subject->getCreatedAt()
        );
    }

    /**
     * @test
     */
    public function setCreatedAtForDateTimeSetsCreatedAt(): void
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setCreatedAt($dateTimeFixture);

        self::assertEquals($dateTimeFixture, $this->subject->_get('createdAt'));
    }

    /**
     * @test
     */
    public function getUpdatedAtReturnsInitialValueForDateTime(): void
    {
        self::assertEquals(
            null,
            $this->subject->getUpdatedAt()
        );
    }

    /**
     * @test
     */
    public function setUpdatedAtForDateTimeSetsUpdatedAt(): void
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setUpdatedAt($dateTimeFixture);

        self::assertEquals($dateTimeFixture, $this->subject->_get('updatedAt'));
    }

    /**
     * @test
     */
    public function getDelatedAtReturnsInitialValueForDateTime(): void
    {
        self::assertEquals(
            null,
            $this->subject->getDelatedAt()
        );
    }

    /**
     * @test
     */
    public function setDelatedAtForDateTimeSetsDelatedAt(): void
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDelatedAt($dateTimeFixture);

        self::assertEquals($dateTimeFixture, $this->subject->_get('delatedAt'));
    }
}
