<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\User;

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
    /**
     * @return mixed
     */
    public function getIdMessage()
    {
        return $this->id_message;
    }
    /**
     * @param mixed $id_message
     */
    public function setIdMessage($id_message)
    {
        $this->id_message = $id_message;
    }
    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }
    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }
    /**
     * @return mixed
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
    /**
     * @param mixed $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }
    /**
     * @return mixed
     */
    public function getEmetteur()
    {
        return $this->emetteur;
    }
    /**
     * @param mixed $emetteur
     */
    public function setEmetteur($emetteur)
    {
        $this->emetteur = $emetteur;
    }
    /**
     * @return mixed
     */
    public function getDestinataire()
    {
        return $this->destinataire;
    }
    /**
     * @param mixed $destinataire
     */
    public function setDestinataire($destinataire)
    {
        $this->destinataire = $destinataire;
    }
}