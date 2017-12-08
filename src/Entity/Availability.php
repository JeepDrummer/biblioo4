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
 * @ORM\Entity(repositoryClass="Entity\Repository\AvailabilityRepository")
 * @ORM\Table(name="availability")
 */

class Availability
{
    /**
     * Availability ID
     * @var integer
     * @ORM\Column(name="id", type="integer")
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


    /**
     * Set label
     *
     * @param string $label
     *
     * @return Availability
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
