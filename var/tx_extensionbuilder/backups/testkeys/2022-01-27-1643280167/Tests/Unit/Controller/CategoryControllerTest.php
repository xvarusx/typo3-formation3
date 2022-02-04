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
class CategoryControllerTest extends UnitTestCase
{
    /**
     * @var \Oussema\Testkeys\Controller\CategoryController|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder($this->buildAccessibleProxy(\Oussema\Testkeys\Controller\CategoryController::class))
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
    public function listActionFetchesAllCategoriesFromRepositoryAndAssignsThemToView(): void
    {
        $allCategories = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $categoryRepository = $this->getMockBuilder(\Oussema\Testkeys\Domain\Repository\CategoryRepository::class)
            ->onlyMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $categoryRepository->expects(self::once())->method('findAll')->will(self::returnValue($allCategories));
        $this->subject->_set('categoryRepository', $categoryRepository);

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('categories', $allCategories);
        $this->subject->_set('view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenCategoryToView(): void
    {
        $category = new \Oussema\Testkeys\Domain\Model\Category();

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $this->subject->_set('view', $view);
        $view->expects(self::once())->method('assign')->with('category', $category);

        $this->subject->showAction($category);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenCategoryToCategoryRepository(): void
    {
        $category = new \Oussema\Testkeys\Domain\Model\Category();

        $categoryRepository = $this->getMockBuilder(\Oussema\Testkeys\Domain\Repository\CategoryRepository::class)
            ->onlyMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $categoryRepository->expects(self::once())->method('add')->with($category);
        $this->subject->_set('categoryRepository', $categoryRepository);

        $this->subject->createAction($category);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenCategoryToView(): void
    {
        $category = new \Oussema\Testkeys\Domain\Model\Category();

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $this->subject->_set('view', $view);
        $view->expects(self::once())->method('assign')->with('category', $category);

        $this->subject->editAction($category);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenCategoryInCategoryRepository(): void
    {
        $category = new \Oussema\Testkeys\Domain\Model\Category();

        $categoryRepository = $this->getMockBuilder(\Oussema\Testkeys\Domain\Repository\CategoryRepository::class)
            ->onlyMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $categoryRepository->expects(self::once())->method('update')->with($category);
        $this->subject->_set('categoryRepository', $categoryRepository);

        $this->subject->updateAction($category);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenCategoryFromCategoryRepository(): void
    {
        $category = new \Oussema\Testkeys\Domain\Model\Category();

        $categoryRepository = $this->getMockBuilder(\Oussema\Testkeys\Domain\Repository\CategoryRepository::class)
            ->onlyMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $categoryRepository->expects(self::once())->method('remove')->with($category);
        $this->subject->_set('categoryRepository', $categoryRepository);

        $this->subject->deleteAction($category);
    }
}
