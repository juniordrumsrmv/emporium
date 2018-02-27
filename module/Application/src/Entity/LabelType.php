<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LabelType
 *
 * @ORM\Table(name="label_type")
 * @ORM\Entity
 */
class LabelType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="label_key", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $labelKey;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;



    /**
     * Get labelKey
     *
     * @return integer
     */
    public function getLabelKey()
    {
        return $this->labelKey;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return LabelType
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
