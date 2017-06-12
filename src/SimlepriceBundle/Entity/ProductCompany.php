<?php

namespace SimlepriceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductCompany
 *
 * @ORM\Table(name="product_company")
 * @ORM\Entity(repositoryClass="SimlepriceBundle\Repository\ProductCompanyRepository")
 */
class ProductCompany
{
    /**
     * @ORM\OneToMany(targetEntity="Matching_product", mappedBy="product")
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
    private $productCategory;

    
    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="Developer", inversedBy="products")
     * @ORM\JoinColumn(name="developer", referencedColumnName="id", onDelete="CASCADE")
     */

    private $developer;

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
     * Constructor
     */
    public function __construct()
    {
        $this->matchingProduct = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
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
     * @return ProductCompany
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
     * Set productCodeCompany
     *
     * @param string $productCodeCompany
     *
     * @return ProductCompany
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
     * @return ProductCompany
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
     * @return ProductCompany
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

    /**
     * Add matchingProduct
     *
     * @param \SimlepriceBundle\Entity\Matching_product $matchingProduct
     *
     * @return ProductCompany
     */
    public function addMatchingProduct(\SimlepriceBundle\Entity\Matching_product $matchingProduct)
    {
        $this->matchingProduct[] = $matchingProduct;

        return $this;
    }

    /**
     * Remove matchingProduct
     *
     * @param \SimlepriceBundle\Entity\Matching_product $matchingProduct
     */
    public function removeMatchingProduct(\SimlepriceBundle\Entity\Matching_product $matchingProduct)
    {
        $this->matchingProduct->removeElement($matchingProduct);
    }

    /**
     * Get matchingProduct
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMatchingProduct()
    {
        return $this->matchingProduct;
    }

    /**
     * Set productCategory
     *
     * @param \SimlepriceBundle\Entity\Category $productCategory
     *
     * @return ProductCompany
     */
    public function setProductCategory(\SimlepriceBundle\Entity\Category $productCategory = null)
    {
        $this->productCategory = $productCategory;

        return $this;
    }

    /**
     * Get productCategory
     *
     * @return \SimlepriceBundle\Entity\Category
     */
    public function getProductCategory()
    {
        return $this->productCategory;
    }

    /**
     * Set developer
     *
     * @param \SimlepriceBundle\Entity\Developer $developer
     *
     * @return ProductCompany
     */
    public function setDeveloper(\SimlepriceBundle\Entity\Developer $developer = null)
    {
        $this->developer = $developer;

        return $this;
    }

    /**
     * Get developer
     *
     * @return \SimlepriceBundle\Entity\Developer
     */
    public function getDeveloper()
    {
        return $this->developer;
    }
}
