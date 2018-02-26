<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerSummary
 *
 * @ORM\Table(name="customer_summary", indexes={@ORM\Index(name="cs1", columns={"store_key", "pos_number", "ticket_number", "start_time", "summary_bank", "summary_check"})})
 * @ORM\Entity
 */
class CustomerSummary
{
    /**
     * @var integer
     *
     * @ORM\Column(name="customer_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $customerKey;

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
     * @ORM\Column(name="ticket_number", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ticketNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $startTime;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_id", type="string", length=25, nullable=true)
     */
    private $customerId;

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
     * @var integer
     *
     * @ORM\Column(name="summary_bank", type="smallint", nullable=true)
     */
    private $summaryBank;

    /**
     * @var integer
     *
     * @ORM\Column(name="summary_branch", type="smallint", nullable=true)
     */
    private $summaryBranch;

    /**
     * @var integer
     *
     * @ORM\Column(name="summary_account", type="integer", nullable=true)
     */
    private $summaryAccount;

    /**
     * @var integer
     *
     * @ORM\Column(name="summary_check", type="integer", nullable=true)
     */
    private $summaryCheck;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="summary_date_check", type="date", nullable=true)
     */
    private $summaryDateCheck;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="summary_date_payment", type="date", nullable=true)
     */
    private $summaryDatePayment;

    /**
     * @var string
     *
     * @ORM\Column(name="summary_amount", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $summaryAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="summary_status", type="string", length=1, nullable=true)
     */
    private $summaryStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="summary_type", type="string", length=1, nullable=true)
     */
    private $summaryType;

    /**
     * @var string
     *
     * @ORM\Column(name="summary_alinea", type="string", length=2, nullable=true)
     */
    private $summaryAlinea;

    /**
     * @var string
     *
     * @ORM\Column(name="summary_user", type="string", length=11, nullable=true)
     */
    private $summaryUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="summary_date_alt", type="date", nullable=true)
     */
    private $summaryDateAlt;



    /**
     * Set customerKey
     *
     * @param integer $customerKey
     *
     * @return CustomerSummary
     */
    public function setCustomerKey($customerKey)
    {
        $this->customerKey = $customerKey;

        return $this;
    }

    /**
     * Get customerKey
     *
     * @return integer
     */
    public function getCustomerKey()
    {
        return $this->customerKey;
    }

    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return CustomerSummary
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
     * @return CustomerSummary
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
     * Set ticketNumber
     *
     * @param integer $ticketNumber
     *
     * @return CustomerSummary
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
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return CustomerSummary
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
     * Set customerId
     *
     * @param string $customerId
     *
     * @return CustomerSummary
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get customerId
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set cashierKey
     *
     * @param integer $cashierKey
     *
     * @return CustomerSummary
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
     * @return CustomerSummary
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
     * Set summaryBank
     *
     * @param integer $summaryBank
     *
     * @return CustomerSummary
     */
    public function setSummaryBank($summaryBank)
    {
        $this->summaryBank = $summaryBank;

        return $this;
    }

    /**
     * Get summaryBank
     *
     * @return integer
     */
    public function getSummaryBank()
    {
        return $this->summaryBank;
    }

    /**
     * Set summaryBranch
     *
     * @param integer $summaryBranch
     *
     * @return CustomerSummary
     */
    public function setSummaryBranch($summaryBranch)
    {
        $this->summaryBranch = $summaryBranch;

        return $this;
    }

    /**
     * Get summaryBranch
     *
     * @return integer
     */
    public function getSummaryBranch()
    {
        return $this->summaryBranch;
    }

    /**
     * Set summaryAccount
     *
     * @param integer $summaryAccount
     *
     * @return CustomerSummary
     */
    public function setSummaryAccount($summaryAccount)
    {
        $this->summaryAccount = $summaryAccount;

        return $this;
    }

    /**
     * Get summaryAccount
     *
     * @return integer
     */
    public function getSummaryAccount()
    {
        return $this->summaryAccount;
    }

    /**
     * Set summaryCheck
     *
     * @param integer $summaryCheck
     *
     * @return CustomerSummary
     */
    public function setSummaryCheck($summaryCheck)
    {
        $this->summaryCheck = $summaryCheck;

        return $this;
    }

    /**
     * Get summaryCheck
     *
     * @return integer
     */
    public function getSummaryCheck()
    {
        return $this->summaryCheck;
    }

    /**
     * Set summaryDateCheck
     *
     * @param \DateTime $summaryDateCheck
     *
     * @return CustomerSummary
     */
    public function setSummaryDateCheck($summaryDateCheck)
    {
        $this->summaryDateCheck = $summaryDateCheck;

        return $this;
    }

    /**
     * Get summaryDateCheck
     *
     * @return \DateTime
     */
    public function getSummaryDateCheck()
    {
        return $this->summaryDateCheck;
    }

    /**
     * Set summaryDatePayment
     *
     * @param \DateTime $summaryDatePayment
     *
     * @return CustomerSummary
     */
    public function setSummaryDatePayment($summaryDatePayment)
    {
        $this->summaryDatePayment = $summaryDatePayment;

        return $this;
    }

    /**
     * Get summaryDatePayment
     *
     * @return \DateTime
     */
    public function getSummaryDatePayment()
    {
        return $this->summaryDatePayment;
    }

    /**
     * Set summaryAmount
     *
     * @param string $summaryAmount
     *
     * @return CustomerSummary
     */
    public function setSummaryAmount($summaryAmount)
    {
        $this->summaryAmount = $summaryAmount;

        return $this;
    }

    /**
     * Get summaryAmount
     *
     * @return string
     */
    public function getSummaryAmount()
    {
        return $this->summaryAmount;
    }

    /**
     * Set summaryStatus
     *
     * @param string $summaryStatus
     *
     * @return CustomerSummary
     */
    public function setSummaryStatus($summaryStatus)
    {
        $this->summaryStatus = $summaryStatus;

        return $this;
    }

    /**
     * Get summaryStatus
     *
     * @return string
     */
    public function getSummaryStatus()
    {
        return $this->summaryStatus;
    }

    /**
     * Set summaryType
     *
     * @param string $summaryType
     *
     * @return CustomerSummary
     */
    public function setSummaryType($summaryType)
    {
        $this->summaryType = $summaryType;

        return $this;
    }

    /**
     * Get summaryType
     *
     * @return string
     */
    public function getSummaryType()
    {
        return $this->summaryType;
    }

    /**
     * Set summaryAlinea
     *
     * @param string $summaryAlinea
     *
     * @return CustomerSummary
     */
    public function setSummaryAlinea($summaryAlinea)
    {
        $this->summaryAlinea = $summaryAlinea;

        return $this;
    }

    /**
     * Get summaryAlinea
     *
     * @return string
     */
    public function getSummaryAlinea()
    {
        return $this->summaryAlinea;
    }

    /**
     * Set summaryUser
     *
     * @param string $summaryUser
     *
     * @return CustomerSummary
     */
    public function setSummaryUser($summaryUser)
    {
        $this->summaryUser = $summaryUser;

        return $this;
    }

    /**
     * Get summaryUser
     *
     * @return string
     */
    public function getSummaryUser()
    {
        return $this->summaryUser;
    }

    /**
     * Set summaryDateAlt
     *
     * @param \DateTime $summaryDateAlt
     *
     * @return CustomerSummary
     */
    public function setSummaryDateAlt($summaryDateAlt)
    {
        $this->summaryDateAlt = $summaryDateAlt;

        return $this;
    }

    /**
     * Get summaryDateAlt
     *
     * @return \DateTime
     */
    public function getSummaryDateAlt()
    {
        return $this->summaryDateAlt;
    }
}
