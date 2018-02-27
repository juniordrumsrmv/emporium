<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PosUpdateControl
 *
 * @ORM\Table(name="pos_update_control", indexes={@ORM\Index(name="pos_update_control_status", columns={"update_type", "store_key", "transaction_status"})})
 * @ORM\Entity
 */
class PosUpdateControl
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="update_type", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $updateType;

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
     * @ORM\Column(name="update_number", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $updateNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $startTime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="transaction_status", type="boolean", nullable=false)
     */
    private $transactionStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="process_id", type="integer", nullable=false)
     */
    private $processId;



    /**
     * Set updateType
     *
     * @param boolean $updateType
     *
     * @return PosUpdateControl
     */
    public function setUpdateType($updateType)
    {
        $this->updateType = $updateType;

        return $this;
    }

    /**
     * Get updateType
     *
     * @return boolean
     */
    public function getUpdateType()
    {
        return $this->updateType;
    }

    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return PosUpdateControl
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
     * Set updateNumber
     *
     * @param integer $updateNumber
     *
     * @return PosUpdateControl
     */
    public function setUpdateNumber($updateNumber)
    {
        $this->updateNumber = $updateNumber;

        return $this;
    }

    /**
     * Get updateNumber
     *
     * @return integer
     */
    public function getUpdateNumber()
    {
        return $this->updateNumber;
    }

    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return PosUpdateControl
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set transactionStatus
     *
     * @param boolean $transactionStatus
     *
     * @return PosUpdateControl
     */
    public function setTransactionStatus($transactionStatus)
    {
        $this->transactionStatus = $transactionStatus;

        return $this;
    }

    /**
     * Get transactionStatus
     *
     * @return boolean
     */
    public function getTransactionStatus()
    {
        return $this->transactionStatus;
    }

    /**
     * Set processId
     *
     * @param integer $processId
     *
     * @return PosUpdateControl
     */
    public function setProcessId($processId)
    {
        $this->processId = $processId;

        return $this;
    }

    /**
     * Get processId
     *
     * @return integer
     */
    public function getProcessId()
    {
        return $this->processId;
    }
}
