<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CheckingSystem
 *
 * @ORM\Table(name="checking_system", indexes={@ORM\Index(name="index_checking_system", columns={"store_key", "pos_number", "checking_system_type", "checking_system_time"})})
 * @ORM\Entity
 */
class CheckingSystem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="checking_system_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $checkingSystemKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=true)
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_number", type="smallint", nullable=true)
     */
    private $posNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="checking_system_type", type="smallint", nullable=true)
     */
    private $checkingSystemType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="checking_system_time", type="datetime", nullable=true)
     */
    private $checkingSystemTime;

    /**
     * @var string
     *
     * @ORM\Column(name="checking_system_data", type="blob", length=65535, nullable=true)
     */
    private $checkingSystemData;



    /**
     * Get checkingSystemKey
     *
     * @return integer
     */
    public function getCheckingSystemKey()
    {
        return $this->checkingSystemKey;
    }

    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return CheckingSystem
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
     * @return CheckingSystem
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
     * Set checkingSystemType
     *
     * @param integer $checkingSystemType
     *
     * @return CheckingSystem
     */
    public function setCheckingSystemType($checkingSystemType)
    {
        $this->checkingSystemType = $checkingSystemType;

        return $this;
    }

    /**
     * Get checkingSystemType
     *
     * @return integer
     */
    public function getCheckingSystemType()
    {
        return $this->checkingSystemType;
    }

    /**
     * Set checkingSystemTime
     *
     * @param \DateTime $checkingSystemTime
     *
     * @return CheckingSystem
     */
    public function setCheckingSystemTime($checkingSystemTime)
    {
        $this->checkingSystemTime = $checkingSystemTime;

        return $this;
    }

    /**
     * Get checkingSystemTime
     *
     * @return \DateTime
     */
    public function getCheckingSystemTime()
    {
        return $this->checkingSystemTime;
    }

    /**
     * Set checkingSystemData
     *
     * @param string $checkingSystemData
     *
     * @return CheckingSystem
     */
    public function setCheckingSystemData($checkingSystemData)
    {
        $this->checkingSystemData = $checkingSystemData;

        return $this;
    }

    /**
     * Get checkingSystemData
     *
     * @return string
     */
    public function getCheckingSystemData()
    {
        return $this->checkingSystemData;
    }
}
