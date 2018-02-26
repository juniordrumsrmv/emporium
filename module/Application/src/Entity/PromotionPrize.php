<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PromotionPrize
 *
 * @ORM\Table(name="promotion_prize")
 * @ORM\Entity
 */
class PromotionPrize
{
    /**
     * @var integer
     *
     * @ORM\Column(name="promotion_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $promotionKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_group_key", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $storeGroupKey = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="initial_number", type="bigint", nullable=false)
     */
    private $initialNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="increase", type="bigint", nullable=false)
     */
    private $increase;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="bigint", nullable=false)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;



    /**
     * Set promotionKey
     *
     * @param integer $promotionKey
     *
     * @return PromotionPrize
     */
    public function setPromotionKey($promotionKey)
    {
        $this->promotionKey = $promotionKey;

        return $this;
    }

    /**
     * Get promotionKey
     *
     * @return integer
     */
    public function getPromotionKey()
    {
        return $this->promotionKey;
    }

    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return PromotionPrize
     */
    public function setStoreKey($storeKey)
    {
        $this->storeKey = $storeKey;

        return $this;
    }

    /**
     * Get storeKey
     *
     * @return integer
     */
    public function getStoreKey()
    {
        return $this->storeKey;
    }

    /**
     * Set storeGroupKey
     *
     * @param integer $storeGroupKey
     *
     * @return PromotionPrize
     */
    public function setStoreGroupKey($storeGroupKey)
    {
        $this->storeGroupKey = $storeGroupKey;

        return $this;
    }

    /**
     * Get storeGroupKey
     *
     * @return integer
     */
    public function getStoreGroupKey()
    {
        return $this->storeGroupKey;
    }

    /**
     * Set initialNumber
     *
     * @param integer $initialNumber
     *
     * @return PromotionPrize
     */
    public function setInitialNumber($initialNumber)
    {
        $this->initialNumber = $initialNumber;

        return $this;
    }

    /**
     * Get initialNumber
     *
     * @return integer
     */
    public function getInitialNumber()
    {
        return $this->initialNumber;
    }

    /**
     * Set increase
     *
     * @param integer $increase
     *
     * @return PromotionPrize
     */
    public function setIncrease($increase)
    {
        $this->increase = $increase;

        return $this;
    }

    /**
     * Get increase
     *
     * @return integer
     */
    public function getIncrease()
    {
        return $this->increase;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return PromotionPrize
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return PromotionPrize
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return PromotionPrize
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }
}
