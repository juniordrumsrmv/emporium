<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PromotionItem
 *
 * @ORM\Table(name="promotion_item")
 * @ORM\Entity
 */
class PromotionItem
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
     * @ORM\Column(name="plu_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pluKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="item_type", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $itemType;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="points", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $points;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_min", type="bigint", nullable=true)
     */
    private $quantityMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_lim", type="bigint", nullable=true)
     */
    private $quantityLim;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_max", type="bigint", nullable=true)
     */
    private $quantityMax;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="flag_discount", type="smallint", nullable=true)
     */
    private $flagDiscount = '0';



    /**
     * Set promotionKey
     *
     * @param integer $promotionKey
     *
     * @return PromotionItem
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
     * @return PromotionItem
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
     * @return PromotionItem
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
     * Set pluKey
     *
     * @param integer $pluKey
     *
     * @return PromotionItem
     */
    public function setPluKey($pluKey)
    {
        $this->pluKey = $pluKey;

        return $this;
    }

    /**
     * Get pluKey
     *
     * @return integer
     */
    public function getPluKey()
    {
        return $this->pluKey;
    }

    /**
     * Set itemType
     *
     * @param integer $itemType
     *
     * @return PromotionItem
     */
    public function setItemType($itemType)
    {
        $this->itemType = $itemType;

        return $this;
    }

    /**
     * Get itemType
     *
     * @return integer
     */
    public function getItemType()
    {
        return $this->itemType;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return PromotionItem
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set points
     *
     * @param string $points
     *
     * @return PromotionItem
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return string
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set quantityMin
     *
     * @param integer $quantityMin
     *
     * @return PromotionItem
     */
    public function setQuantityMin($quantityMin)
    {
        $this->quantityMin = $quantityMin;

        return $this;
    }

    /**
     * Get quantityMin
     *
     * @return integer
     */
    public function getQuantityMin()
    {
        return $this->quantityMin;
    }

    /**
     * Set quantityLim
     *
     * @param integer $quantityLim
     *
     * @return PromotionItem
     */
    public function setQuantityLim($quantityLim)
    {
        $this->quantityLim = $quantityLim;

        return $this;
    }

    /**
     * Get quantityLim
     *
     * @return integer
     */
    public function getQuantityLim()
    {
        return $this->quantityLim;
    }

    /**
     * Set quantityMax
     *
     * @param integer $quantityMax
     *
     * @return PromotionItem
     */
    public function setQuantityMax($quantityMax)
    {
        $this->quantityMax = $quantityMax;

        return $this;
    }

    /**
     * Get quantityMax
     *
     * @return integer
     */
    public function getQuantityMax()
    {
        return $this->quantityMax;
    }

    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return PromotionItem
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
     * @return PromotionItem
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

    /**
     * Set flagDiscount
     *
     * @param integer $flagDiscount
     *
     * @return PromotionItem
     */
    public function setFlagDiscount($flagDiscount)
    {
        $this->flagDiscount = $flagDiscount;

        return $this;
    }

    /**
     * Get flagDiscount
     *
     * @return integer
     */
    public function getFlagDiscount()
    {
        return $this->flagDiscount;
    }
}
