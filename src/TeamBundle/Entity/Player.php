<?php

namespace TeamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Player
 *
 * @ORM\Table(name="Player", indexes={@ORM\Index(name="player_ibfk_1", columns={"Nation"})})
 * @ORM\Entity
 */
class Player
{
    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="LastName", type="string", length=50, nullable=false)
     */
    private $lastname;

    /**
     * @var integer
     *
     * @ORM\Column(name="Age", type="integer", nullable=false)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="Club", type="string", length=50, nullable=false)
     */
    private $club;

    /**
     * @var float
     *
     * @ORM\Column(name="Height", type="float", precision=10, scale=0, nullable=false)
     */
    private $height;

    /**
     * @var float
     *
     * @ORM\Column(name="Weight", type="float", precision=10, scale=0, nullable=false)
     */
    private $weight;

    /**
     * @var string
     *
     * @ORM\Column(name="Position", type="string", length=20, nullable=false)
     */
    private $position;

    /**
     * @var integer
     *
     * @ORM\Column(name="Goals", type="integer", nullable=false)
     */
    private $goals;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="ProfilePhoto", type="text", length=65535, nullable=false)
     */
    private $profilephoto;

    /**
     * @var string
     *
     * @ORM\Column(name="BlanketPhoto", type="text", length=65535, nullable=false)
     */
    private $blanketphoto;

    /**
     * @var string
     *
     * @ORM\Column(name="DescriptionPhoto", type="text", length=65535, nullable=false)
     */
    private $descriptionphoto;

    /**
     * @var string
     *
     * @ORM\Column(name="FbLink", type="text", length=65535, nullable=false)
     */
    private $fblink;

    /**
     * @var string
     *
     * @ORM\Column(name="TwitterLink", type="text", length=65535, nullable=false)
     */
    private $twitterlink;

    /**
     * @var integer
     *
     * @ORM\Column(name="ShirtNb", type="integer", nullable=false)
     */
    private $shirtnb;

    /**
     * @var string
     *
     * @ORM\Column(name="Video", type="text", length=65535, nullable=false)
     */
    private $video;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \TeamBundle\Entity\Team
     *
     * @ORM\ManyToOne(targetEntity="TeamBundle\Entity\Team")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Nation", referencedColumnName="name")
     * })
     */
    private $nation;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Player
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
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Player
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return Player
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set club
     *
     * @param string $club
     *
     * @return Player
     */
    public function setClub($club)
    {
        $this->club = $club;

        return $this;
    }

    /**
     * Get club
     *
     * @return string
     */
    public function getClub()
    {
        return $this->club;
    }

    /**
     * Set height
     *
     * @param float $height
     *
     * @return Player
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set weight
     *
     * @param float $weight
     *
     * @return Player
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return Player
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set goals
     *
     * @param integer $goals
     *
     * @return Player
     */
    public function setGoals($goals)
    {
        $this->goals = $goals;

        return $this;
    }

    /**
     * Get goals
     *
     * @return integer
     */
    public function getGoals()
    {
        return $this->goals;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Player
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set profilephoto
     *
     * @param string $profilephoto
     *
     * @return Player
     */
    public function setProfilephoto($profilephoto)
    {
        $this->profilephoto = $profilephoto;

        return $this;
    }

    /**
     * Get profilephoto
     *
     * @return string
     */
    public function getProfilephoto()
    {
        return $this->profilephoto;
    }

    /**
     * Set blanketphoto
     *
     * @param string $blanketphoto
     *
     * @return Player
     */
    public function setBlanketphoto($blanketphoto)
    {
        $this->blanketphoto = $blanketphoto;

        return $this;
    }

    /**
     * Get blanketphoto
     *
     * @return string
     */
    public function getBlanketphoto()
    {
        return $this->blanketphoto;
    }

    /**
     * Set descriptionphoto
     *
     * @param string $descriptionphoto
     *
     * @return Player
     */
    public function setDescriptionphoto($descriptionphoto)
    {
        $this->descriptionphoto = $descriptionphoto;

        return $this;
    }

    /**
     * Get descriptionphoto
     *
     * @return string
     */
    public function getDescriptionphoto()
    {
        return $this->descriptionphoto;
    }

    /**
     * Set fblink
     *
     * @param string $fblink
     *
     * @return Player
     */
    public function setFblink($fblink)
    {
        $this->fblink = $fblink;

        return $this;
    }

    /**
     * Get fblink
     *
     * @return string
     */
    public function getFblink()
    {
        return $this->fblink;
    }

    /**
     * Set twitterlink
     *
     * @param string $twitterlink
     *
     * @return Player
     */
    public function setTwitterlink($twitterlink)
    {
        $this->twitterlink = $twitterlink;

        return $this;
    }

    /**
     * Get twitterlink
     *
     * @return string
     */
    public function getTwitterlink()
    {
        return $this->twitterlink;
    }

    /**
     * Set shirtnb
     *
     * @param integer $shirtnb
     *
     * @return Player
     */
    public function setShirtnb($shirtnb)
    {
        $this->shirtnb = $shirtnb;

        return $this;
    }

    /**
     * Get shirtnb
     *
     * @return integer
     */
    public function getShirtnb()
    {
        return $this->shirtnb;
    }

    /**
     * Set video
     *
     * @param string $video
     *
     * @return Player
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return string
     */
    public function getVideo()
    {
        return $this->video;
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
     * Set nation
     *
     * @param \TeamBundle\Entity\Team $nation
     *
     * @return Player
     */
    public function setNation(\TeamBundle\Entity\Team $nation = null)
    {
        $this->nation = $nation;

        return $this;
    }

    /**
     * Get nation
     *
     * @return \TeamBundle\Entity\Team
     */
    public function getNation()
    {
        return $this->nation;
    }
}
