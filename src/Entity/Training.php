<?php
/**
 * Created by PhpStorm.
 * User: crespeau
 * Date: 06/12/2017
 * Time: 10:36
 */

namespace Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Training
 * @package Entity
 * @ORM\Entity()
 * @ORM\Table(name="book")
 */
class Training
{
    /**
     * Training ID
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * Training Label
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=50)
     */
    private $label;

}