<?php

namespace GuideBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Divertissement
 *
 * @ORM\Table(name="divertissement")
 * @ORM\Entity
 */
class Divertissement
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
     * @ORM\Column(name="heureOuverture", type="datetime", nullable=false)
     */
    private $heureouverture = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heureFermeture", type="datetime", nullable=false)
     */
    private $heurefermeture = '0000-00-00 00:00:00';

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
     * @return Divertissement
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
     * @return Divertissement
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
     * @return Divertissement
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
     * Set heureouverture
     *
     * @param \DateTime $heureouverture
     *
     * @return Divertissement
     */
    public function setHeureouverture($heureouverture)
    {
        $this->heureouverture = $heureouverture;

        return $this;
    }

    /**
     * Get heureouverture
     *
     * @return \DateTime
     */
    public function getHeureouverture()
    {
        return $this->heureouverture;
    }

    /**
     * Set heurefermeture
     *
     * @param \DateTime $heurefermeture
     *
     * @return Divertissement
     */
    public function setHeurefermeture($heurefermeture)
    {
        $this->heurefermeture = $heurefermeture;

        return $this;
    }

    /**
     * Get heurefermeture
     *
     * @return \DateTime
     */
    public function getHeurefermeture()
    {
        return $this->heurefermeture;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return Divertissement
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
     * @return Divertissement
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
     * @return Divertissement
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
