<?php
/**
 * Created by PhpStorm.
 * User: crespeau
 * Date: 06/12/2017
 * Time: 10:34
 */

namespace Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;

/**
 * Class Magazine
 * @package Entity
 *
 * @Entity(repositoryClass="Entity\Repository\MagazineRepository")
 * @Table(name="magazine")
 */
class Magazine
{
    /**
     * Magazine ID
     * @var integer
     *
     * @Column(name="id", type="integer")
     * @Id()
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Magazine Title
     * @var string
     *
     * @Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * Magazine Publication Year
     * @var int
     *
     * @Column(name="year", type="integer", length=4)
     */
    private $year;

    /**
     * Magazine Publication Month
     * @var int
     *
     * @Column(name="month", type="integer", length=2)
     */
    private $month;

    /**
     * Magazine Number
     * @var int
     * @Column(name="number", type="integer", length=11)
     */
    private $number;

    /**
     * Magazine Cover URL
     * @var string (url)
     * @Column(name="mag_cover", type="string", length=255)
     */
    private $magCover;

    /**
     * Magazine Description
     * @var string
     * @Column(name="description", type="text")
     */
    private $description;

    /**
     * External Link of Description Magazine
     * @var string (url)
     * @Column(name="external_link", type="string", length=255)
     */
    private $extLink;

    /**
     * @var Category
     * @ManyToOne(targetEntity="Entity\Category", inversedBy="magazine")
     */
    private $category;



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
     * Set title
     *
     * @param string $title
     *
     * @return Magazine
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set year
     *
     * @param integer $year
     *
     * @return Magazine
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set month
     *
     * @param integer $month
     *
     * @return Magazine
     */
    public function setMonth($month)
    {
        $this->month = $month;

        return $this;
    }

    /**
     * Get month
     *
     * @return integer
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Set number
     *
     * @param integer $number
     *
     * @return Magazine
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set magCover
     *
     * @param string $magCover
     *
     * @return Magazine
     */
    public function setMagCover($magCover)
    {
        $this->magCover = $magCover;

        return $this;
    }

    /**
     * Get magCover
     *
     * @return string
     */
    public function getMagCover()
    {
        return $this->magCover;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Magazine
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set extLink
     *
     * @param string $extLink
     *
     * @return Magazine
     */
    public function setExtLink($extLink)
    {
        $this->extLink = $extLink;

        return $this;
    }

    /**
     * Get extLink
     *
     * @return string
     */
    public function getExtLink()
    {
        return $this->extLink;
    }

    /**
     * Set category
     *
     * @param \Entity\Category $category
     *
     * @return Magazine
     */
    public function setCategory(\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }
}
