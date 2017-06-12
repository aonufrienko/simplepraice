<?php

namespace SimlepriceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product_company
 *
 * @ORM\Table(name="product_company")
 * @ORM\Entity(repositoryClass="SimlepriceBundle\Repository\Product_companyRepository")
 */
class Product_company
{
    /**
     * @ORM\OneToMany(targetEntity="Matching_product", mappedBy="productId")
     */
    protected $matchingProduct;

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
     * @ORM\Column(name="product_name_company", type="string", length=255)
     */
    private $productNameCompany;

    
    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="productCompany")
     * @ORM\JoinColumn(name="product_category_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $productCategoryId;

    
    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="Developer", inversedBy="products")
     * @ORM\JoinColumn(name="developer_id", referencedColumnName="id", onDelete="CASCADE")
     */

    private $developerId;

    /**
     * @var string
     *
     * @ORM\Column(name="product_code_company", type="string", length=255)
     */
    private $productCodeCompany;

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
     * Set productNameCompany
     *
     * @param string $productNameCompany
     *
     * @return Product_company
     */
    public function setProductNameCompany($productNameCompany)
    {
        $this->productNameCompany = $productNameCompany;

        return $this;
    }

    /**
     * Get productNameCompany
     *
     * @return string
     */
    public function getProductNameCompany()
    {
        return $this->productNameCompany;
    }

    /**
     * Set productCategoryId
     *
     * @param integer $productCategoryId
     *
     * @return Product_company
     */
    public function setProductCategoryId($productCategoryId)
    {
        $this->productCategoryId = $productCategoryId;

        return $this;
    }

    /**
     * Get productCategoryId
     *
     * @return int
     */
    public function getProductCategoryId()
    {
        return $this->productCategoryId;
    }

    /**
     * Set developerId
     *
     * @param integer $developerId
     *
     * @return Product_company
     */
    public function setDeveloperId($developerId)
    {
        $this->developerId = $developerId;

        return $this;
    }

    /**
     * Get developerId
     *
     * @return int
     */
    public function getDeveloperId()
    {
        return $this->developerId;
    }

    /**
     * Set productCodeCompany
     *
     * @param string $productCodeCompany
     *
     * @return Product_company
     */
    public function setProductCodeCompany($productCodeCompany)
    {
        $this->productCodeCompany = $productCodeCompany;

        return $this;
    }

    /**
     * Get productCodeCompany
     *
     * @return string
     */
    public function getProductCodeCompany()
    {
        return $this->productCodeCompany;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Product_company
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
     * @return Product_company
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

