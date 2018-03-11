<?php
/**
 * Created by PhpStorm.
 * User: br4in
 * Date: 2/4/18
 * Time: 10:16 AM
 */

namespace UserBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;


/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;
    /**
     * @ORM\Column(type="date")
     */
    protected $birthDate;
    /**
     * @ORM\Column(type="date")
     */
    protected $registrationDate;
    /**
     * @ORM\Column(type="string")
     */
    protected $lastname;
    /**
     * @ORM\Column(type="string")
     */
    protected $firstname;
    /**
     * @ORM\Column(type="string")
     */
    protected $nationality;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $loggedin;
    /**
     * @ORM\Column(type="integer")
     */
    protected $fidelityPoints;
    /**
     * @ORM\Column(type="string")
     */
    protected $profilePicture;
    /**
     * @ORM\Column(type="string")
     */
    protected $phoneNumber;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }



}