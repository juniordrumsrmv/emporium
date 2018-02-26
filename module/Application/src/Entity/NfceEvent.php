<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NfceEvent
 *
 * @ORM\Table(name="nfce_event")
 * @ORM\Entity
 */
class NfceEvent
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
     * @var integer
     *
     * @ORM\Column(name="nfce_number", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nfceNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $startTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="event_time", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $eventTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="event_status", type="smallint", nullable=true)
     */
    private $eventStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="event_desc", type="string", length=250, nullable=true)
     */
    private $eventDesc;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return NfceEvent
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
     * @return NfceEvent
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
     * Set nfceNumber
     *
     * @param integer $nfceNumber
     *
     * @return NfceEvent
     */
    public function setNfceNumber($nfceNumber)
    {
        $this->nfceNumber = $nfceNumber;

        return $this;
    }

    /**
     * Get nfceNumber
     *
     * @return integer
     */
    public function getNfceNumber()
    {
        return $this->nfceNumber;
    }

    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return NfceEvent
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
     * Set eventTime
     *
     * @param \DateTime $eventTime
     *
     * @return NfceEvent
     */
    public function setEventTime($eventTime)
    {
        $this->eventTime = $eventTime;

        return $this;
    }

    /**
     * Get eventTime
     *
     * @return \DateTime
     */
    public function getEventTime()
    {
        return $this->eventTime;
    }

    /**
     * Set eventStatus
     *
     * @param integer $eventStatus
     *
     * @return NfceEvent
     */
    public function setEventStatus($eventStatus)
    {
        $this->eventStatus = $eventStatus;

        return $this;
    }

    /**
     * Get eventStatus
     *
     * @return integer
     */
    public function getEventStatus()
    {
        return $this->eventStatus;
    }

    /**
     * Set eventDesc
     *
     * @param string $eventDesc
     *
     * @return NfceEvent
     */
    public function setEventDesc($eventDesc)
    {
        $this->eventDesc = $eventDesc;

        return $this;
    }

    /**
     * Get eventDesc
     *
     * @return string
     */
    public function getEventDesc()
    {
        return $this->eventDesc;
    }
}
