<?php

// src/AppBundle/Entity/People.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="people")
 */
class People
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id     
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $personidid;
    
    
    /**
     * @ORM\Column(type="integer")     
     */
    private $personid;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $personname;  
    
    

    /**
     * Set personid
     *
     * @param integer $personid
     *
     * @return People
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
     * Set personname
     *
     * @param string $personname
     *
     * @return People
     */
    public function setPersonname($personname)
    {
        $this->personname = $personname;

        return $this;
    }

    /**
     * Get personname
     *
     * @return string
     */
    public function getPersonname()
    {
        return $this->personname;
    }

    /**
     * Get personidId
     *
     * @return integer
     */
    public function getPersonidId()
    {
        return $this->personidid;
    }
    
    
}
