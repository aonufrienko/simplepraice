<?php

namespace SimlepriceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductСompany
 *
 * @ORM\Table(name="product_company")
 * @ORM\Entity(repositoryClass="SimlepriceBundle\Repository\ProductСompanyRepository")
 */
class ProductСompany
{
    
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
     * @ORM\OneToMany(targetEntity="MatchingProduct", mappedBy="product")
     */
    protected $matchingProducts;

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


}

