<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DiscountWrappedup
 *
 * @ORM\Table(name="discount_wrappedup")
 * @ORM\Entity
 */
class DiscountWrappedup
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
     * @var boolean
     *
     * @ORM\Column(name="wrappedup_type", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $wrappedupType;

    /**
     * @var integer
     *
     * @ORM\Column(name="wrappedup_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $wrappedupKey;



    /**
     * Set dstKey
     *
     * @param integer $dstKey
     *
     * @return DiscountWrappedup
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
     * Set wrappedupType
     *
     * @param boolean $wrappedupType
     *
     * @return DiscountWrappedup
     */
    public function setWrappedupType($wrappedupType)
    {
        $this->wrappedupType = $wrappedupType;

        return $this;
    }

    /**
     * Get wrappedupType
     *
     * @return boolean
     */
    public function getWrappedupType()
    {
        return $this->wrappedupType;
    }

    /**
     * Set wrappedupKey
     *
     * @param integer $wrappedupKey
     *
     * @return DiscountWrappedup
     */
    public function setWrappedupKey($wrappedupKey)
    {
        $this->wrappedupKey = $wrappedupKey;

        return $this;
    }

    /**
     * Get wrappedupKey
     *
     * @return integer
     */
    public function getWrappedupKey()
    {
        return $this->wrappedupKey;
    }
}
