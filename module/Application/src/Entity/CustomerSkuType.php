<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerSkuType
 *
 * @ORM\Table(name="customer_sku_type")
 * @ORM\Entity
 */
class CustomerSkuType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="customer_sku_type_key", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $customerSkuTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_sku_type_name", type="string", length=20, nullable=true)
     */
    private $customerSkuTypeName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_sku_type_send", type="boolean", nullable=true)
     */
    private $customerSkuTypeSend;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_sku_type_flag_1", type="boolean", nullable=true)
     */
    private $customerSkuTypeFlag1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_sku_type_flag_2", type="boolean", nullable=true)
     */
    private $customerSkuTypeFlag2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_sku_type_flag_3", type="boolean", nullable=true)
     */
    private $customerSkuTypeFlag3;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_sku_type_flag_4", type="boolean", nullable=true)
     */
    private $customerSkuTypeFlag4;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_sku_type_flag_5", type="boolean", nullable=true)
     */
    private $customerSkuTypeFlag5;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_sku_type_flag_6", type="boolean", nullable=true)
     */
    private $customerSkuTypeFlag6;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_sku_type_flag_7", type="boolean", nullable=true)
     */
    private $customerSkuTypeFlag7;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_sku_type_flag_8", type="boolean", nullable=true)
     */
    private $customerSkuTypeFlag8;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;



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
     * Set customerSkuTypeName
     *
     * @param string $customerSkuTypeName
     *
     * @return CustomerSkuType
     */
    public function setCustomerSkuTypeName($customerSkuTypeName)
    {
        $this->customerSkuTypeName = $customerSkuTypeName;

        return $this;
    }

    /**
     * Get customerSkuTypeName
     *
     * @return string
     */
    public function getCustomerSkuTypeName()
    {
        return $this->customerSkuTypeName;
    }

    /**
     * Set customerSkuTypeSend
     *
     * @param boolean $customerSkuTypeSend
     *
     * @return CustomerSkuType
     */
    public function setCustomerSkuTypeSend($customerSkuTypeSend)
    {
        $this->customerSkuTypeSend = $customerSkuTypeSend;

        return $this;
    }

    /**
     * Get customerSkuTypeSend
     *
     * @return boolean
     */
    public function getCustomerSkuTypeSend()
    {
        return $this->customerSkuTypeSend;
    }

    /**
     * Set customerSkuTypeFlag1
     *
     * @param boolean $customerSkuTypeFlag1
     *
     * @return CustomerSkuType
     */
    public function setCustomerSkuTypeFlag1($customerSkuTypeFlag1)
    {
        $this->customerSkuTypeFlag1 = $customerSkuTypeFlag1;

        return $this;
    }

    /**
     * Get customerSkuTypeFlag1
     *
     * @return boolean
     */
    public function getCustomerSkuTypeFlag1()
    {
        return $this->customerSkuTypeFlag1;
    }

    /**
     * Set customerSkuTypeFlag2
     *
     * @param boolean $customerSkuTypeFlag2
     *
     * @return CustomerSkuType
     */
    public function setCustomerSkuTypeFlag2($customerSkuTypeFlag2)
    {
        $this->customerSkuTypeFlag2 = $customerSkuTypeFlag2;

        return $this;
    }

    /**
     * Get customerSkuTypeFlag2
     *
     * @return boolean
     */
    public function getCustomerSkuTypeFlag2()
    {
        return $this->customerSkuTypeFlag2;
    }

    /**
     * Set customerSkuTypeFlag3
     *
     * @param boolean $customerSkuTypeFlag3
     *
     * @return CustomerSkuType
     */
    public function setCustomerSkuTypeFlag3($customerSkuTypeFlag3)
    {
        $this->customerSkuTypeFlag3 = $customerSkuTypeFlag3;

        return $this;
    }

    /**
     * Get customerSkuTypeFlag3
     *
     * @return boolean
     */
    public function getCustomerSkuTypeFlag3()
    {
        return $this->customerSkuTypeFlag3;
    }

    /**
     * Set customerSkuTypeFlag4
     *
     * @param boolean $customerSkuTypeFlag4
     *
     * @return CustomerSkuType
     */
    public function setCustomerSkuTypeFlag4($customerSkuTypeFlag4)
    {
        $this->customerSkuTypeFlag4 = $customerSkuTypeFlag4;

        return $this;
    }

    /**
     * Get customerSkuTypeFlag4
     *
     * @return boolean
     */
    public function getCustomerSkuTypeFlag4()
    {
        return $this->customerSkuTypeFlag4;
    }

    /**
     * Set customerSkuTypeFlag5
     *
     * @param boolean $customerSkuTypeFlag5
     *
     * @return CustomerSkuType
     */
    public function setCustomerSkuTypeFlag5($customerSkuTypeFlag5)
    {
        $this->customerSkuTypeFlag5 = $customerSkuTypeFlag5;

        return $this;
    }

    /**
     * Get customerSkuTypeFlag5
     *
     * @return boolean
     */
    public function getCustomerSkuTypeFlag5()
    {
        return $this->customerSkuTypeFlag5;
    }

    /**
     * Set customerSkuTypeFlag6
     *
     * @param boolean $customerSkuTypeFlag6
     *
     * @return CustomerSkuType
     */
    public function setCustomerSkuTypeFlag6($customerSkuTypeFlag6)
    {
        $this->customerSkuTypeFlag6 = $customerSkuTypeFlag6;

        return $this;
    }

    /**
     * Get customerSkuTypeFlag6
     *
     * @return boolean
     */
    public function getCustomerSkuTypeFlag6()
    {
        return $this->customerSkuTypeFlag6;
    }

    /**
     * Set customerSkuTypeFlag7
     *
     * @param boolean $customerSkuTypeFlag7
     *
     * @return CustomerSkuType
     */
    public function setCustomerSkuTypeFlag7($customerSkuTypeFlag7)
    {
        $this->customerSkuTypeFlag7 = $customerSkuTypeFlag7;

        return $this;
    }

    /**
     * Get customerSkuTypeFlag7
     *
     * @return boolean
     */
    public function getCustomerSkuTypeFlag7()
    {
        return $this->customerSkuTypeFlag7;
    }

    /**
     * Set customerSkuTypeFlag8
     *
     * @param boolean $customerSkuTypeFlag8
     *
     * @return CustomerSkuType
     */
    public function setCustomerSkuTypeFlag8($customerSkuTypeFlag8)
    {
        $this->customerSkuTypeFlag8 = $customerSkuTypeFlag8;

        return $this;
    }

    /**
     * Get customerSkuTypeFlag8
     *
     * @return boolean
     */
    public function getCustomerSkuTypeFlag8()
    {
        return $this->customerSkuTypeFlag8;
    }

    /**
     * Set lastChangeTime
     *
     * @param \DateTime $lastChangeTime
     *
     * @return CustomerSkuType
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
