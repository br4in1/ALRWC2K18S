<?php

namespace GuideBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity
 */
class Event
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=20, nullable=false)
     */
    private $nom;

    /**
     * @var float
     *
     * @ORM\Column(name="geolat", type="float", precision=10, scale=0, nullable=false)
     */
    private $geolat;

    /**
     * @var float
     *
     * @ORM\Column(name="geolong", type="float", precision=10, scale=0, nullable=false)
     */
    private $geolong;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDebut", type="datetime", nullable=true)
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateFin", type="datetime", nullable=true)
     */
    private $datefin;

    /**
     * @var string
     *
     * @ORM\Column(name="Link", type="text", length=65535, nullable=true)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="text", length=65535, nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="text", length=65535, nullable=true)
     */
    private $city;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Event
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set geolat
     *
     * @param float $geolat
     *
     * @return Event
     */
    public function setGeolat($geolat)
    {
        $this->geolat = $geolat;

        return $this;
    }

    /**
     * Get geolat
     *
     * @return float
     */
    public function getGeolat()
    {
        return $this->geolat;
    }

    /**
     * Set geolong
     *
     * @param float $geolong
     *
     * @return Event
     */
    public function setGeolong($geolong)
    {
        $this->geolong = $geolong;

        return $this;
    }

    /**
     * Get geolong
     *
     * @return float
     */
    public function getGeolong()
    {
        return $this->geolong;
    }

    /**
     * Set datedebut
     *
     * @param \DateTime $datedebut
     *
     * @return Event
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    /**
     * Get datedebut
     *
     * @return \DateTime
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     *
     * @return Event
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return Event
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Event
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Event
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
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
