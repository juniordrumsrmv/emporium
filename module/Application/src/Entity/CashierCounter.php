<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CashierCounter
 *
 * @ORM\Table(name="cashier_counter")
 * @ORM\Entity
 */
class CashierCounter
{
    /**
     * @var integer
     *
     * @ORM\Column(name="agent_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $agentKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="counter_number", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $counterNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="counter_times", type="bigint", nullable=false)
     */
    private $counterTimes;

    /**
     * @var string
     *
     * @ORM\Column(name="counter_qty", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $counterQty;

    /**
     * @var string
     *
     * @ORM\Column(name="counter_amount", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $counterAmount;



    /**
     * Set agentKey
     *
     * @param integer $agentKey
     *
     * @return CashierCounter
     */
    public function setAgentKey($agentKey)
    {
        $this->agentKey = $agentKey;

        return $this;
    }

    /**
     * Get agentKey
     *
     * @return integer
     */
    public function getAgentKey()
    {
        return $this->agentKey;
    }

    /**
     * Set counterNumber
     *
     * @param integer $counterNumber
     *
     * @return CashierCounter
     */
    public function setCounterNumber($counterNumber)
    {
        $this->counterNumber = $counterNumber;

        return $this;
    }

    /**
     * Get counterNumber
     *
     * @return integer
     */
    public function getCounterNumber()
    {
        return $this->counterNumber;
    }

    /**
     * Set counterTimes
     *
     * @param integer $counterTimes
     *
     * @return CashierCounter
     */
    public function setCounterTimes($counterTimes)
    {
        $this->counterTimes = $counterTimes;

        return $this;
    }

    /**
     * Get counterTimes
     *
     * @return integer
     */
    public function getCounterTimes()
    {
        return $this->counterTimes;
    }

    /**
     * Set counterQty
     *
     * @param string $counterQty
     *
     * @return CashierCounter
     */
    public function setCounterQty($counterQty)
    {
        $this->counterQty = $counterQty;

        return $this;
    }

    /**
     * Get counterQty
     *
     * @return string
     */
    public function getCounterQty()
    {
        return $this->counterQty;
    }

    /**
     * Set counterAmount
     *
     * @param string $counterAmount
     *
     * @return CashierCounter
     */
    public function setCounterAmount($counterAmount)
    {
        $this->counterAmount = $counterAmount;

        return $this;
    }

    /**
     * Get counterAmount
     *
     * @return string
     */
    public function getCounterAmount()
    {
        return $this->counterAmount;
    }
}
