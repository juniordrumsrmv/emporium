<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PromotionKit
 *
 * @ORM\Table(name="promotion_kit")
 * @ORM\Entity
 */
class PromotionKit
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
     * @ORM\Column(name="plu_kit", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pluKit;

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
     * @var string
     *
     * @ORM\Column(name="discount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $discount;

    /**
     * @var integer
     *
     * @ORM\Column(name="flag_discount", type="smallint", nullable=true)
     */
    private $flagDiscount = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="points", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $points;

    /**
     * @var integer
     *
     * @ORM\Column(name="count_type", type="smallint", nullable=true)
     */
    private $countType = '0';



    /**
     * Set promotionKey
     *
     * @param integer $promotionKey
     *
     * @return PromotionKit
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
     * Set pluKit
     *
     * @param integer $pluKit
     *
     * @return PromotionKit
     */
    public function setPluKit($pluKit)
    {
        $this->pluKit = $pluKit;

        return $this;
    }

    /**
     * Get pluKit
     *
     * @return integer
     */
    public function getPluKit()
    {
        return $this->pluKit;
    }

    /**
     * Set pluKey
     *
     * @param integer $pluKey
     *
     * @return PromotionKit
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
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return PromotionKit
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
     * @return PromotionKit
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
     * Set discount
     *
     * @param string $discount
     *
     * @return PromotionKit
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return string
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set flagDiscount
     *
     * @param integer $flagDiscount
     *
     * @return PromotionKit
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

    /**
     * Set points
     *
     * @param string $points
     *
     * @return PromotionKit
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
     * Set countType
     *
     * @param integer $countType
     *
     * @return PromotionKit
     */
    public function setCountType($countType)
    {
        $this->countType = $countType;

        return $this;
    }

    /**
     * Get countType
     *
     * @return integer
     */
    public function getCountType()
    {
        return $this->countType;
    }
}
