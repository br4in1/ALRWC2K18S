<?php

namespace NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Newsletters
 *
 * @ORM\Table(name="newsletters")
 * @ORM\Entity
 */
class Newsletters
{
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text", length=65535, nullable=false)
     */
    private $contenu;

    /**
     * @var integer
     *
     * @ORM\Column(name="preferences", type="integer", nullable=false)
     */
    private $preferences = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set email
     *
     * @param string $email
     *
     * @return Newsletters
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
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Newsletters
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set preferences
     *
     * @param integer $preferences
     *
     * @return Newsletters
     */
    public function setPreferences($preferences)
    {
        $this->preferences = $preferences;

        return $this;
    }

    /**
     * Get preferences
     *
     * @return integer
     */
    public function getPreferences()
    {
        return $this->preferences;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
