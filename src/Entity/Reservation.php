<?php
/**
 * Created by PhpStorm.
 * User: crespeau
 * Date: 06/12/2017
 * Time: 10:35
 */

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\Table;
use Symfony\Component\Validator\Constraints\Date;

/**
 * Class Reservation
 * @package Entity
 * @Entity(repositoryClass="Entity\Repository\ReservationRepository")
 * @Table(name="reservation")
 */
class Reservation
{
    /**
     * @var integer
     *
     * @Column(name="id",type="integer")
     * @Id()
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="firstname", type="string", length=50)
     */
    private $firstname;

    /**
     * @var string
     *
     * @Column(name="lastname", type="string", length=50)
     */
    private $lastname;

    /**
     * @var string
     *
     * @Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var Date
     *
     * @Column(name="date_reservation", type="date")
     */
    private $date_reservation;
    /**
     * @var Date
     *
     * @Column(name="date_loan", type="date")
     */
    private $date_loan;
    /**
     * @var Date
     *
     * @Column(name="date_back", type="date")
     */
    private $date_back;

    /**
     * @var Book
     * @ManyToMany(targetEntity="Entity\Book", cascade={"persist"})
     */
    private $book;

    /**
     * @var Magazine
     * @ManyToMany(targetEntity="Entity\Magazine", cascade={"persist"})
     */
    private $magazine;

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
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Reservation
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
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Reservation
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
     * Set mail
     *
     * @param string $mail
     *
     * @return Reservation
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set dateReservation
     *
     * @param \DateTime $dateReservation
     *
     * @return Reservation
     */
    public function setDateReservation($dateReservation)
    {
        $this->date_reservation = $dateReservation;

        return $this;
    }

    /**
     * Get dateReservation
     *
     * @return \DateTime
     */
    public function getDateReservation()
    {
        return $this->date_reservation;
    }

    /**
     * Set dateLoan
     *
     * @param \DateTime $dateLoan
     *
     * @return Reservation
     */
    public function setDateLoan($dateLoan)
    {
        $this->date_loan = $dateLoan;

        return $this;
    }

    /**
     * Get dateLoan
     *
     * @return \DateTime
     */
    public function getDateLoan()
    {
        return $this->date_loan;
    }

    /**
     * Set dateBack
     *
     * @param \DateTime $dateBack
     *
     * @return Reservation
     */
    public function setDateBack($dateBack)
    {
        $this->date_back = $dateBack;

        return $this;
    }

    /**
     * Get dateBack
     *
     * @return \DateTime
     */
    public function getDateBack()
    {
        return $this->date_back;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->book = new \Doctrine\Common\Collections\ArrayCollection();
        $this->magazine = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add book
     *
     * @param \Entity\Book $book
     *
     * @return Reservation
     */
    public function addBook(\Entity\Book $book)
    {
        $this->book[] = $book;

        return $this;
    }

    /**
     * Remove book
     *
     * @param \Entity\Book $book
     */
    public function removeBook(\Entity\Book $book)
    {
        $this->book->removeElement($book);
    }

    /**
     * Get book
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBook()
    {
        return $this->book;
    }

    /**
     * Add magazine
     *
     * @param \Entity\Magazine $magazine
     *
     * @return Reservation
     */
    public function addMagazine(\Entity\Magazine $magazine)
    {
        $this->magazine[] = $magazine;

        return $this;
    }

    /**
     * Remove magazine
     *
     * @param \Entity\Magazine $magazine
     */
    public function removeMagazine(\Entity\Magazine $magazine)
    {
        $this->magazine->removeElement($magazine);
    }

    /**
     * Get magazine
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMagazine()
    {
        return $this->magazine;
    }
}
