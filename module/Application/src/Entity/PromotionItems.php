<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PromotionItems
 *
 * @ORM\Table(name="promotion_items", uniqueConstraints={@ORM\UniqueConstraint(name="index_promo_item", columns={"promotion_key", "plu_key"})})
 * @ORM\Entity
 */
class PromotionItems
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
     * @ORM\Column(name="plu_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pluKey;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $price;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="points", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $points;



    /**
     * Set promotionKey
     *
     * @param integer $promotionKey
     *
     * @return PromotionItems
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
     * Set pluKey
     *
     * @param integer $pluKey
     *
     * @return PromotionItems
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
     * Set price
     *
     * @param string $price
     *
     * @return PromotionItems
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
     * Set status
     *
     * @param boolean $status
     *
     * @return PromotionItems
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
     * Set points
     *
     * @param string $points
     *
     * @return PromotionItems
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
}
