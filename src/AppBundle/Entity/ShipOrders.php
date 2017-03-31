<?php

// src/AppBundle/Entity/ShipOrders.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="shiporders")
 */
class ShipOrders
{
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id     
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $orderidid;
    
    
    /**
     * @ORM\Column(type="integer")
     
     */
    private $orderid;

    /**
     * @ORM\Column(type="integer")
     */
    private $orderperson; 
    
    /**
     * @ORM\Column(type="string",length=1000)
     */
    private $shipto_name;
    
    /**
     * @ORM\Column(type="string",length=1000)
     */
    private $shipto_address;
    
    /**
     * @ORM\Column(type="string",length=1000)
     */
    private $shipto_city;
    
    /**
     * @ORM\Column(type="string",length=1000)
     */
    private $shipto_country;

    /**
     * Set orderid
     *
     * @param integer $orderid
     *
     * @return ShipOrders
     */
    public function setOrderid($orderid)
    {
        $this->orderid = $orderid;

        return $this;
    }

    /**
     * Get orderid
     *
     * @return integer
     */
    public function getOrderid()
    {
        return $this->orderid;
    }

    /**
     * Set orderperson
     *
     * @param integer $orderperson
     *
     * @return ShipOrders
     */
    public function setOrderperson($orderperson)
    {
        $this->orderperson = $orderperson;

        return $this;
    }

    /**
     * Get orderperson
     *
     * @return integer
     */
    public function getOrderperson()
    {
        return $this->orderperson;
    }

    /**
     * Set shiptoName
     *
     * @param string $shiptoName
     *
     * @return ShipOrders
     */
    public function setShiptoName($shiptoName)
    {
        $this->shipto_name = $shiptoName;

        return $this;
    }

    /**
     * Get shiptoName
     *
     * @return string
     */
    public function getShiptoName()
    {
        return $this->shipto_name;
    }

    /**
     * Set shiptoAddress
     *
     * @param string $shiptoAddress
     *
     * @return ShipOrders
     */
    public function setShiptoAddress($shiptoAddress)
    {
        $this->shipto_address = $shiptoAddress;

        return $this;
    }

    /**
     * Get shiptoAddress
     *
     * @return string
     */
    public function getShiptoAddress()
    {
        return $this->shipto_address;
    }

    /**
     * Set shiptoCity
     *
     * @param string $shiptoCity
     *
     * @return ShipOrders
     */
    public function setShiptoCity($shiptoCity)
    {
        $this->shipto_city = $shiptoCity;

        return $this;
    }

    /**
     * Get shiptoCity
     *
     * @return string
     */
    public function getShiptoCity()
    {
        return $this->shipto_city;
    }

    /**
     * Set shiptoCountry
     *
     * @param string $shiptoCountry
     *
     * @return ShipOrders
     */
    public function setShiptoCountry($shiptoCountry)
    {
        $this->shipto_country = $shiptoCountry;

        return $this;
    }

    /**
     * Get shiptoCountry
     *
     * @return string
     */
    public function getShiptoCountry()
    {
        return $this->shipto_country;
    }

    /**
     * Get orderidId
     *
     * @return integer
     */
    public function getOrderidId()
    {
        return $this->orderidid;
    }
}
