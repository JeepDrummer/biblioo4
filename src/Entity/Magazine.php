<?php
/**
 * Created by PhpStorm.
 * User: crespeau
 * Date: 06/12/2017
 * Time: 10:34
 */

namespace Entity;


class Magazine
{
    /**
     * Magazine ID
     * @var int
     */
    private $id;
    /**
     * Magazine Title
     * @var string
     */
    private $title;
    /**
     * Magazine Publication Year
     * @var int
     */
    private $year;
    /**
     * Magazine Publication Month
     * @var int
     */
    private $month;
    /**
     * Magazine Number
     * @var int
     */
    private $number;
    /**
     * Magazine Cover URL
     * @var string (url)
     */
    private $magCover;
    /**
     * Magazine Description
     * @var string
     */
    private $description;
    /**
     * External Link of Description Magazine
     * @var string (url)
     */
    private $extLink;
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }
    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }
    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }
    /**
     * @param int $year
     */
    public function setYear(int $year)
    {
        $this->year = $year;
    }
    /**
     * @return int
     */
    public function getMonth(): int
    {
        return $this->month;
    }
    /**
     * @param int $month
     */
    public function setMonth(int $month)
    {
        $this->month = $month;
    }
    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }
    /**
     * @param int $number
     */
    public function setNumber(int $number)
    {
        $this->number = $number;
    }
    /**
     * @return string
     */
    public function getMagCover(): string
    {
        return $this->magCover;
    }
    /**
     * @param string $magCover
     */
    public function setMagCover(string $magCover)
    {
        $this->magCover = $magCover;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }
    /**
     * @return string
     */
    public function getExtLink(): string
    {
        return $this->extLink;
    }
    /**
     * @param string $extLink
     */
    public function setExtLink(string $extLink)
    {
        $this->extLink = $extLink;
    }
}