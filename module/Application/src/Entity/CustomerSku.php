<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerSku
 *
 * @ORM\Table(name="customer_sku", indexes={@ORM\Index(name="index_sku_change", columns={"last_change_time", "customer_key"}), @ORM\Index(name="index_sku_customer_key", columns={"customer_key"})})
 * @ORM\Entity
 */
class CustomerSku
{
    /**
     * @var string
     *
     * @ORM\Column(name="customer_sku_id", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $customerSkuId;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_sku_type_key", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $customerSkuTypeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_key", type="bigint", nullable=false)
     */
    private $customerKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_sku_status", type="boolean", nullable=true)
     */
    private $customerSkuStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_sku_limit", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $customerSkuLimit;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_sku_amount_left", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $customerSkuAmountLeft;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_sku_points", type="bigint", nullable=true)
     */
    private $customerSkuPoints;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_sku_password", type="string", length=80, nullable=true)
     */
    private $customerSkuPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_sku_password_md5", type="string", length=80, nullable=true)
     */
    private $customerSkuPasswordMd5;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=false)
     */
    private $lastChangeTime;



    /**
     * Set customerSkuId
     *
     * @param string $customerSkuId
     *
     * @return CustomerSku
     */
    public function setCustomerSkuId($customerSkuId)
    {
        $this->customerSkuId = $customerSkuId;

        return $this;
    }

    /**
     * Get customerSkuId
     *
     * @return string
     */
    public function getCustomerSkuId()
    {
        return $this->customerSkuId;
    }

    /**
     * Set customerSkuTypeKey
     *
     * @param integer $customerSkuTypeKey
     *
     * @return CustomerSku
     */
    public function setCustomerSkuTypeKey($customerSkuTypeKey)
    {
        $this->customerSkuTypeKey = $customerSkuTypeKey;

        return $this;
    }

    /**
     * Get customerSkuTypeKey
     *
     * @return integer
     */
    public function getCustomerSkuTypeKey()
    {
        return $this->customerSkuTypeKey;
    }

    /**
     * Set customerKey
     *
     * @param integer $customerKey
     *
     * @return CustomerSku
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
     * Set customerSkuStatus
     *
     * @param boolean $customerSkuStatus
     *
     * @return CustomerSku
     */
    public function setCustomerSkuStatus($customerSkuStatus)
    {
        $this->customerSkuStatus = $customerSkuStatus;

        return $this;
    }

    /**
     * Get customerSkuStatus
     *
     * @return boolean
     */
    public function getCustomerSkuStatus()
    {
        return $this->customerSkuStatus;
    }

    /**
     * Set customerSkuLimit
     *
     * @param string $customerSkuLimit
     *
     * @return CustomerSku
     */
    public function setCustomerSkuLimit($customerSkuLimit)
    {
        $this->customerSkuLimit = $customerSkuLimit;

        return $this;
    }

    /**
     * Get customerSkuLimit
     *
     * @return string
     */
    public function getCustomerSkuLimit()
    {
        return $this->customerSkuLimit;
    }

    /**
     * Set customerSkuAmountLeft
     *
     * @param string $customerSkuAmountLeft
     *
     * @return CustomerSku
     */
    public function setCustomerSkuAmountLeft($customerSkuAmountLeft)
    {
        $this->customerSkuAmountLeft = $customerSkuAmountLeft;

        return $this;
    }

    /**
     * Get customerSkuAmountLeft
     *
     * @return string
     */
    public function getCustomerSkuAmountLeft()
    {
        return $this->customerSkuAmountLeft;
    }

    /**
     * Set customerSkuPoints
     *
     * @param integer $customerSkuPoints
     *
     * @return CustomerSku
     */
    public function setCustomerSkuPoints($customerSkuPoints)
    {
        $this->customerSkuPoints = $customerSkuPoints;

        return $this;
    }

    /**
     * Get customerSkuPoints
     *
     * @return integer
     */
    public function getCustomerSkuPoints()
    {
        return $this->customerSkuPoints;
    }

    /**
     * Set customerSkuPassword
     *
     * @param string $customerSkuPassword
     *
     * @return CustomerSku
     */
    public function setCustomerSkuPassword($customerSkuPassword)
    {
        $this->customerSkuPassword = $customerSkuPassword;

        return $this;
    }

    /**
     * Get customerSkuPassword
     *
     * @return string
     */
    public function getCustomerSkuPassword()
    {
        return $this->customerSkuPassword;
    }

    /**
     * Set customerSkuPasswordMd5
     *
     * @param string $customerSkuPasswordMd5
     *
     * @return CustomerSku
     */
    public function setCustomerSkuPasswordMd5($customerSkuPasswordMd5)
    {
        $this->customerSkuPasswordMd5 = $customerSkuPasswordMd5;

        return $this;
    }

    /**
     * Get customerSkuPasswordMd5
     *
     * @return string
     */
    public function getCustomerSkuPasswordMd5()
    {
        return $this->customerSkuPasswordMd5;
    }

    /**
     * Set lastChangeTime
     *
     * @param \DateTime $lastChangeTime
     *
     * @return CustomerSku
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
