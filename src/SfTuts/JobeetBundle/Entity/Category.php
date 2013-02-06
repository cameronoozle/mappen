<?php
// src/SfTuts/JobeetBundle/Entity/Category.php

namespace SfTuts\JobeetBundle\Entity;
use Doctrine\ORM\Mapping AS orm;

/**
 * @orm\Entity
 */
class Category
{
    /**
     * @orm\Id
     * @orm\Column(type="integer")
     * @orm\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @orm\Column(type="string", length=255, unique=true)
     */
    protected $name;

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
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
}