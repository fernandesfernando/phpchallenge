<?php

// src/AppBundle/Entity/items.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="items")
 */
class Items
{
    /**
     * @ORM\Column(type="integer")  
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")      
     */
    private $itemid;
    
    /**
     * @ORM\Column(type="integer")         
     */
    private $orderid;

    /**
     * @ORM\Column(type="string",length=1000)
     */
    private $title; 
    
    /**
     * @ORM\Column(type="string",length=1000)
     */
    private $note;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $quantity;
    
    /**
     * @ORM\Column(type="decimal",scale=2)
     */
    private $price;    
    

    /**
     * Get itemid
     *
     * @return integer
     */
    public function getItemid()
    {
        return $this->itemid;
    }

    /**
     * Set orderid
     *
     * @param integer $orderid
     *
     * @return Items
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
     * Set title
     *
     * @param string $title
     *
     * @return Items
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return Items
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Items
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Items
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }
}
