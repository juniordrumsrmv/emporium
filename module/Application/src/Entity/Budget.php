<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Budget
 *
 * @ORM\Table(name="budget")
 * @ORM\Entity
 */
class Budget
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
     * @var \DateTime
     *
     * @ORM\Column(name="budget_date", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $budgetDate;

    /**
     * @var string
     *
     * @ORM\Column(name="budget_sale", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $budgetSale;

    /**
     * @var string
     *
     * @ORM\Column(name="budget_margim", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $budgetMargim;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return Budget
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
     * Set budgetDate
     *
     * @param \DateTime $budgetDate
     *
     * @return Budget
     */
    public function setBudgetDate($budgetDate)
    {
        $this->budgetDate = $budgetDate;

        return $this;
    }

    /**
     * Get budgetDate
     *
     * @return \DateTime
     */
    public function getBudgetDate()
    {
        return $this->budgetDate;
    }

    /**
     * Set budgetSale
     *
     * @param string $budgetSale
     *
     * @return Budget
     */
    public function setBudgetSale($budgetSale)
    {
        $this->budgetSale = $budgetSale;

        return $this;
    }

    /**
     * Get budgetSale
     *
     * @return string
     */
    public function getBudgetSale()
    {
        return $this->budgetSale;
    }

    /**
     * Set budgetMargim
     *
     * @param string $budgetMargim
     *
     * @return Budget
     */
    public function setBudgetMargim($budgetMargim)
    {
        $this->budgetMargim = $budgetMargim;

        return $this;
    }

    /**
     * Get budgetMargim
     *
     * @return string
     */
    public function getBudgetMargim()
    {
        return $this->budgetMargim;
    }

    /**
     * Set lastChangeTime
     *
     * @param \DateTime $lastChangeTime
     *
     * @return Budget
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
