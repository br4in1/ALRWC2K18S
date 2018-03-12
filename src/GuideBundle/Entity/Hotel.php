<?php

namespace GuideBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hotel
 *
 * @ORM\Table(name="hotel")
 * @ORM\Entity
 */
class Hotel
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
     * @var integer
     *
     * @ORM\Column(name="nbEtoiles", type="integer", nullable=false)
     */
    private $nbetoiles;

    /**
     * @var string
     *
     * @ORM\Column(name="tripAdvisorLink", type="text", length=65535, nullable=true)
     */
    private $tripadvisorlink;

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
     * @return Hotel
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
     * @return Hotel
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
     * @return Hotel
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
     * Set nbetoiles
     *
     * @param integer $nbetoiles
     *
     * @return Hotel
     */
    public function setNbetoiles($nbetoiles)
    {
        $this->nbetoiles = $nbetoiles;

        return $this;
    }

    /**
     * Get nbetoiles
     *
     * @return integer
     */
    public function getNbetoiles()
    {
        return $this->nbetoiles;
    }

    /**
     * Set tripadvisorlink
     *
     * @param string $tripadvisorlink
     *
     * @return Hotel
     */
    public function setTripadvisorlink($tripadvisorlink)
    {
        $this->tripadvisorlink = $tripadvisorlink;

        return $this;
    }

    /**
     * Get tripadvisorlink
     *
     * @return string
     */
    public function getTripadvisorlink()
    {
        return $this->tripadvisorlink;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Hotel
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
     * @return Hotel
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
