<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccumLog
 *
 * @ORM\Table(name="accum_log", uniqueConstraints={@ORM\UniqueConstraint(name="index_date_log", columns={"store_key", "log_date", "pos_number"}), @ORM\UniqueConstraint(name="index_pos_log", columns={"store_key", "pos_number", "log_date"})})
 * @ORM\Entity
 */
class AccumLog
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
     * @ORM\Column(name="log_date", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $logDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_number", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $posNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="log_msg_code", type="string", length=12, nullable=false)
     */
    private $logMsgCode;

    /**
     * @var string
     *
     * @ORM\Column(name="log_msg_data", type="string", length=80, nullable=false)
     */
    private $logMsgData;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return AccumLog
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
     * Set logDate
     *
     * @param \DateTime $logDate
     *
     * @return AccumLog
     */
    public function setLogDate($logDate)
    {
        $this->logDate = $logDate;

        return $this;
    }

    /**
     * Get logDate
     *
     * @return \DateTime
     */
    public function getLogDate()
    {
        return $this->logDate;
    }

    /**
     * Set posNumber
     *
     * @param integer $posNumber
     *
     * @return AccumLog
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
     * Set logMsgCode
     *
     * @param string $logMsgCode
     *
     * @return AccumLog
     */
    public function setLogMsgCode($logMsgCode)
    {
        $this->logMsgCode = $logMsgCode;

        return $this;
    }

    /**
     * Get logMsgCode
     *
     * @return string
     */
    public function getLogMsgCode()
    {
        return $this->logMsgCode;
    }

    /**
     * Set logMsgData
     *
     * @param string $logMsgData
     *
     * @return AccumLog
     */
    public function setLogMsgData($logMsgData)
    {
        $this->logMsgData = $logMsgData;

        return $this;
    }

    /**
     * Get logMsgData
     *
     * @return string
     */
    public function getLogMsgData()
    {
        return $this->logMsgData;
    }
}
