<?php

namespace NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Favorites
 *
 * @ORM\Table(name="Favorites", indexes={@ORM\Index(name="idUser", columns={"idUser"})})
 * @ORM\Entity
 */
class Favorites
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idEntity", type="integer", nullable=false)
     */
    private $identity;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeEntity", type="string", length=10, nullable=false)
     */
    private $typeentity;

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
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="id")
     * })
     */
    private $iduser;



    /**
     * Set identity
     *
     * @param integer $identity
     *
     * @return Favorites
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
     * @return Favorites
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set iduser
     *
     * @param \NewsBundle\Entity\User $iduser
     *
     * @return Favorites
     */
    public function setIduser(\NewsBundle\Entity\User $iduser = null)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return \NewsBundle\Entity\User
     */
    public function getIduser()
    {
        return $this->iduser;
    }
}
