<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PumpItemGrandTotal
 *
 * @ORM\Table(name="pump_item_grand_total")
 * @ORM\Entity
 */
class PumpItemGrandTotal
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fiscalDate;

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
     * @ORM\Column(name="pump_number", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pumpNumber;

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
     * @ORM\Column(name="nozzle_number", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nozzleNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="qty", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $qty;



    /**
     * Set fiscalDate
     *
     * @param \DateTime $fiscalDate
     *
     * @return PumpItemGrandTotal
     */
    public function setFiscalDate($fiscalDate)
    {
        $this->fiscalDate = $fiscalDate;

        return $this;
    }

    /**
     * Get fiscalDate
     *
     * @return \DateTime
     */
    public function getFiscalDate()
    {
        return $this->fiscalDate;
    }

    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return PumpItemGrandTotal
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
     * Set pumpNumber
     *
     * @param integer $pumpNumber
     *
     * @return PumpItemGrandTotal
     */
    public function setPumpNumber($pumpNumber)
    {
        $this->pumpNumber = $pumpNumber;

        return $this;
    }

    /**
     * Get pumpNumber
     *
     * @return integer
     */
    public function getPumpNumber()
    {
        return $this->pumpNumber;
    }

    /**
     * Set pluKey
     *
     * @param integer $pluKey
     *
     * @return PumpItemGrandTotal
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
     * Set nozzleNumber
     *
     * @param integer $nozzleNumber
     *
     * @return PumpItemGrandTotal
     */
    public function setNozzleNumber($nozzleNumber)
    {
        $this->nozzleNumber = $nozzleNumber;

        return $this;
    }

    /**
     * Get nozzleNumber
     *
     * @return integer
     */
    public function getNozzleNumber()
    {
        return $this->nozzleNumber;
    }

    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return PumpItemGrandTotal
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
     * Set qty
     *
     * @param string $qty
     *
     * @return PumpItemGrandTotal
     */
    public function setQty($qty)
    {
        $this->qty = $qty;

        return $this;
    }

    /**
     * Get qty
     *
     * @return string
     */
    public function getQty()
    {
        return $this->qty;
    }
}
