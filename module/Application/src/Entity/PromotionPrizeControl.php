<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PromotionPrizeControl
 *
 * @ORM\Table(name="promotion_prize_control", indexes={@ORM\Index(name="ppc_eft_trans_nsu", columns={"eft_trans_nsu"})})
 * @ORM\Entity
 */
class PromotionPrizeControl
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
     * @var \DateTime
     *
     * @ORM\Column(name="ppc_date", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ppcDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ppc_time", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ppcTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="ppc_number", type="bigint", nullable=true)
     */
    private $ppcNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="eft_trans_nsu", type="bigint", nullable=false)
     */
    private $eftTransNsu;



    /**
     * Set promotionKey
     *
     * @param integer $promotionKey
     *
     * @return PromotionPrizeControl
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
     * @return PromotionPrizeControl
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
     * Set ppcDate
     *
     * @param \DateTime $ppcDate
     *
     * @return PromotionPrizeControl
     */
    public function setPpcDate($ppcDate)
    {
        $this->ppcDate = $ppcDate;

        return $this;
    }

    /**
     * Get ppcDate
     *
     * @return \DateTime
     */
    public function getPpcDate()
    {
        return $this->ppcDate;
    }

    /**
     * Set ppcTime
     *
     * @param \DateTime $ppcTime
     *
     * @return PromotionPrizeControl
     */
    public function setPpcTime($ppcTime)
    {
        $this->ppcTime = $ppcTime;

        return $this;
    }

    /**
     * Get ppcTime
     *
     * @return \DateTime
     */
    public function getPpcTime()
    {
        return $this->ppcTime;
    }

    /**
     * Set ppcNumber
     *
     * @param integer $ppcNumber
     *
     * @return PromotionPrizeControl
     */
    public function setPpcNumber($ppcNumber)
    {
        $this->ppcNumber = $ppcNumber;

        return $this;
    }

    /**
     * Get ppcNumber
     *
     * @return integer
     */
    public function getPpcNumber()
    {
        return $this->ppcNumber;
    }

    /**
     * Set eftTransNsu
     *
     * @param integer $eftTransNsu
     *
     * @return PromotionPrizeControl
     */
    public function setEftTransNsu($eftTransNsu)
    {
        $this->eftTransNsu = $eftTransNsu;

        return $this;
    }

    /**
     * Get eftTransNsu
     *
     * @return integer
     */
    public function getEftTransNsu()
    {
        return $this->eftTransNsu;
    }
}
