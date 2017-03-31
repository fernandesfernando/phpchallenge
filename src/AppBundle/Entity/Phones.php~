<?php

// src/AppBundle/Entity/Phones.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="phones")
 */
class Phones
{
    /**
     * @ORM\Column(type="integer")  
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")      
     */
    private $phoneid;
    
    /**
     * @ORM\Column(type="integer")        
     */
    private $personid;
    
    /**
     * @ORM\Column(type="string", length=20)
     */
    private $phone;   

    /**
     * Get phoneid
     *
     * @return integer
     */
    public function getPhoneid()
    {
        return $this->phoneid;
    }

    /**
     * Set personid
     *
     * @param integer $personid
     *
     * @return Phones
     */
    public function setPersonid($personid)
    {
        $this->personid = $personid;

        return $this;
    }

    /**
     * Get personid
     *
     * @return integer
     */
    public function getPersonid()
    {
        return $this->personid;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Phones
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }
}
