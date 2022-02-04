<?php

declare(strict_types=1);

namespace Oussema\Testkeys\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class ProduitTest extends UnitTestCase
{
    /**
     * @var \Oussema\Testkeys\Domain\Model\Produit|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \Oussema\Testkeys\Domain\Model\Produit::class,
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
    public function getPrixReturnsInitialValueForFloat(): void
    {
        self::assertSame(
            0.0,
            $this->subject->getPrix()
        );
    }

    /**
     * @test
     */
    public function setPrixForFloatSetsPrix(): void
    {
        $this->subject->setPrix(3.14159265);

        self::assertEquals(3.14159265, $this->subject->_get('prix'));
    }

    /**
     * @test
     */
    public function getStockReturnsInitialValueForInt(): void
    {
        self::assertSame(
            0,
            $this->subject->getStock()
        );
    }

    /**
     * @test
     */
    public function setStockForIntSetsStock(): void
    {
        $this->subject->setStock(12);

        self::assertEquals(12, $this->subject->_get('stock'));
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
    public function getSlugReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getSlug()
        );
    }

    /**
     * @test
     */
    public function setSlugForStringSetsSlug(): void
    {
        $this->subject->setSlug('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('slug'));
    }

    /**
     * @test
     */
    public function getCategoryReturnsInitialValueForCategory(): void
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getCategory()
        );
    }

    /**
     * @test
     */
    public function setCategoryForObjectStorageContainingCategorySetsCategory(): void
    {
        $category = new \Oussema\Testkeys\Domain\Model\Category();
        $objectStorageHoldingExactlyOneCategory = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneCategory->attach($category);
        $this->subject->setCategory($objectStorageHoldingExactlyOneCategory);

        self::assertEquals($objectStorageHoldingExactlyOneCategory, $this->subject->_get('category'));
    }

    /**
     * @test
     */
    public function addCategoryToObjectStorageHoldingCategory(): void
    {
        $category = new \Oussema\Testkeys\Domain\Model\Category();
        $categoryObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $categoryObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($category));
        $this->subject->_set('category', $categoryObjectStorageMock);

        $this->subject->addCategory($category);
    }

    /**
     * @test
     */
    public function removeCategoryFromObjectStorageHoldingCategory(): void
    {
        $category = new \Oussema\Testkeys\Domain\Model\Category();
        $categoryObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $categoryObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($category));
        $this->subject->_set('category', $categoryObjectStorageMock);

        $this->subject->removeCategory($category);
    }
}
