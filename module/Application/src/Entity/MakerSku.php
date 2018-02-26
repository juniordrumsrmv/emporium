<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MakerSku
 *
 * @ORM\Table(name="maker_sku", indexes={@ORM\Index(name="index_sku_maker_key", columns={"maker_key"})})
 * @ORM\Entity
 */
class MakerSku
{
    /**
     * @var string
     *
     * @ORM\Column(name="maker_sku_id", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $makerSkuId;

    /**
     * @var integer
     *
     * @ORM\Column(name="maker_sku_type_key", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $makerSkuTypeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="maker_key", type="bigint", nullable=false)
     */
    private $makerKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="maker_sku_status", type="boolean", nullable=true)
     */
    private $makerSkuStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;



    /**
     * Set makerSkuId
     *
     * @param string $makerSkuId
     *
     * @return MakerSku
     */
    public function setMakerSkuId($makerSkuId)
    {
        $this->makerSkuId = $makerSkuId;

        return $this;
    }

    /**
     * Get makerSkuId
     *
     * @return string
     */
    public function getMakerSkuId()
    {
        return $this->makerSkuId;
    }

    /**
     * Set makerSkuTypeKey
     *
     * @param integer $makerSkuTypeKey
     *
     * @return MakerSku
     */
    public function setMakerSkuTypeKey($makerSkuTypeKey)
    {
        $this->makerSkuTypeKey = $makerSkuTypeKey;

        return $this;
    }

    /**
     * Get makerSkuTypeKey
     *
     * @return integer
     */
    public function getMakerSkuTypeKey()
    {
        return $this->makerSkuTypeKey;
    }

    /**
     * Set makerKey
     *
     * @param integer $makerKey
     *
     * @return MakerSku
     */
    public function setMakerKey($makerKey)
    {
        $this->makerKey = $makerKey;

        return $this;
    }

    /**
     * Get makerKey
     *
     * @return integer
     */
    public function getMakerKey()
    {
        return $this->makerKey;
    }

    /**
     * Set makerSkuStatus
     *
     * @param boolean $makerSkuStatus
     *
     * @return MakerSku
     */
    public function setMakerSkuStatus($makerSkuStatus)
    {
        $this->makerSkuStatus = $makerSkuStatus;

        return $this;
    }

    /**
     * Get makerSkuStatus
     *
     * @return boolean
     */
    public function getMakerSkuStatus()
    {
        return $this->makerSkuStatus;
    }

    /**
     * Set lastChangeTime
     *
     * @param \DateTime $lastChangeTime
     *
     * @return MakerSku
     */
    public function setLastChangeTime($lastChangeTime)
    {
        $this->lastChangeTime = $lastChangeTime;

        return $this;
    }

    /**
     * Get lastChangeTime
     *
     * @return \DateTime
     */
    public function getLastChangeTime()
    {
        return $this->lastChangeTime;
    }
}
