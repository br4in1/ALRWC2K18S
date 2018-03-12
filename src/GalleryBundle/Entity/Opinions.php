<?php

namespace GalleryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Opinions
 *
 * @ORM\Table(name="opinions", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Opinions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idUser", type="integer", nullable=false)
     */
    private $iduser;

    /**
     * @var string
     *
     * @ORM\Column(name="avis", type="string", length=255, nullable=false)
     */
    private $avis;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbreEtoiles", type="integer", nullable=false)
     */
    private $nbreetoiles;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set iduser
     *
     * @param integer $iduser
     *
     * @return Opinions
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return integer
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set avis
     *
     * @param string $avis
     *
     * @return Opinions
     */
    public function setAvis($avis)
    {
        $this->avis = $avis;

        return $this;
    }

    /**
     * Get avis
     *
     * @return string
     */
    public function getAvis()
    {
        return $this->avis;
    }

    /**
     * Set nbreetoiles
     *
     * @param integer $nbreetoiles
     *
     * @return Opinions
     */
    public function setNbreetoiles($nbreetoiles)
    {
        $this->nbreetoiles = $nbreetoiles;

        return $this;
    }

    /**
     * Get nbreetoiles
     *
     * @return integer
     */
    public function getNbreetoiles()
    {
        return $this->nbreetoiles;
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
