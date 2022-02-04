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
 * Produit
 */
class Produit extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * id
     *
     * @var int
     */
    protected $id = 0;

    /**
     * name
     *
     * @var string
     */
    protected $name = '';

    /**
     * prix
     *
     * @var float
     */
    protected $prix = 0.0;

    /**
     * stock
     *
     * @var int
     */
    protected $stock = 0;

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * slug
     *
     * @var string
     */
    protected $slug = '';

    /**
     * addDate
     *
     * @var \DateTime
     */
    protected $addDate = null;

    /**
     * updateDate
     *
     * @var \DateTime
     */
    protected $updateDate = null;

    /**
     * delateDate
     *
     * @var \DateTime
     */
    protected $delateDate = null;

    /**
     * category
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Oussema\Testkeys\Domain\Model\Category>
     */
    protected $category = null;

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
        $this->category = $this->category ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the id
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the id
     *
     * @param int $id
     * @return void
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

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
     * Returns the prix
     *
     * @return float $prix
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Sets the prix
     *
     * @param float $prix
     * @return void
     */
    public function setPrix(float $prix)
    {
        $this->prix = $prix;
    }

    /**
     * Returns the stock
     *
     * @return int $stock
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Sets the stock
     *
     * @param int $stock
     * @return void
     */
    public function setStock(int $stock)
    {
        $this->stock = $stock;
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
     * Returns the slug
     *
     * @return string $slug
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Sets the slug
     *
     * @param string $slug
     * @return void
     */
    public function setSlug(string $slug)
    {
        $this->slug = $slug;
    }

    /**
     * Returns the addDate
     *
     * @return \DateTime $addDate
     */
    public function getAddDate()
    {
        return $this->addDate;
    }

    /**
     * Sets the addDate
     *
     * @param \DateTime $addDate
     * @return void
     */
    public function setAddDate(\DateTime $addDate)
    {
        $this->addDate = $addDate;
    }

    /**
     * Returns the updateDate
     *
     * @return \DateTime $updateDate
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Sets the updateDate
     *
     * @param \DateTime $updateDate
     * @return void
     */
    public function setUpdateDate(\DateTime $updateDate)
    {
        $this->updateDate = $updateDate;
    }

    /**
     * Returns the delateDate
     *
     * @return \DateTime $delateDate
     */
    public function getDelateDate()
    {
        return $this->delateDate;
    }

    /**
     * Sets the delateDate
     *
     * @param \DateTime $delateDate
     * @return void
     */
    public function setDelateDate(\DateTime $delateDate)
    {
        $this->delateDate = $delateDate;
    }

    /**
     * Adds a Category
     *
     * @param \Oussema\Testkeys\Domain\Model\Category $category
     * @return void
     */
    public function addCategory(\Oussema\Testkeys\Domain\Model\Category $category)
    {
        $this->category->attach($category);
    }

    /**
     * Removes a Category
     *
     * @param \Oussema\Testkeys\Domain\Model\Category $categoryToRemove The Category to be removed
     * @return void
     */
    public function removeCategory(\Oussema\Testkeys\Domain\Model\Category $categoryToRemove)
    {
        $this->category->detach($categoryToRemove);
    }

    /**
     * Returns the category
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Oussema\Testkeys\Domain\Model\Category> $category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets the category
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Oussema\Testkeys\Domain\Model\Category> $category
     * @return void
     */
    public function setCategory(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $category)
    {
        $this->category = $category;
    }
}
