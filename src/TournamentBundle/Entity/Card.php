<?php

namespace TournamentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Card
 *
 * @ORM\Table(name="Card", indexes={@ORM\Index(name="game", columns={"game"}), @ORM\Index(name="card_ibfk_2", columns={"player"})})
 * @ORM\Entity
 */
class Card
{
    /**
     * @var integer
     *
     * @ORM\Column(name="game", type="integer", nullable=false)
     */
    private $game;

    /**
     * @var integer
     *
     * @ORM\Column(name="player", type="integer", nullable=false)
     */
    private $player;

    /**
     * @var integer
     *
     * @ORM\Column(name="yellow", type="integer", nullable=false)
     */
    private $yellow;

    /**
     * @var integer
     *
     * @ORM\Column(name="red", type="integer", nullable=false)
     */
    private $red;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set game
     *
     * @param integer $game
     *
     * @return Card
     */
    public function setGame($game)
    {
        $this->game = $game;

        return $this;
    }

    /**
     * Get game
     *
     * @return integer
     */
    public function getGame()
    {
        return $this->game;
    }

    /**
     * Set player
     *
     * @param integer $player
     *
     * @return Card
     */
    public function setPlayer($player)
    {
        $this->player = $player;

        return $this;
    }

    /**
     * Get player
     *
     * @return integer
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * Set yellow
     *
     * @param integer $yellow
     *
     * @return Card
     */
    public function setYellow($yellow)
    {
        $this->yellow = $yellow;

        return $this;
    }

    /**
     * Get yellow
     *
     * @return integer
     */
    public function getYellow()
    {
        return $this->yellow;
    }

    /**
     * Set red
     *
     * @param integer $red
     *
     * @return Card
     */
    public function setRed($red)
    {
        $this->red = $red;

        return $this;
    }

    /**
     * Get red
     *
     * @return integer
     */
    public function getRed()
    {
        return $this->red;
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
