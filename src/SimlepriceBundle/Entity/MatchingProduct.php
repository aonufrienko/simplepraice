<?php

namespace SimlepriceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MatchingProduct
 *
 * @ORM\Table(name="matching_product")
 * @ORM\Entity(repositoryClass="SimlepriceBundle\Repository\MatchingProductRepository")
 */
class MatchingProduct
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
     * @var int
     * @ORM\ManyToOne(targetEntity="Provider", inversedBy="matchingProduct")
     * @ORM\JoinColumn(name="provider", referencedColumnName="id", onDelete="CASCADE")
     */
    private $provider;

    /**
     * @var string
     *
     * @ORM\Column(name="provider_code", type="string", length=255)
     */
    private $providerCode;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="ProductСompany", inversedBy="matchingProduct")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $product;

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

