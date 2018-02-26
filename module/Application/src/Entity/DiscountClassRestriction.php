<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DiscountClassRestriction
 *
 * @ORM\Table(name="discount_class_restriction")
 * @ORM\Entity
 */
class DiscountClassRestriction
{
    /**
     * @var integer
     *
     * @ORM\Column(name="dst_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dstKey;

    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=25, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $class;



    /**
     * Set dstKey
     *
     * @param integer $dstKey
     *
     * @return DiscountClassRestriction
     */
    public function setDstKey($dstKey)
    {
        $this->dstKey = $dstKey;

        return $this;
    }

    /**
     * Get dstKey
     *
     * @return integer
     */
    public function getDstKey()
    {
        return $this->dstKey;
    }

    /**
     * Set class
     *
     * @param string $class
     *
     * @return DiscountClassRestriction
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }
}
