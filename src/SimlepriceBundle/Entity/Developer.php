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
     * @ORM\OneToMany(targetEntity="Product_company", mappedBy="developerId")
     */
	protected $products;


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
     * @ORM\Column(name="developer_name_vendor", type="string", length=255)
     */
    private $developerNameVendor;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="Vendor", inversedBy="developer")
     * @ORM\JoinColumn(name="vendor_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $vendorId;

    /**
     * @var string
     *
     * @ORM\Column(name="developer_name_company", type="string", length=255)
     */
    private $developerNameCompany;

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
     * Set developerNameVendor
     *
     * @param string $developerNameVendor
     *
     * @return Developer
     */
    public function setDeveloperNameVendor($developerNameVendor)
    {
        $this->developerNameVendor = $developerNameVendor;

        return $this;
    }

    /**
     * Get developerNameVendor
     *
     * @return string
     */
    public function getDeveloperNameVendor()
    {
        return $this->developerNameVendor;
    }

    /**
     * Set vendorId
     *
     * @param integer $vendorId
     *
     * @return Developer
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
}

