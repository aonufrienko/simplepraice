<?php

namespace SimlepriceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="SimlepriceBundle\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @ORM\OneToMany(targetEntity="Product_company", mappedBy="productCategoryId")
     */
    protected $productCompany;


    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="category_vendor_name", type="string", length=255)
     */
    private $categoryVendorName;

    /**
     * @var string
     *
     * @ORM\Column(name="category_company_name", type="string", length=255)
     */
    private $categoryCompanyName;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="Vendor", inversedBy="category")
     * @ORM\JoinColumn(name="vendor_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $vendorId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified_at", type="datetime")
     */
    private $modifiedAt;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set categoryVendorName
     *
     * @param string $categoryVendorName
     *
     * @return Category
     */
    public function setCategoryVendorName($categoryVendorName)
    {
        $this->categoryVendorName = $categoryVendorName;

        return $this;
    }

    /**
     * Get categoryVendorName
     *
     * @return string
     */
    public function getCategoryVendorName()
    {
        return $this->categoryVendorName;
    }

    /**
     * Set categoryCompanyName
     *
     * @param string $categoryCompanyName
     *
     * @return Category
     */
    public function setCategoryCompanyName($categoryCompanyName)
    {
        $this->categoryCompanyName = $categoryCompanyName;

        return $this;
    }

    /**
     * Get categoryCompanyName
     *
     * @return string
     */
    public function getCategoryCompanyName()
    {
        return $this->categoryCompanyName;
    }

    /**
     * Set vendorId
     *
     * @param integer $vendorId
     *
     * @return Category
     */
    public function setVendorId($vendorId)
    {
        $this->vendorId = $vendorId;

        return $this;
    }

    /**
     * Get vendorId
     *
     * @return int
     */
    public function getVendorId()
    {
        return $this->vendorId;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Category
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set modifiedAt
     *
     * @param \DateTime $modifiedAt
     *
     * @return Category
     */
    public function setModifiedAt($modifiedAt)
    {
        $this->modifiedAt = $modifiedAt;

        return $this;
    }

    /**
     * Get modifiedAt
     *
     * @return \DateTime
     */
    public function getModifiedAt()
    {
        return $this->modifiedAt;
    }
}

