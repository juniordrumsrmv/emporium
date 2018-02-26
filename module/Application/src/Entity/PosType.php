<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PosType
 *
 * @ORM\Table(name="pos_type")
 * @ORM\Entity
 */
class PosType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pos_type_key", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $posTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;



    /**
     * Get posTypeKey
     *
     * @return integer
     */
    public function getPosTypeKey()
    {
        return $this->posTypeKey;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return PosType
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
