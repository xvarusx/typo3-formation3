<?php

declare(strict_types=1);

namespace Oussema\Testkeys\Controller;


/**
 * This file is part of the "test" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2022 
 */


/**
 * CategoryController
 */
class CategoryController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action list
     *
     * @return string|object|null|void
     */
    public function listAction()
    {
        $categories = $this->categoryRepository->findAll();
        $this->view->assign('categories', $categories);
    }

    /**
     * action show
     *
     * @param \Oussema\Testkeys\Domain\Model\Category $category
     * @return string|object|null|void
     */
    public function showAction(\Oussema\Testkeys\Domain\Model\Category $category)
    {
        $this->view->assign('category', $category);
    }

    /**
     * action new
     *
     * @return string|object|null|void
     */
    public function newAction()
    {
    }

    /**
     * action create
     *
     * @param \Oussema\Testkeys\Domain\Model\Category $newCategory
     * @return string|object|null|void
     */
    public function createAction(\Oussema\Testkeys\Domain\Model\Category $newCategory)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->categoryRepository->add($newCategory);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \Oussema\Testkeys\Domain\Model\Category $category
     * @TYPO3\CMS\Extbase\Annotation\IgnoreValidation("category")
     * @return string|object|null|void
     */
    public function editAction(\Oussema\Testkeys\Domain\Model\Category $category)
    {
        $this->view->assign('category', $category);
    }

    /**
     * action update
     *
     * @param \Oussema\Testkeys\Domain\Model\Category $category
     * @return string|object|null|void
     */
    public function updateAction(\Oussema\Testkeys\Domain\Model\Category $category)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->categoryRepository->update($category);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \Oussema\Testkeys\Domain\Model\Category $category
     * @return string|object|null|void
     */
    public function deleteAction(\Oussema\Testkeys\Domain\Model\Category $category)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->categoryRepository->remove($category);
        $this->redirect('list');
    }
}
