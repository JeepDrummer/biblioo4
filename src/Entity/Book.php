<?php
/**
 * Created by PhpStorm.
 * User: crespeau
 * Date: 06/12/2017
 * Time: 10:33
 */

namespace Entity;


class Book
{
    /**
     * Book ID
     * @var int
     */
    private $id;
    /**
     * Book Title
     * @var string
     */
    private $title;
    /**
     * Book Main Author
     * @var string
     */
    private $author;
    /**
     * Book Publication year
     * @var int
     */
    private $year;
    /**
     * Book Cover
     * @var string(url)
     */
    private $bookCover;
    /**
     * External link of book
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
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }
    /**
     * @param string $author
     */
    public function setAuthor(string $author)
    {
        $this->author = $author;
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
     * @return string
     */
    public function getBookCover(): string
    {
        return $this->bookCover;
    }
    /**
     * @param string $bookCover
     */
    public function setBookCover(string $bookCover)
    {
        $this->bookCover = $bookCover;
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