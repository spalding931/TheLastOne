<?php
// src/AppBundle/Entity/Message.php

namespace AppBundle\Entity;

use AppBundle\Entity\User;
use AppBundle\Entity\Post;
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
    protected $content;

    /** @ORM\Column(type="datetime") */
    protected $timestamp;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="messagesenvoyes")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $emetteur;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="messagesrecus")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $destinataire;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

}