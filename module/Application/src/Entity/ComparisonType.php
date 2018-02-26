<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComparisonType
 *
 * @ORM\Table(name="comparison_type")
 * @ORM\Entity
 */
class ComparisonType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=64, nullable=true)
     */
    private $label;



    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set label
     *
     * @param string $label
     *
     * @return ComparisonType
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
}
