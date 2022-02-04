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
 * ProduitController
 */
class ProduitController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action index
     *
     * @return string|object|null|void
     */
    public function indexAction()
    {
    }

    /**
     * action list
     *
     * @return string|object|null|void
     */
    public function listAction()
    {
        $produits = $this->produitRepository->findAll();
        $this->view->assign('produits', $produits);
    }

    /**
     * action show
     *
     * @param \Oussema\Testkeys\Domain\Model\Produit $produit
     * @return string|object|null|void
     */
    public function showAction(\Oussema\Testkeys\Domain\Model\Produit $produit)
    {
        $this->view->assign('produit', $produit);
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
     * @param \Oussema\Testkeys\Domain\Model\Produit $newProduit
     * @return string|object|null|void
     */
    public function createAction(\Oussema\Testkeys\Domain\Model\Produit $newProduit)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->produitRepository->add($newProduit);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \Oussema\Testkeys\Domain\Model\Produit $produit
     * @TYPO3\CMS\Extbase\Annotation\IgnoreValidation("produit")
     * @return string|object|null|void
     */
    public function editAction(\Oussema\Testkeys\Domain\Model\Produit $produit)
    {
        $this->view->assign('produit', $produit);
    }

    /**
     * action update
     *
     * @param \Oussema\Testkeys\Domain\Model\Produit $produit
     * @return string|object|null|void
     */
    public function updateAction(\Oussema\Testkeys\Domain\Model\Produit $produit)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->produitRepository->update($produit);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \Oussema\Testkeys\Domain\Model\Produit $produit
     * @return string|object|null|void
     */
    public function deleteAction(\Oussema\Testkeys\Domain\Model\Produit $produit)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->produitRepository->remove($produit);
        $this->redirect('list');
    }
}
