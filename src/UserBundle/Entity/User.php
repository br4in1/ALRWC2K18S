<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birth_date", type="date", precision=0, scale=0, nullable=false, unique=false)
     */
    private $birthDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registration_date", type="date", precision=0, scale=0, nullable=false, unique=false)
     */
    private $registrationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", precision=0, scale=0, nullable=false, unique=false)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", precision=0, scale=0, nullable=false, unique=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="nationality", type="string", precision=0, scale=0, nullable=false, unique=false)
     */
    private $nationality;

    /**
     * @var boolean
     *
     * @ORM\Column(name="loggedin", type="boolean", precision=0, scale=0, nullable=false, unique=false)
     */
    private $loggedin;

    /**
     * @var integer
     *
     * @ORM\Column(name="fidelity_points", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $fidelityPoints;

    /**
     * @var string
     *
     * @ORM\Column(name="profile_picture", type="string", precision=0, scale=0, nullable=false, unique=false)
     */
    private $profilePicture;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number", type="string", precision=0, scale=0, nullable=false, unique=false)
     */
    private $phoneNumber;



    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return User
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set registrationDate
     *
     * @param \DateTime $registrationDate
     *
     * @return User
     */
    public function setRegistrationDate($registrationDate)
    {
        $this->registrationDate = $registrationDate;

        return $this;
    }

    /**
     * Get registrationDate
     *
     * @return \DateTime
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return User
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
     * Set firstname
     *
     * @param string $firstname
     *
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set nationality
     *
     * @param string $nationality
     *
     * @return User
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set loggedin
     *
     * @param boolean $loggedin
     *
     * @return User
     */
    public function setLoggedin($loggedin)
    {
        $this->loggedin = $loggedin;

        return $this;
    }

    /**
     * Get loggedin
     *
     * @return boolean
     */
    public function getLoggedin()
    {
        return $this->loggedin;
    }

    /**
     * Set fidelityPoints
     *
     * @param integer $fidelityPoints
     *
     * @return User
     */
    public function setFidelityPoints($fidelityPoints)
    {
        $this->fidelityPoints = $fidelityPoints;

        return $this;
    }

    /**
     * Get fidelityPoints
     *
     * @return integer
     */
    public function getFidelityPoints()
    {
        return $this->fidelityPoints;
    }

    /**
     * Set profilePicture
     *
     * @param string $profilePicture
     *
     * @return User
     */
    public function setProfilePicture($profilePicture)
    {
        $this->profilePicture = $profilePicture;

        return $this;
    }

    /**
     * Get profilePicture
     *
     * @return string
     */
    public function getProfilePicture()
    {
        return $this->profilePicture;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return User
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
}
