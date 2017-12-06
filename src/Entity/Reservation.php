<?php
/**
 * Created by PhpStorm.
 * User: crespeau
 * Date: 06/12/2017
 * Time: 10:35
 */

namespace Entity;


class Reservation
{
    protected $id;
    protected $firstname;
    protected $lastname;
    protected $mail;
    protected $date_reservation;
    protected $date_loan;
    protected $date_back;
    protected $id_book;
    protected $id_magazine;
    protected $id_training;
    /**
     * @return mixed
     */
    public function getIdTraining()
    {
        return $this->id_training;
    }
    /**
     * @param mixed $id_training
     */
    public function setIdTraining($id_training): void
    {
        $this->id_training = $id_training;
    }
    /**
     * @return mixed
     */
    public function getIdMagazine()
    {
        return $this->id_magazine;
    }
    /**
     * @param mixed $id_magazine
     */
    public function setIdMagazine($id_magazine): void
    {
        $this->id_magazine = $id_magazine;
    }
    /**
     * @return mixed
     */
    public function getIdBook()
    {
        return $this->id_book;
    }
    /**
     * @param mixed $id_book
     */
    public function setIdBook($id_book): void
    {
        $this->id_book = $id_book;
    }
    /**
     * @return mixed
     */
    public function getDateBack()
    {
        return $this->date_back;
    }
    /**
     * @param mixed $date_back
     */
    public function setDateBack($date_back): void
    {
        $this->date_back = $date_back;
    }
    /**
     * @return mixed
     */
    public function getDateLoan()
    {
        return $this->date_loan;
    }
    /**
     * @param mixed $date_loan
     */
    public function setDateLoan($date_loan): void
    {
        $this->date_loan = $date_loan;
    }
    /**
     * @return mixed
     */
    public function getDateReservation()
    {
        return $this->date_reservation;
    }
    /**
     * @param mixed $date_reservation
     */
    public function setDateReservation($date_reservation): void
    {
        $this->date_reservation = $date_reservation;
    }
    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }
    /**
     * @param mixed $mail
     */
    public function setMail($mail): void
    {
        $this->mail = $mail;
    }
    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }
    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname): void
    {
        $this->lastname = $lastname;
    }
    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }
    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname): void
    {
        $this->firstname = $firstname;
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }
}