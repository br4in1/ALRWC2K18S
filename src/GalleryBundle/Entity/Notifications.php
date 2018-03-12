<?php

namespace GalleryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notifications
 *
 * @ORM\Table(name="notifications", indexes={@ORM\Index(name="idUser", columns={"idUser"})})
 * @ORM\Entity
 */
class Notifications
{
    /**
     * @var string
     *
     * @ORM\Column(name="Text", type="text", length=65535, nullable=false)
     */
    private $text;

    /**
     * @var boolean
     *
     * @ORM\Column(name="state", type="boolean", nullable=false)
     */
    private $state = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \GalleryBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="GalleryBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="id")
     * })
     */
    private $iduser;



    /**
     * Set text
     *
     * @param string $text
     *
     * @return Notifications
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set state
     *
     * @param boolean $state
     *
     * @return Notifications
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return boolean
     */
    public function getState()
    {
        return $this->state;
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

    /**
     * Set iduser
     *
     * @param \GalleryBundle\Entity\User $iduser
     *
     * @return Notifications
     */
    public function setIduser(\GalleryBundle\Entity\User $iduser = null)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return \GalleryBundle\Entity\User
     */
    public function getIduser()
    {
        return $this->iduser;
    }
}
