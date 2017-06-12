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

}

