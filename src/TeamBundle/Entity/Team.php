<?php

namespace TeamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Team
 *
 * @ORM\Table(name="Team", indexes={@ORM\Index(name="name", columns={"name"})})
 * @ORM\Entity
 */
class Team
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=30, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Coach", type="string", length=30, nullable=true)
     */
    private $coach;

    /**
     * @var string
     *
     * @ORM\Column(name="President", type="string", length=30, nullable=true)
     */
    private $president;

    /**
     * @var string
     *
     * @ORM\Column(name="Area", type="string", length=30, nullable=true)
     */
    private $area;

    /**
     * @var integer
     *
     * @ORM\Column(name="GamesPlayed", type="integer", nullable=true)
     */
    private $gamesplayed;

    /**
     * @var integer
     *
     * @ORM\Column(name="GoalScored", type="integer", nullable=true)
     */
    private $goalscored;

    /**
     * @var integer
     *
     * @ORM\Column(name="GoalAgainst", type="integer", nullable=true)
     */
    private $goalagainst;

    /**
     * @var integer
     *
     * @ORM\Column(name="Participations", type="integer", nullable=true)
     */
    private $participations;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FifaDate", type="date", nullable=true)
     */
    private $fifadate;

    /**
     * @var string
     *
     * @ORM\Column(name="WcGroup", type="string", length=10, nullable=true)
     */
    private $wcgroup;

    /**
     * @var integer
     *
     * @ORM\Column(name="Win", type="integer", nullable=true)
     */
    private $win;

    /**
     * @var integer
     *
     * @ORM\Column(name="Loose", type="integer", nullable=true)
     */
    private $loose;

    /**
     * @var integer
     *
     * @ORM\Column(name="Draw", type="integer", nullable=true)
     */
    private $draw;

    /**
     * @var integer
     *
     * @ORM\Column(name="Points", type="integer", nullable=true)
     */
    private $points;

    /**
     * @var integer
     *
     * @ORM\Column(name="FifaRank", type="integer", nullable=true)
     */
    private $fifarank;

    /**
     * @var string
     *
     * @ORM\Column(name="FlagPhoto", type="text", length=65535, nullable=true)
     */
    private $flagphoto;

    /**
     * @var string
     *
     * @ORM\Column(name="LogoPhoto", type="text", length=65535, nullable=true)
     */
    private $logophoto;

    /**
     * @var string
     *
     * @ORM\Column(name="SquadPhoto", type="text", length=65535, nullable=true)
     */
    private $squadphoto;

    /**
     * @var string
     *
     * @ORM\Column(name="DescriptionPhoto", type="text", length=65535, nullable=true)
     */
    private $descriptionphoto;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="Website", type="text", length=65535, nullable=true)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="Video", type="text", length=65535, nullable=true)
     */
    private $video;

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
     * @return Team
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
     * Set coach
     *
     * @param string $coach
     *
     * @return Team
     */
    public function setCoach($coach)
    {
        $this->coach = $coach;

        return $this;
    }

    /**
     * Get coach
     *
     * @return string
     */
    public function getCoach()
    {
        return $this->coach;
    }

    /**
     * Set president
     *
     * @param string $president
     *
     * @return Team
     */
    public function setPresident($president)
    {
        $this->president = $president;

        return $this;
    }

    /**
     * Get president
     *
     * @return string
     */
    public function getPresident()
    {
        return $this->president;
    }

    /**
     * Set area
     *
     * @param string $area
     *
     * @return Team
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return string
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set gamesplayed
     *
     * @param integer $gamesplayed
     *
     * @return Team
     */
    public function setGamesplayed($gamesplayed)
    {
        $this->gamesplayed = $gamesplayed;

        return $this;
    }

    /**
     * Get gamesplayed
     *
     * @return integer
     */
    public function getGamesplayed()
    {
        return $this->gamesplayed;
    }

    /**
     * Set goalscored
     *
     * @param integer $goalscored
     *
     * @return Team
     */
    public function setGoalscored($goalscored)
    {
        $this->goalscored = $goalscored;

        return $this;
    }

    /**
     * Get goalscored
     *
     * @return integer
     */
    public function getGoalscored()
    {
        return $this->goalscored;
    }

    /**
     * Set goalagainst
     *
     * @param integer $goalagainst
     *
     * @return Team
     */
    public function setGoalagainst($goalagainst)
    {
        $this->goalagainst = $goalagainst;

        return $this;
    }

    /**
     * Get goalagainst
     *
     * @return integer
     */
    public function getGoalagainst()
    {
        return $this->goalagainst;
    }

    /**
     * Set participations
     *
     * @param integer $participations
     *
     * @return Team
     */
    public function setParticipations($participations)
    {
        $this->participations = $participations;

        return $this;
    }

    /**
     * Get participations
     *
     * @return integer
     */
    public function getParticipations()
    {
        return $this->participations;
    }

    /**
     * Set fifadate
     *
     * @param \DateTime $fifadate
     *
     * @return Team
     */
    public function setFifadate($fifadate)
    {
        $this->fifadate = $fifadate;

        return $this;
    }

    /**
     * Get fifadate
     *
     * @return \DateTime
     */
    public function getFifadate()
    {
        return $this->fifadate;
    }

    /**
     * Set wcgroup
     *
     * @param string $wcgroup
     *
     * @return Team
     */
    public function setWcgroup($wcgroup)
    {
        $this->wcgroup = $wcgroup;

        return $this;
    }

    /**
     * Get wcgroup
     *
     * @return string
     */
    public function getWcgroup()
    {
        return $this->wcgroup;
    }

    /**
     * Set win
     *
     * @param integer $win
     *
     * @return Team
     */
    public function setWin($win)
    {
        $this->win = $win;

        return $this;
    }

    /**
     * Get win
     *
     * @return integer
     */
    public function getWin()
    {
        return $this->win;
    }

    /**
     * Set loose
     *
     * @param integer $loose
     *
     * @return Team
     */
    public function setLoose($loose)
    {
        $this->loose = $loose;

        return $this;
    }

    /**
     * Get loose
     *
     * @return integer
     */
    public function getLoose()
    {
        return $this->loose;
    }

    /**
     * Set draw
     *
     * @param integer $draw
     *
     * @return Team
     */
    public function setDraw($draw)
    {
        $this->draw = $draw;

        return $this;
    }

    /**
     * Get draw
     *
     * @return integer
     */
    public function getDraw()
    {
        return $this->draw;
    }

    /**
     * Set points
     *
     * @param integer $points
     *
     * @return Team
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return integer
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set fifarank
     *
     * @param integer $fifarank
     *
     * @return Team
     */
    public function setFifarank($fifarank)
    {
        $this->fifarank = $fifarank;

        return $this;
    }

    /**
     * Get fifarank
     *
     * @return integer
     */
    public function getFifarank()
    {
        return $this->fifarank;
    }

    /**
     * Set flagphoto
     *
     * @param string $flagphoto
     *
     * @return Team
     */
    public function setFlagphoto($flagphoto)
    {
        $this->flagphoto = $flagphoto;

        return $this;
    }

    /**
     * Get flagphoto
     *
     * @return string
     */
    public function getFlagphoto()
    {
        return $this->flagphoto;
    }

    /**
     * Set logophoto
     *
     * @param string $logophoto
     *
     * @return Team
     */
    public function setLogophoto($logophoto)
    {
        $this->logophoto = $logophoto;

        return $this;
    }

    /**
     * Get logophoto
     *
     * @return string
     */
    public function getLogophoto()
    {
        return $this->logophoto;
    }

    /**
     * Set squadphoto
     *
     * @param string $squadphoto
     *
     * @return Team
     */
    public function setSquadphoto($squadphoto)
    {
        $this->squadphoto = $squadphoto;

        return $this;
    }

    /**
     * Get squadphoto
     *
     * @return string
     */
    public function getSquadphoto()
    {
        return $this->squadphoto;
    }

    /**
     * Set descriptionphoto
     *
     * @param string $descriptionphoto
     *
     * @return Team
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
     * Set description
     *
     * @param string $description
     *
     * @return Team
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
     * Set website
     *
     * @param string $website
     *
     * @return Team
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set video
     *
     * @param string $video
     *
     * @return Team
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
}
