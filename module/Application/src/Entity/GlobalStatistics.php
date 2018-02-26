<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlobalStatistics
 *
 * @ORM\Table(name="global_statistics")
 * @ORM\Entity
 */
class GlobalStatistics
{
    /**
     * @var string
     *
     * @ORM\Column(name="s_module", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sModule;

    /**
     * @var string
     *
     * @ORM\Column(name="s_name", type="string", length=9, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="s_time", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sTime;

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
     * @var integer
     *
     * @ORM\Column(name="s_value", type="bigint", nullable=true)
     */
    private $sValue;



    /**
     * Set sModule
     *
     * @param string $sModule
     *
     * @return GlobalStatistics
     */
    public function setSModule($sModule)
    {
        $this->sModule = $sModule;

        return $this;
    }

    /**
     * Get sModule
     *
     * @return string
     */
    public function getSModule()
    {
        return $this->sModule;
    }

    /**
     * Set sName
     *
     * @param string $sName
     *
     * @return GlobalStatistics
     */
    public function setSName($sName)
    {
        $this->sName = $sName;

        return $this;
    }

    /**
     * Get sName
     *
     * @return string
     */
    public function getSName()
    {
        return $this->sName;
    }

    /**
     * Set sTime
     *
     * @param \DateTime $sTime
     *
     * @return GlobalStatistics
     */
    public function setSTime($sTime)
    {
        $this->sTime = $sTime;

        return $this;
    }

    /**
     * Get sTime
     *
     * @return \DateTime
     */
    public function getSTime()
    {
        return $this->sTime;
    }

    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return GlobalStatistics
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
     * @return GlobalStatistics
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
     * Set sValue
     *
     * @param integer $sValue
     *
     * @return GlobalStatistics
     */
    public function setSValue($sValue)
    {
        $this->sValue = $sValue;

        return $this;
    }

    /**
     * Get sValue
     *
     * @return integer
     */
    public function getSValue()
    {
        return $this->sValue;
    }
}
