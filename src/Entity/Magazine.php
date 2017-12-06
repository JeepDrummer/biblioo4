<?php
/**
 * Created by PhpStorm.
 * User: crespeau
 * Date: 06/12/2017
 * Time: 10:34
 */

namespace Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Magazine
 * @package Entity
 *
 * @ORM\Entity()
 * @ORM\Table(name="magazine")
 */
class Magazine
{
    /**
     * Magazine ID
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Magazine Title
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * Magazine Publication Year
     * @var int
     *
     * @ORM\Column(name="year", type="integer", length=4)
     */
    private $year;

    /**
     * Magazine Publication Month
     * @var int
     *
     * @ORM\Column(name="month", type="integer", length=2)
     */
    private $month;

    /**
     * Magazine Number
     * @var int
     * @ORM\Column(name="number", type="integer", length=11)
     */
    private $number;

    /**
     * Magazine Cover URL
     * @var string (url)
     * @ORM\Column(name="mag_cover", type="string", length=255)
     */
    private $magCover;

    /**
     * Magazine Description
     * @var string
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * External Link of Description Magazine
     * @var string (url)
     * @ORM\Column(name="external_link", type="string", length=255)
     */
    private $extLink;

}