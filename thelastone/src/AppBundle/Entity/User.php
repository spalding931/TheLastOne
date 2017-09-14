<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use AppBundle\Entity\Message;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Message", mappedBy="emetteur")
     */

    protected $messagesenvoyes;
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Message", mappedBy="destinataire")
     */
    protected $messagesrecus;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}