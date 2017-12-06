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
 * Class Availability
 * @package Entity
 * @ORM\Entity()
 * @ORM\Table(name="availability")
 */

class Availability
{
    /**
     * Availability ID
     * @var integer
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Availability Label
     * @var string
     * @ORM\Column(name="label", type="string", length=50)
     */
    private $label;

}