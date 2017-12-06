<?php
/**
 * Created by PhpStorm.
 * User: crespeau
 * Date: 06/12/2017
 * Time: 10:34
 */

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\Table;

/**
 * Class Category
 * @package Entity
 * @Entity(repositoryClass="Entity\Repository\CategoryRepository")
 * @Table(name="category")
 */
class Category
{
    /**
     * Category ID
     * @var integer
     * @Column(name="id", type="integer")
     * @Id()
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Category Label
     * @var string
     * @Column(name="label", type="string", length=255)
     */
    private $label;
    /**
     * @var Book
     * @OneToMany(targetEntity="Entity\Book", mappedBy="category" )
     */
    private $book;

    /**
     * @var Magazine
     * @OneToMany(targetEntity="Entity\Magazine", mappedBy="magazine")
     */
    private $magazine;

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
     * Set label
     *
     * @param string $label
     *
     * @return Category
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
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
     * @return Category
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
     * @return Category
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
