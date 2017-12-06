<?php
/**
 * Created by PhpStorm.
 * User: crespeau
 * Date: 06/12/2017
 * Time: 10:35
 */

namespace Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;

/**
 * Class Reservation
 * @package Entity
 *
 * @ORM\Table(name="reservation")
 */
class Reservation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=50)
     */
    protected $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=50)
     */
    protected $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    protected $mail;

    /**
     * @var Date
     *
     * @ORM\Column(name="date_reservation", type="date")
     */
    protected $date_reservation;
    /**
     * @var Date
     *
     * @ORM\Column(name="date_loan", type="date")
     */
    protected $date_loan;
    /**
     * @var Date
     *
     * @ORM\Column(name="date_back", type="date")
     */
    protected $date_back;


}