<?php
/**
 * Created by PhpStorm.
 * User: crespeau
 * Date: 06/12/2017
 * Time: 10:33
 */

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;

/**
 * Class Book
 * @package Entity
 * @Entity(repositoryClass="Entity\Repository\BookRepository")
 * @Table(name="book1")
 */
class Book
{
    /**
     * Book ID
     * @var integer
     * @Column(name="id", type="integer")
     * @Id()
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * Book Title
     * @var string
     * @Column(name="title", type="string", length=150)
     */
    private $title;

    /**
     * Book Main Author
     * @var string
     * @Column(name="author", type="string", length=50)
     */
    private $author;

    /**
     * Book Publication year
     * @var int
     * @Column(name="year", type="integer", length=4)
     */
    private $year;

    /**
     * Book Cover
     * @var string(url)
     * @Column(name="book_cover", type="string", length=255)
     */
    private $bookCover;

    /**
     * External link of book
     * @var string (url)
     * @Column(name="external_link", type="string", length=255)
     */
    private $extLink;


    /**
     * @var Category
     * @ManyToOne(targetEntity="Entity\Category", inversedBy="book")
     */
    private $category;


    /**
     * Set title
     *
     * @param string $title
     *
     * @return Book
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
     * Set author
     *
     * @param string $author
     *
     * @return Book
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set year
     *
     * @param integer $year
     *
     * @return Book
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
     * Set bookCover
     *
     * @param string $bookCover
     *
     * @return Book
     */
    public function setBookCover($bookCover)
    {
        $this->bookCover = $bookCover;

        return $this;
    }

    /**
     * Get bookCover
     *
     * @return string
     */
    public function getBookCover()
    {
        return $this->bookCover;
    }

    /**
     * Set extLink
     *
     * @param string $extLink
     *
     * @return Book
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set category
     *
     * @param \Entity\Category $category
     *
     * @return Book
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
