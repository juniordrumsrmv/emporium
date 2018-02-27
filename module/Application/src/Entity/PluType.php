<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PluType
 *
 * @ORM\Table(name="plu_type")
 * @ORM\Entity
 */
class PluType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="plu_type", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pluType;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;



    /**
     * Get pluType
     *
     * @return integer
     */
    public function getPluType()
    {
        return $this->pluType;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return PluType
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
