<?php

namespace SimlepriceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Provider
 *
 * @ORM\Table(name="provider")
 * @ORM\Entity(repositoryClass="SimlepriceBundle\Repository\ProviderRepository")
 */
class Provider
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
     * @ORM\Column(name="provider_name", type="string", length=255)
     */
    private $providerName;

	/**
     * @ORM\OneToMany(targetEntity="Developer", mappedBy="provider")
     */
    protected $developers;


    /**
     * @ORM\OneToMany(targetEntity="MatchingProduct", mappedBy="provider")
     */
    protected $matchingProducts;


    /**
     * @ORM\OneToMany(targetEntity="Category", mappedBy="provider")
     */
    protected $categorys;

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

