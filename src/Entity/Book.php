<?php
/**
 * Created by PhpStorm.
 * User: crespeau
 * Date: 06/12/2017
 * Time: 10:33
 */

namespace Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Book
 * @package Entity
 * @ORM\Entity()
 * @ORM\Table(name="book")
 */
class Book
{
    /**
     * Book ID
     * @var integer
     * @Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * Book Title
     * @var string
     * @ORM\Column(name="title", type="string", length=150)
     */
    private $title;

    /**
     * Book Main Author
     * @var string
     * @ORM\Column(name="author", type="string", length=50)
     */
    private $author;

    /**
     * Book Publication year
     * @var int
     * @ORM\Column(name="year", type="integer", length=4)
     */
    private $year;

    /**
     * Book Cover
     * @var string(url)
     * @ORM\Column(name="book_cover", type="string", length=255)
     */
    private $bookCover;

    /**
     * External link of book
     * @var string (url)
     * @ORM\Column(name="external_link", type="string", length=255)
     */
    private $extLink;


}