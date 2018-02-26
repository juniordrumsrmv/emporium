<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FiscalSituation
 *
 * @ORM\Table(name="fiscal_situation", uniqueConstraints={@ORM\UniqueConstraint(name="index_fiscal", columns={"merchandise_origin", "fiscal_situation", "operation_type", "operation", "destine", "origin_region", "destine_region", "cfop"})})
 * @ORM\Entity
 */
class FiscalSituation
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="merchandise_origin", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $merchandiseOrigin;

    /**
     * @var integer
     *
     * @ORM\Column(name="fiscal_situation", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fiscalSituation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="operation_type", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $operationType;

    /**
     * @var boolean
     *
     * @ORM\Column(name="operation", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $operation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="destine", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $destine;

    /**
     * @var boolean
     *
     * @ORM\Column(name="origin_region", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $originRegion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="destine_region", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $destineRegion;

    /**
     * @var integer
     *
     * @ORM\Column(name="cfop", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cfop;

    /**
     * @var string
     *
     * @ORM\Column(name="extra_percent", type="decimal", precision=6, scale=4, nullable=true)
     */
    private $extraPercent;

    /**
     * @var string
     *
     * @ORM\Column(name="red_calc_base", type="decimal", precision=6, scale=4, nullable=true)
     */
    private $redCalcBase;



    /**
     * Set merchandiseOrigin
     *
     * @param boolean $merchandiseOrigin
     *
     * @return FiscalSituation
     */
    public function setMerchandiseOrigin($merchandiseOrigin)
    {
        $this->merchandiseOrigin = $merchandiseOrigin;

        return $this;
    }

    /**
     * Get merchandiseOrigin
     *
     * @return boolean
     */
    public function getMerchandiseOrigin()
    {
        return $this->merchandiseOrigin;
    }

    /**
     * Set fiscalSituation
     *
     * @param integer $fiscalSituation
     *
     * @return FiscalSituation
     */
    public function setFiscalSituation($fiscalSituation)
    {
        $this->fiscalSituation = $fiscalSituation;

        return $this;
    }

    /**
     * Get fiscalSituation
     *
     * @return integer
     */
    public function getFiscalSituation()
    {
        return $this->fiscalSituation;
    }

    /**
     * Set operationType
     *
     * @param boolean $operationType
     *
     * @return FiscalSituation
     */
    public function setOperationType($operationType)
    {
        $this->operationType = $operationType;

        return $this;
    }

    /**
     * Get operationType
     *
     * @return boolean
     */
    public function getOperationType()
    {
        return $this->operationType;
    }

    /**
     * Set operation
     *
     * @param boolean $operation
     *
     * @return FiscalSituation
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;

        return $this;
    }

    /**
     * Get operation
     *
     * @return boolean
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Set destine
     *
     * @param boolean $destine
     *
     * @return FiscalSituation
     */
    public function setDestine($destine)
    {
        $this->destine = $destine;

        return $this;
    }

    /**
     * Get destine
     *
     * @return boolean
     */
    public function getDestine()
    {
        return $this->destine;
    }

    /**
     * Set originRegion
     *
     * @param boolean $originRegion
     *
     * @return FiscalSituation
     */
    public function setOriginRegion($originRegion)
    {
        $this->originRegion = $originRegion;

        return $this;
    }

    /**
     * Get originRegion
     *
     * @return boolean
     */
    public function getOriginRegion()
    {
        return $this->originRegion;
    }

    /**
     * Set destineRegion
     *
     * @param boolean $destineRegion
     *
     * @return FiscalSituation
     */
    public function setDestineRegion($destineRegion)
    {
        $this->destineRegion = $destineRegion;

        return $this;
    }

    /**
     * Get destineRegion
     *
     * @return boolean
     */
    public function getDestineRegion()
    {
        return $this->destineRegion;
    }

    /**
     * Set cfop
     *
     * @param integer $cfop
     *
     * @return FiscalSituation
     */
    public function setCfop($cfop)
    {
        $this->cfop = $cfop;

        return $this;
    }

    /**
     * Get cfop
     *
     * @return integer
     */
    public function getCfop()
    {
        return $this->cfop;
    }

    /**
     * Set extraPercent
     *
     * @param string $extraPercent
     *
     * @return FiscalSituation
     */
    public function setExtraPercent($extraPercent)
    {
        $this->extraPercent = $extraPercent;

        return $this;
    }

    /**
     * Get extraPercent
     *
     * @return string
     */
    public function getExtraPercent()
    {
        return $this->extraPercent;
    }

    /**
     * Set redCalcBase
     *
     * @param string $redCalcBase
     *
     * @return FiscalSituation
     */
    public function setRedCalcBase($redCalcBase)
    {
        $this->redCalcBase = $redCalcBase;

        return $this;
    }

    /**
     * Get redCalcBase
     *
     * @return string
     */
    public function getRedCalcBase()
    {
        return $this->redCalcBase;
    }
}
