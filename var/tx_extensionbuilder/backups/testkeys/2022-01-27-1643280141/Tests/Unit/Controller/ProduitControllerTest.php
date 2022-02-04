<?php

declare(strict_types=1);

namespace Oussema\Testkeys\Tests\Unit\Controller;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\CMS\Extbase\Mvc\View\ViewInterface;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class ProduitControllerTest extends UnitTestCase
{
    /**
     * @var \Oussema\Testkeys\Controller\ProduitController|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder($this->buildAccessibleProxy(\Oussema\Testkeys\Controller\ProduitController::class))
            ->onlyMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllProduitsFromRepositoryAndAssignsThemToView(): void
    {
        $allProduits = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $produitRepository = $this->getMockBuilder(\Oussema\Testkeys\Domain\Repository\ProduitRepository::class)
            ->onlyMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $produitRepository->expects(self::once())->method('findAll')->will(self::returnValue($allProduits));
        $this->subject->_set('produitRepository', $produitRepository);

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('produits', $allProduits);
        $this->subject->_set('view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenProduitToView(): void
    {
        $produit = new \Oussema\Testkeys\Domain\Model\Produit();

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $this->subject->_set('view', $view);
        $view->expects(self::once())->method('assign')->with('produit', $produit);

        $this->subject->showAction($produit);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenProduitToProduitRepository(): void
    {
        $produit = new \Oussema\Testkeys\Domain\Model\Produit();

        $produitRepository = $this->getMockBuilder(\Oussema\Testkeys\Domain\Repository\ProduitRepository::class)
            ->onlyMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $produitRepository->expects(self::once())->method('add')->with($produit);
        $this->subject->_set('produitRepository', $produitRepository);

        $this->subject->createAction($produit);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenProduitToView(): void
    {
        $produit = new \Oussema\Testkeys\Domain\Model\Produit();

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $this->subject->_set('view', $view);
        $view->expects(self::once())->method('assign')->with('produit', $produit);

        $this->subject->editAction($produit);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenProduitInProduitRepository(): void
    {
        $produit = new \Oussema\Testkeys\Domain\Model\Produit();

        $produitRepository = $this->getMockBuilder(\Oussema\Testkeys\Domain\Repository\ProduitRepository::class)
            ->onlyMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $produitRepository->expects(self::once())->method('update')->with($produit);
        $this->subject->_set('produitRepository', $produitRepository);

        $this->subject->updateAction($produit);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenProduitFromProduitRepository(): void
    {
        $produit = new \Oussema\Testkeys\Domain\Model\Produit();

        $produitRepository = $this->getMockBuilder(\Oussema\Testkeys\Domain\Repository\ProduitRepository::class)
            ->onlyMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $produitRepository->expects(self::once())->method('remove')->with($produit);
        $this->subject->_set('produitRepository', $produitRepository);

        $this->subject->deleteAction($produit);
    }
}
