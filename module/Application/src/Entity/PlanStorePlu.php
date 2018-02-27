<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanStorePlu
 *
 * @ORM\Table(name="plan_store_plu")
 * @ORM\Entity
 */
class PlanStorePlu
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
     * @ORM\Column(name="plan_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $planKey;

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
     * @return PlanStorePlu
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
     * @return PlanStorePlu
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
     * @return PlanStorePlu
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
     * Set planKey
     *
     * @param integer $planKey
     *
     * @return PlanStorePlu
     */
    public function setPlanKey($planKey)
    {
        $this->planKey = $planKey;

        return $this;
    }

    /**
     * Get planKey
     *
     * @return integer
     */
    public function getPlanKey()
    {
        return $this->planKey;
    }

    /**
     * Set lastChangeTime
     *
     * @param \DateTime $lastChangeTime
     *
     * @return PlanStorePlu
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
