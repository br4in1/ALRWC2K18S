<?php

namespace GalleryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Likes
 *
 * @ORM\Table(name="likes", indexes={@ORM\Index(name="idPhoto", columns={"idPhoto"}), @ORM\Index(name="idUser", columns={"idUser"})})
 * @ORM\Entity
 */
class Likes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \GalleryBundle\Entity\Gallery
     *
     * @ORM\ManyToOne(targetEntity="GalleryBundle\Entity\Gallery")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPhoto", referencedColumnName="id")
     * })
     */
    private $idphoto;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idphoto
     *
     * @param \GalleryBundle\Entity\Gallery $idphoto
     *
     * @return Likes
     */
    public function setIdphoto(\GalleryBundle\Entity\Gallery $idphoto = null)
    {
        $this->idphoto = $idphoto;

        return $this;
    }

    /**
     * Get idphoto
     *
     * @return \GalleryBundle\Entity\Gallery
     */
    public function getIdphoto()
    {
        return $this->idphoto;
    }

    /**
     * Set iduser
     *
     * @param \GalleryBundle\Entity\User $iduser
     *
     * @return Likes
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
