<?php

declare(strict_types=1);

namespace Oussema\Testkeys\Domain\Model;


/**
 * This file is part of the "test" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2022 
 */

/**
 * Category
 */
class Category extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     *
     * @var string
     */
    protected $name = '';

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * produit
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Oussema\Testkeys\Domain\Model\Produit>
     */
    protected $produit = null;

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * __construct
     */
    public function __construct()
    {

        // Do not remove the next line: It would break the functionality
        $this->initializeObject();
    }

    /**
     * Initializes all ObjectStorage properties when model is reconstructed from DB (where __construct is not called)
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    public function initializeObject()
    {
        $this->produit = $this->produit ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Produit
     *
     * @param \Oussema\Testkeys\Domain\Model\Produit $produit
     * @return void
     */
    public function addProduit(\Oussema\Testkeys\Domain\Model\Produit $produit)
    {
        $this->produit->attach($produit);
    }

    /**
     * Removes a Produit
     *
     * @param \Oussema\Testkeys\Domain\Model\Produit $produitToRemove The Produit to be removed
     * @return void
     */
    public function removeProduit(\Oussema\Testkeys\Domain\Model\Produit $produitToRemove)
    {
        $this->produit->detach($produitToRemove);
    }

    /**
     * Returns the produit
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Oussema\Testkeys\Domain\Model\Produit> $produit
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * Sets the produit
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Oussema\Testkeys\Domain\Model\Produit> $produit
     * @return void
     */
    public function setProduit(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $produit)
    {
        $this->produit = $produit;
    }
}
