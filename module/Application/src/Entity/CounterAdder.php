<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CounterAdder
 *
 * @ORM\Table(name="counter_adder", indexes={@ORM\Index(name="counter_1", columns={"store_key", "pos_number", "counter_fiscal_date", "counter_type"})})
 * @ORM\Entity
 */
class CounterAdder
{
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
     * @ORM\Column(name="pos_number", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $posNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="counter_date", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $counterDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="counter_type", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $counterType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="counter_fiscal_date", type="date", nullable=false)
     */
    private $counterFiscalDate;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amount;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return CounterAdder
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
     * Set posNumber
     *
     * @param integer $posNumber
     *
     * @return CounterAdder
     */
    public function setPosNumber($posNumber)
    {
        $this->posNumber = $posNumber;

        return $this;
    }

    /**
     * Get posNumber
     *
     * @return integer
     */
    public function getPosNumber()
    {
        return $this->posNumber;
    }

    /**
     * Set counterDate
     *
     * @param \DateTime $counterDate
     *
     * @return CounterAdder
     */
    public function setCounterDate($counterDate)
    {
        $this->counterDate = $counterDate;

        return $this;
    }

    /**
     * Get counterDate
     *
     * @return \DateTime
     */
    public function getCounterDate()
    {
        return $this->counterDate;
    }

    /**
     * Set counterType
     *
     * @param integer $counterType
     *
     * @return CounterAdder
     */
    public function setCounterType($counterType)
    {
        $this->counterType = $counterType;

        return $this;
    }

    /**
     * Get counterType
     *
     * @return integer
     */
    public function getCounterType()
    {
        return $this->counterType;
    }

    /**
     * Set counterFiscalDate
     *
     * @param \DateTime $counterFiscalDate
     *
     * @return CounterAdder
     */
    public function setCounterFiscalDate($counterFiscalDate)
    {
        $this->counterFiscalDate = $counterFiscalDate;

        return $this;
    }

    /**
     * Get counterFiscalDate
     *
     * @return \DateTime
     */
    public function getCounterFiscalDate()
    {
        return $this->counterFiscalDate;
    }

    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return CounterAdder
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
}
