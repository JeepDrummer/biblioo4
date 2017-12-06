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
 * Class Category
 * @package Entity
 * @ORM\Entity()
 * @ORM\Table(name="category")
 */
class Category
{
    /**
     * Category ID
     * @var integer
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Category Label
     * @var string
     * @ORM\Column(name="label", type="string", length=255)
     */
    private $label;


}