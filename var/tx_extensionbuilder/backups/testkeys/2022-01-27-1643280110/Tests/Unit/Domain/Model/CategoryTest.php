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
    public function getProduitReturnsInitialValueForProduit(): void
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getProduit()
        );
    }

    /**
     * @test
     */
    public function setProduitForObjectStorageContainingProduitSetsProduit(): void
    {
        $produit = new \Oussema\Testkeys\Domain\Model\Produit();
        $objectStorageHoldingExactlyOneProduit = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneProduit->attach($produit);
        $this->subject->setProduit($objectStorageHoldingExactlyOneProduit);

        self::assertEquals($objectStorageHoldingExactlyOneProduit, $this->subject->_get('produit'));
    }

    /**
     * @test
     */
    public function addProduitToObjectStorageHoldingProduit(): void
    {
        $produit = new \Oussema\Testkeys\Domain\Model\Produit();
        $produitObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $produitObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($produit));
        $this->subject->_set('produit', $produitObjectStorageMock);

        $this->subject->addProduit($produit);
    }

    /**
     * @test
     */
    public function removeProduitFromObjectStorageHoldingProduit(): void
    {
        $produit = new \Oussema\Testkeys\Domain\Model\Produit();
        $produitObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $produitObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($produit));
        $this->subject->_set('produit', $produitObjectStorageMock);

        $this->subject->removeProduit($produit);
    }
}
