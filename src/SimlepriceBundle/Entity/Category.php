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
     * @ORM\Column(name="category_provider_name", type="string", length=255)
     */
    private $categoryProviderName;

    /**
     * @var string
     *
     * @ORM\Column(name="category_company_name", type="string", length=255)
     */
    private $categoryCompanyName;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="provider", inversedBy="category")
     * @ORM\JoinColumn(name="provider_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $provider;

	/**
     * @ORM\OneToMany(targetEntity="ProductСompany", mappedBy="productCategory")
     */
    protected $productCompanys;

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

