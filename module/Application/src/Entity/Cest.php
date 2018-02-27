<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cest
 *
 * @ORM\Table(name="cest")
 * @ORM\Entity
 */
class Cest
{
    /**
     * @var string
     *
     * @ORM\Column(name="cest_code", type="string", length=12, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cestCode;

    /**
     * @var string
     *
     * @ORM\Column(name="cest_description", type="string", length=250, nullable=false)
     */
    private $cestDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="segment", type="string", length=50, nullable=true)
     */
    private $segment;

    /**
     * @var string
     *
     * @ORM\Column(name="item", type="string", length=10, nullable=true)
     */
    private $item;



    /**
     * Get cestCode
     *
     * @return string
     */
    public function getCestCode()
    {
        return $this->cestCode;
    }

    /**
     * Set cestDescription
     *
     * @param string $cestDescription
     *
     * @return Cest
     */
    public function setCestDescription($cestDescription)
    {
        $this->cestDescription = $cestDescription;

        return $this;
    }

    /**
     * Get cestDescription
     *
     * @return string
     */
    public function getCestDescription()
    {
        return $this->cestDescription;
    }

    /**
     * Set segment
     *
     * @param string $segment
     *
     * @return Cest
     */
    public function setSegment($segment)
    {
        $this->segment = $segment;

        return $this;
    }

    /**
     * Get segment
     *
     * @return string
     */
    public function getSegment()
    {
        return $this->segment;
    }

    /**
     * Set item
     *
     * @param string $item
     *
     * @return Cest
     */
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return string
     */
    public function getItem()
    {
        return $this->item;
    }
}
