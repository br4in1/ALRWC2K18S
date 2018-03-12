<?php

namespace NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articles
 *
 * @ORM\Table(name="articles", indexes={@ORM\Index(name="auteur", columns={"auteur"}), @ORM\Index(name="idEntity", columns={"idEntity"})})
 * @ORM\Entity
 */
class Articles
{
    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text", length=65535, nullable=false)
     */
    private $contenu;

    /**
     * @var integer
     *
     * @ORM\Column(name="idEntity", type="integer", nullable=false)
     */
    private $identity;

    /**
     * @var string
     *
     * @ORM\Column(name="typeEntity", type="string", length=255, nullable=false)
     */
    private $typeentity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePublication", type="date", nullable=false)
     */
    private $datepublication;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="derniereModification", type="date", nullable=true)
     */
    private $dernieremodification;

    /**
     * @var string
     *
     * @ORM\Column(name="articleImage", type="string", length=255, nullable=true)
     */
    private $articleimage;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \NewsBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="NewsBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="auteur", referencedColumnName="id")
     * })
     */
    private $auteur;



    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Articles
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Articles
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
     * Set identity
     *
     * @param integer $identity
     *
     * @return Articles
     */
    public function setIdentity($identity)
    {
        $this->identity = $identity;

        return $this;
    }

    /**
     * Get identity
     *
     * @return integer
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Set typeentity
     *
     * @param string $typeentity
     *
     * @return Articles
     */
    public function setTypeentity($typeentity)
    {
        $this->typeentity = $typeentity;

        return $this;
    }

    /**
     * Get typeentity
     *
     * @return string
     */
    public function getTypeentity()
    {
        return $this->typeentity;
    }

    /**
     * Set datepublication
     *
     * @param \DateTime $datepublication
     *
     * @return Articles
     */
    public function setDatepublication($datepublication)
    {
        $this->datepublication = $datepublication;

        return $this;
    }

    /**
     * Get datepublication
     *
     * @return \DateTime
     */
    public function getDatepublication()
    {
        return $this->datepublication;
    }

    /**
     * Set dernieremodification
     *
     * @param \DateTime $dernieremodification
     *
     * @return Articles
     */
    public function setDernieremodification($dernieremodification)
    {
        $this->dernieremodification = $dernieremodification;

        return $this;
    }

    /**
     * Get dernieremodification
     *
     * @return \DateTime
     */
    public function getDernieremodification()
    {
        return $this->dernieremodification;
    }

    /**
     * Set articleimage
     *
     * @param string $articleimage
     *
     * @return Articles
     */
    public function setArticleimage($articleimage)
    {
        $this->articleimage = $articleimage;

        return $this;
    }

    /**
     * Get articleimage
     *
     * @return string
     */
    public function getArticleimage()
    {
        return $this->articleimage;
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
     * Set auteur
     *
     * @param \NewsBundle\Entity\User $auteur
     *
     * @return Articles
     */
    public function setAuteur(\NewsBundle\Entity\User $auteur = null)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return \NewsBundle\Entity\User
     */
    public function getAuteur()
    {
        return $this->auteur;
    }
}
