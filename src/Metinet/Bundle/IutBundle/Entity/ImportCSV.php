<?php

namespace Metinet\Bundle\IutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImportCSV
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Metinet\Bundle\IutBundle\Repository\ImportCSVRepository")
 */
class ImportCSV
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var integer
     *
     * @ORM\Column(name="promoYear", type="integer")
     */
    private $promoYear;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="importedAt", type="datetime")
     */
    private $importedAt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="state", type="boolean")
     */
    private $state;

     /**
     * @ORM\OneToOne(targetEntity="User", mappedBy="importCSV")
     */
    private $user;
    
    /**
    * @ORM\OneToMany(targetEntity="Invite", mappedBy="importCSV")
    */
    protected $invites;
    

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
     * Set firstname
     *
     * @param string $firstname
     * @return ImportCSV
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    
        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return ImportCSV
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    
        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set promoYear
     *
     * @param integer $promoYear
     * @return ImportCSV
     */
    public function setPromoYear($promoYear)
    {
        $this->promoYear = $promoYear;
    
        return $this;
    }

    /**
     * Get promoYear
     *
     * @return integer 
     */
    public function getPromoYear()
    {
        return $this->promoYear;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return ImportCSV
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set importedAt
     *
     * @param \DateTime $importedAt
     * @return ImportCSV
     */
    public function setImportedAt($importedAt)
    {
        $this->importedAt = $importedAt;
    
        return $this;
    }

    /**
     * Get importedAt
     *
     * @return \DateTime 
     */
    public function getImportedAt()
    {
        return $this->importedAt;
    }

    /**
     * Set state
     *
     * @param boolean $state
     * @return ImportCSV
     */
    public function setState($state)
    {
        $this->state = $state;
    
        return $this;
    }

    /**
     * Get state
     *
     * @return boolean 
     */
    public function getState()
    {
        return $this->state;
    }
}
