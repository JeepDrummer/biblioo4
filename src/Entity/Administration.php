<?php
/**
 * Created by PhpStorm.
 * User: crespeau
 * Date: 06/12/2017
 * Time: 10:31
 */

namespace Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * Class Administration
 * @package Entity
 * @ORM\Entity()
 * @ORM\Table(name="administration")
 */
class Administration
{

    /**
     * @var integer
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="firstname", type="string", length=50)
     */
    protected $firstname;

    /**
     * @var string
     * @ORM\Column(name="lastname", type="string", length=50)
     */
    protected $lastname;

    /**
     * @var string
     * @ORM\Column(name="mail", type="string", length=255)
     */
    protected $email;

    /**
     * @var string
     * @ORM\Column(name="password", type="string", length=255)
     */
    protected $password;


}