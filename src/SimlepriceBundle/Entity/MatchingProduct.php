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
     * Set providerCode
     *
     * @param string $providerCode
     *
     * @return MatchingProduct
     */
    public function setProviderCode($providerCode)
    {
        $this->providerCode = $providerCode;

        return $this;
    }

    /**
     * Get providerCode
     *
     * @return string
     */
    public function getProviderCode()
    {
        return $this->providerCode;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return MatchingProduct
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
     * @return MatchingProduct
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
     * Set provider
     *
     * @param \SimlepriceBundle\Entity\Provider $provider
     *
     * @return MatchingProduct
     */
    public function setProvider(\SimlepriceBundle\Entity\Provider $provider = null)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * Get provider
     *
     * @return \SimlepriceBundle\Entity\Provider
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Set product
     *
     * @param \SimlepriceBundle\Entity\ProductСompany $product
     *
     * @return MatchingProduct
     */
    public function setProduct(\SimlepriceBundle\Entity\ProductСompany $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \SimlepriceBundle\Entity\ProductСompany
     */
    public function getProduct()
    {
        return $this->product;
    }
}
