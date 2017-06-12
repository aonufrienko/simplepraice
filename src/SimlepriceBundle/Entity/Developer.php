<?php

namespace SimlepriceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Developer
 *
 * @ORM\Table(name="developer")
 * @ORM\Entity(repositoryClass="SimlepriceBundle\Repository\DeveloperRepository")
 */
class Developer
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
     * @ORM\Column(name="developer_name_provider", type="string", length=255)
     */
    private $developerNameProvider;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="provider", inversedBy="developer")
     * @ORM\JoinColumn(name="provider_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $provider;

    /**
     * @var string
     *
     * @ORM\Column(name="developer_name_company", type="string", length=255)
     */
    private $developerNameCompany;

    /**
     * @ORM\OneToMany(targetEntity="ProductСompany", mappedBy="developer")
     */
    protected $productСompanys;

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
        $this->productСompanys = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set developerNameProvider
     *
     * @param string $developerNameProvider
     *
     * @return Developer
     */
    public function setDeveloperNameProvider($developerNameProvider)
    {
        $this->developerNameProvider = $developerNameProvider;

        return $this;
    }

    /**
     * Get developerNameProvider
     *
     * @return string
     */
    public function getDeveloperNameProvider()
    {
        return $this->developerNameProvider;
    }

    /**
     * Set developerNameCompany
     *
     * @param string $developerNameCompany
     *
     * @return Developer
     */
    public function setDeveloperNameCompany($developerNameCompany)
    {
        $this->developerNameCompany = $developerNameCompany;

        return $this;
    }

    /**
     * Get developerNameCompany
     *
     * @return string
     */
    public function getDeveloperNameCompany()
    {
        return $this->developerNameCompany;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Developer
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
     * @return Developer
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
     * @param \SimlepriceBundle\Entity\provider $provider
     *
     * @return Developer
     */
    public function setProvider(\SimlepriceBundle\Entity\provider $provider = null)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * Get provider
     *
     * @return \SimlepriceBundle\Entity\provider
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Add productСompany
     *
     * @param \SimlepriceBundle\Entity\ProductСompany $productСompany
     *
     * @return Developer
     */
    public function addProductСompany(\SimlepriceBundle\Entity\ProductСompany $productСompany)
    {
        $this->productСompanys[] = $productСompany;

        return $this;
    }

    /**
     * Remove productСompany
     *
     * @param \SimlepriceBundle\Entity\ProductСompany $productСompany
     */
    public function removeProductСompany(\SimlepriceBundle\Entity\ProductСompany $productСompany)
    {
        $this->productСompanys->removeElement($productСompany);
    }

    /**
     * Get productСompanys
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProductСompanys()
    {
        return $this->productСompanys;
    }
}
