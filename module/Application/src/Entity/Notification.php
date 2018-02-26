<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 *
 * @ORM\Table(name="notification", indexes={@ORM\Index(name="index_notification", columns={"store_key", "pos_number", "notification_time"})})
 * @ORM\Entity
 */
class Notification
{
    /**
     * @var integer
     *
     * @ORM\Column(name="notification_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $notificationKey;

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
     * @var \DateTime
     *
     * @ORM\Column(name="notification_time", type="datetime", nullable=true)
     */
    private $notificationTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="notification_type", type="smallint", nullable=true)
     */
    private $notificationType;

    /**
     * @var integer
     *
     * @ORM\Column(name="transaction_type", type="smallint", nullable=true)
     */
    private $transactionType;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="smallint", nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="units", type="bigint", nullable=true)
     */
    private $units;

    /**
     * @var string
     *
     * @ORM\Column(name="process_id", type="string", length=255, nullable=true)
     */
    private $processId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ticket_number", type="integer", nullable=true)
     */
    private $ticketNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="trn_number", type="integer", nullable=true)
     */
    private $trnNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="cashier_key", type="bigint", nullable=true)
     */
    private $cashierKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="authorizer_key", type="bigint", nullable=true)
     */
    private $authorizerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="notification_data", type="blob", length=65535, nullable=true)
     */
    private $notificationData;



    /**
     * Get notificationKey
     *
     * @return integer
     */
    public function getNotificationKey()
    {
        return $this->notificationKey;
    }

    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return Notification
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
     * @return Notification
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
     * Set notificationTime
     *
     * @param \DateTime $notificationTime
     *
     * @return Notification
     */
    public function setNotificationTime($notificationTime)
    {
        $this->notificationTime = $notificationTime;

        return $this;
    }

    /**
     * Get notificationTime
     *
     * @return \DateTime
     */
    public function getNotificationTime()
    {
        return $this->notificationTime;
    }

    /**
     * Set notificationType
     *
     * @param integer $notificationType
     *
     * @return Notification
     */
    public function setNotificationType($notificationType)
    {
        $this->notificationType = $notificationType;

        return $this;
    }

    /**
     * Get notificationType
     *
     * @return integer
     */
    public function getNotificationType()
    {
        return $this->notificationType;
    }

    /**
     * Set transactionType
     *
     * @param integer $transactionType
     *
     * @return Notification
     */
    public function setTransactionType($transactionType)
    {
        $this->transactionType = $transactionType;

        return $this;
    }

    /**
     * Get transactionType
     *
     * @return integer
     */
    public function getTransactionType()
    {
        return $this->transactionType;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Notification
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set units
     *
     * @param integer $units
     *
     * @return Notification
     */
    public function setUnits($units)
    {
        $this->units = $units;

        return $this;
    }

    /**
     * Get units
     *
     * @return integer
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * Set processId
     *
     * @param string $processId
     *
     * @return Notification
     */
    public function setProcessId($processId)
    {
        $this->processId = $processId;

        return $this;
    }

    /**
     * Get processId
     *
     * @return string
     */
    public function getProcessId()
    {
        return $this->processId;
    }

    /**
     * Set ticketNumber
     *
     * @param integer $ticketNumber
     *
     * @return Notification
     */
    public function setTicketNumber($ticketNumber)
    {
        $this->ticketNumber = $ticketNumber;

        return $this;
    }

    /**
     * Get ticketNumber
     *
     * @return integer
     */
    public function getTicketNumber()
    {
        return $this->ticketNumber;
    }

    /**
     * Set trnNumber
     *
     * @param integer $trnNumber
     *
     * @return Notification
     */
    public function setTrnNumber($trnNumber)
    {
        $this->trnNumber = $trnNumber;

        return $this;
    }

    /**
     * Get trnNumber
     *
     * @return integer
     */
    public function getTrnNumber()
    {
        return $this->trnNumber;
    }

    /**
     * Set cashierKey
     *
     * @param integer $cashierKey
     *
     * @return Notification
     */
    public function setCashierKey($cashierKey)
    {
        $this->cashierKey = $cashierKey;

        return $this;
    }

    /**
     * Get cashierKey
     *
     * @return integer
     */
    public function getCashierKey()
    {
        return $this->cashierKey;
    }

    /**
     * Set authorizerKey
     *
     * @param integer $authorizerKey
     *
     * @return Notification
     */
    public function setAuthorizerKey($authorizerKey)
    {
        $this->authorizerKey = $authorizerKey;

        return $this;
    }

    /**
     * Get authorizerKey
     *
     * @return integer
     */
    public function getAuthorizerKey()
    {
        return $this->authorizerKey;
    }

    /**
     * Set notificationData
     *
     * @param string $notificationData
     *
     * @return Notification
     */
    public function setNotificationData($notificationData)
    {
        $this->notificationData = $notificationData;

        return $this;
    }

    /**
     * Get notificationData
     *
     * @return string
     */
    public function getNotificationData()
    {
        return $this->notificationData;
    }
}
