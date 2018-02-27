<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adder
 *
 * @ORM\Table(name="adder")
 * @ORM\Entity
 */
class Adder
{
    /**
     * @var integer
     *
     * @ORM\Column(name="adder_key", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $adderKey;

    /**
     * @var string
     *
     * @ORM\Column(name="adder_name", type="string", length=50, nullable=true)
     */
    private $adderName;



    /**
     * Get adderKey
     *
     * @return integer
     */
    public function getAdderKey()
    {
        return $this->adderKey;
    }

    /**
     * Set adderName
     *
     * @param string $adderName
     *
     * @return Adder
     */
    public function setAdderName($adderName)
    {
        $this->adderName = $adderName;

        return $this;
    }

    /**
     * Get adderName
     *
     * @return string
     */
    public function getAdderName()
    {
        return $this->adderName;
    }
}
