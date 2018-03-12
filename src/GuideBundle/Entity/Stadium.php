<?php

namespace GuideBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stadium
 *
 * @ORM\Table(name="stadium")
 * @ORM\Entity
 */
class Stadium
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=80, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=80, nullable=false)
     */
    private $city;

    /**
     * @var integer
     *
     * @ORM\Column(name="capacity", type="bigint", nullable=false)
     */
    private $capacity;

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
     * @var string
     *
     * @ORM\Column(name="image", type="text", length=65535, nullable=false)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Stadium
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Stadium
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
     * Set capacity
     *
     * @param integer $capacity
     *
     * @return Stadium
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return integer
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set geolat
     *
     * @param float $geolat
     *
     * @return Stadium
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
     * @return Stadium
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
     * Set image
     *
     * @param string $image
     *
     * @return Stadium
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
