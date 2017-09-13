<?php
// src/AppBundle/Entity/Message.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Message")
 */
class Message
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id_message;

    /** @ORM\Column(type="string") */
    private $content;

    /** @ORM\Column(type="datetime") */
    private $timestamp;

    /**
     * @ORM\Column(type="integer")
     * @Id @OneToOne(targetEntity="User")
     */
    private $id_fromuser;
    
    /**
     * @ORM\Column(type="integer")
     * @Id @OneToOne(targetEntity="User")
     */
    private $id_touser;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

}