<?php

namespace TournamentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Game
 *
 * @ORM\Table(name="Game", indexes={@ORM\Index(name="AwayTeam", columns={"AwayTeam"}), @ORM\Index(name="game_ibfk_2", columns={"HomeTeam"}), @ORM\Index(name="Stadium", columns={"Stadium"})})
 * @ORM\Entity
 */
class Game
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="Result", type="string", length=10, nullable=true)
     */
    private $result;

    /**
     * @var string
     *
     * @ORM\Column(name="Summary", type="text", nullable=true)
     */
    private $summary;

    /**
     * @var string
     *
     * @ORM\Column(name="SummaryPhoto", type="text", length=65535, nullable=false)
     */
    private $summaryphoto;

    /**
     * @var string
     *
     * @ORM\Column(name="Highlights", type="text", length=65535, nullable=true)
     */
    private $highlights;

    /**
     * @var string
     *
     * @ORM\Column(name="Referee", type="string", length=20, nullable=false)
     */
    private $referee;

    /**
     * @var string
     *
     * @ORM\Column(name="Squads", type="string", length=400, nullable=true)
     */
    private $squads;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \TournamentBundle\Entity\Team
     *
     * @ORM\ManyToOne(targetEntity="TournamentBundle\Entity\Team")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AwayTeam", referencedColumnName="id")
     * })
     */
    private $awayteam;

    /**
     * @var \TournamentBundle\Entity\Team
     *
     * @ORM\ManyToOne(targetEntity="TournamentBundle\Entity\Team")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="HomeTeam", referencedColumnName="id")
     * })
     */
    private $hometeam;

    /**
     * @var \TournamentBundle\Entity\Stadium
     *
     * @ORM\ManyToOne(targetEntity="TournamentBundle\Entity\Stadium")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Stadium", referencedColumnName="id")
     * })
     */
    private $stadium;



    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Game
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set result
     *
     * @param string $result
     *
     * @return Game
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set summary
     *
     * @param string $summary
     *
     * @return Game
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set summaryphoto
     *
     * @param string $summaryphoto
     *
     * @return Game
     */
    public function setSummaryphoto($summaryphoto)
    {
        $this->summaryphoto = $summaryphoto;

        return $this;
    }

    /**
     * Get summaryphoto
     *
     * @return string
     */
    public function getSummaryphoto()
    {
        return $this->summaryphoto;
    }

    /**
     * Set highlights
     *
     * @param string $highlights
     *
     * @return Game
     */
    public function setHighlights($highlights)
    {
        $this->highlights = $highlights;

        return $this;
    }

    /**
     * Get highlights
     *
     * @return string
     */
    public function getHighlights()
    {
        return $this->highlights;
    }

    /**
     * Set referee
     *
     * @param string $referee
     *
     * @return Game
     */
    public function setReferee($referee)
    {
        $this->referee = $referee;

        return $this;
    }

    /**
     * Get referee
     *
     * @return string
     */
    public function getReferee()
    {
        return $this->referee;
    }

    /**
     * Set squads
     *
     * @param string $squads
     *
     * @return Game
     */
    public function setSquads($squads)
    {
        $this->squads = $squads;

        return $this;
    }

    /**
     * Get squads
     *
     * @return string
     */
    public function getSquads()
    {
        return $this->squads;
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
     * Set awayteam
     *
     * @param \TournamentBundle\Entity\Team $awayteam
     *
     * @return Game
     */
    public function setAwayteam(\TournamentBundle\Entity\Team $awayteam = null)
    {
        $this->awayteam = $awayteam;

        return $this;
    }

    /**
     * Get awayteam
     *
     * @return \TournamentBundle\Entity\Team
     */
    public function getAwayteam()
    {
        return $this->awayteam;
    }

    /**
     * Set hometeam
     *
     * @param \TournamentBundle\Entity\Team $hometeam
     *
     * @return Game
     */
    public function setHometeam(\TournamentBundle\Entity\Team $hometeam = null)
    {
        $this->hometeam = $hometeam;

        return $this;
    }

    /**
     * Get hometeam
     *
     * @return \TournamentBundle\Entity\Team
     */
    public function getHometeam()
    {
        return $this->hometeam;
    }

    /**
     * Set stadium
     *
     * @param \TournamentBundle\Entity\Stadium $stadium
     *
     * @return Game
     */
    public function setStadium(\TournamentBundle\Entity\Stadium $stadium = null)
    {
        $this->stadium = $stadium;

        return $this;
    }

    /**
     * Get stadium
     *
     * @return \TournamentBundle\Entity\Stadium
     */
    public function getStadium()
    {
        return $this->stadium;
    }
}
