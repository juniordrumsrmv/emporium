<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 *
 * @ORM\Table(name="customer", indexes={@ORM\Index(name="index_name", columns={"customer_name"}), @ORM\Index(name="index_store", columns={"store_key"}), @ORM\Index(name="index_customer_last", columns={"customer_last_change_time", "store_key"})})
 * @ORM\Entity
 */
class Customer
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
     * @ORM\Column(name="customer_id_type", type="smallint", nullable=true)
     */
    private $customerIdType;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_id", type="string", length=25, nullable=true)
     */
    private $customerId;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_id_alt", type="string", length=25, nullable=true)
     */
    private $customerIdAlt;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_name", type="string", length=60, nullable=true)
     */
    private $customerName;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_name2", type="string", length=60, nullable=true)
     */
    private $customerName2;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_address", type="string", length=60, nullable=true)
     */
    private $customerAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_comple", type="string", length=20, nullable=true)
     */
    private $customerComple;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_neig", type="string", length=20, nullable=true)
     */
    private $customerNeig;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_city", type="string", length=20, nullable=true)
     */
    private $customerCity;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_state", type="string", length=20, nullable=true)
     */
    private $customerState;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_zip", type="string", length=12, nullable=true)
     */
    private $customerZip;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_email", type="string", length=50, nullable=true)
     */
    private $customerEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_phone1", type="string", length=15, nullable=true)
     */
    private $customerPhone1;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_phone1_rec", type="string", length=15, nullable=true)
     */
    private $customerPhone1Rec;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_phone2", type="string", length=15, nullable=true)
     */
    private $customerPhone2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="customer_date_inc", type="date", nullable=false)
     */
    private $customerDateInc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="customer_date_alt", type="date", nullable=false)
     */
    private $customerDateAlt;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_type", type="smallint", nullable=true)
     */
    private $customerType;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_code", type="bigint", nullable=true)
     */
    private $customerCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="customer_last_change_time", type="datetime", nullable=true)
     */
    private $customerLastChangeTime;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_ie", type="string", length=15, nullable=true)
     */
    private $customerIe;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_adr_type", type="boolean", nullable=true)
     */
    private $customerAdrType;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_adr_time", type="string", length=15, nullable=true)
     */
    private $customerAdrTime;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_country_code", type="string", length=10, nullable=true)
     */
    private $customerCountryCode;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_state_code", type="string", length=10, nullable=true)
     */
    private $customerStateCode;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_city_code", type="string", length=16, nullable=true)
     */
    private $customerCityCode;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_job_id", type="string", length=25, nullable=true)
     */
    private $customerJobId;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_job_name", type="string", length=60, nullable=true)
     */
    private $customerJobName;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_job_address", type="string", length=60, nullable=true)
     */
    private $customerJobAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_job_comple", type="string", length=20, nullable=true)
     */
    private $customerJobComple;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_job_neig", type="string", length=20, nullable=true)
     */
    private $customerJobNeig;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_job_city", type="string", length=20, nullable=true)
     */
    private $customerJobCity;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_job_state", type="string", length=20, nullable=true)
     */
    private $customerJobState;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_job_zip", type="string", length=12, nullable=true)
     */
    private $customerJobZip;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_job_phone", type="string", length=15, nullable=true)
     */
    private $customerJobPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_job_title", type="string", length=30, nullable=true)
     */
    private $customerJobTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_job_revenue", type="string", length=15, nullable=true)
     */
    private $customerJobRevenue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="customer_job_date", type="date", nullable=true)
     */
    private $customerJobDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_job_type", type="boolean", nullable=true)
     */
    private $customerJobType;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_job_old_name", type="string", length=60, nullable=true)
     */
    private $customerJobOldName;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_job_old_phone", type="string", length=15, nullable=true)
     */
    private $customerJobOldPhone;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="customer_job_old_in", type="date", nullable=true)
     */
    private $customerJobOldIn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="customer_job_old_out", type="date", nullable=true)
     */
    private $customerJobOldOut;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_ref_bank1", type="smallint", nullable=true)
     */
    private $customerRefBank1;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_ref_branch1", type="smallint", nullable=true)
     */
    private $customerRefBranch1;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_ref_account1", type="integer", nullable=true)
     */
    private $customerRefAccount1;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_ref_bank2", type="smallint", nullable=true)
     */
    private $customerRefBank2;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_ref_branch2", type="smallint", nullable=true)
     */
    private $customerRefBranch2;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_ref_account2", type="integer", nullable=true)
     */
    private $customerRefAccount2;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_ref_name1", type="string", length=60, nullable=true)
     */
    private $customerRefName1;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_ref_phone1", type="string", length=15, nullable=true)
     */
    private $customerRefPhone1;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_ref_comple1", type="string", length=80, nullable=true)
     */
    private $customerRefComple1;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_ref_name2", type="string", length=60, nullable=true)
     */
    private $customerRefName2;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_ref_phone2", type="string", length=15, nullable=true)
     */
    private $customerRefPhone2;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_ref_comple2", type="string", length=80, nullable=true)
     */
    private $customerRefComple2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_ref_card1", type="boolean", nullable=true)
     */
    private $customerRefCard1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_ref_card2", type="boolean", nullable=true)
     */
    private $customerRefCard2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_ref_card3", type="boolean", nullable=true)
     */
    private $customerRefCard3;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_ref_card4", type="boolean", nullable=true)
     */
    private $customerRefCard4;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_ref_card5", type="boolean", nullable=true)
     */
    private $customerRefCard5;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="customer_birthday", type="date", nullable=true)
     */
    private $customerBirthday;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_gender", type="boolean", nullable=true)
     */
    private $customerGender;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_nacionality", type="boolean", nullable=true)
     */
    private $customerNacionality;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_education_level", type="boolean", nullable=true)
     */
    private $customerEducationLevel;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_civil_status", type="boolean", nullable=true)
     */
    private $customerCivilStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_mothers_name", type="string", length=40, nullable=true)
     */
    private $customerMothersName;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_fathers_name", type="string", length=40, nullable=true)
     */
    private $customerFathersName;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_spouse_id", type="string", length=25, nullable=true)
     */
    private $customerSpouseId;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_spouse_name", type="string", length=60, nullable=true)
     */
    private $customerSpouseName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="customer_spouse_birthday", type="date", nullable=true)
     */
    private $customerSpouseBirthday;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_spouse_job_name", type="string", length=60, nullable=true)
     */
    private $customerSpouseJobName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_spouse_job_time", type="boolean", nullable=true)
     */
    private $customerSpouseJobTime;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_spouse_job_phone", type="string", length=15, nullable=true)
     */
    private $customerSpouseJobPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_spouse_job_title", type="string", length=15, nullable=true)
     */
    private $customerSpouseJobTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_spouse_job_revenue", type="string", length=15, nullable=true)
     */
    private $customerSpouseJobRevenue;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_dependents", type="smallint", nullable=true)
     */
    private $customerDependents;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_dep_name1", type="string", length=60, nullable=true)
     */
    private $customerDepName1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="customer_dep_birthday1", type="date", nullable=true)
     */
    private $customerDepBirthday1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_dep_gender1", type="boolean", nullable=true)
     */
    private $customerDepGender1;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_dep_name2", type="string", length=60, nullable=true)
     */
    private $customerDepName2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="customer_dep_birthday2", type="date", nullable=true)
     */
    private $customerDepBirthday2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_dep_gender2", type="boolean", nullable=true)
     */
    private $customerDepGender2;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_dep_name3", type="string", length=60, nullable=true)
     */
    private $customerDepName3;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="customer_dep_birthday3", type="date", nullable=true)
     */
    private $customerDepBirthday3;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_dep_gender3", type="boolean", nullable=true)
     */
    private $customerDepGender3;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_vehicles", type="string", length=80, nullable=true)
     */
    private $customerVehicles;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_properties", type="string", length=80, nullable=true)
     */
    private $customerProperties;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_password", type="string", length=80, nullable=true)
     */
    private $customerPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_password_md5", type="string", length=80, nullable=true)
     */
    private $customerPasswordMd5;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=true)
     */
    private $storeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="biometrics", type="blob", length=65535, nullable=true)
     */
    private $biometrics;



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
     * Set customerIdType
     *
     * @param integer $customerIdType
     *
     * @return Customer
     */
    public function setCustomerIdType($customerIdType)
    {
        $this->customerIdType = $customerIdType;

        return $this;
    }

    /**
     * Get customerIdType
     *
     * @return integer
     */
    public function getCustomerIdType()
    {
        return $this->customerIdType;
    }

    /**
     * Set customerId
     *
     * @param string $customerId
     *
     * @return Customer
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
     * Set customerIdAlt
     *
     * @param string $customerIdAlt
     *
     * @return Customer
     */
    public function setCustomerIdAlt($customerIdAlt)
    {
        $this->customerIdAlt = $customerIdAlt;

        return $this;
    }

    /**
     * Get customerIdAlt
     *
     * @return string
     */
    public function getCustomerIdAlt()
    {
        return $this->customerIdAlt;
    }

    /**
     * Set customerName
     *
     * @param string $customerName
     *
     * @return Customer
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;

        return $this;
    }

    /**
     * Get customerName
     *
     * @return string
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * Set customerName2
     *
     * @param string $customerName2
     *
     * @return Customer
     */
    public function setCustomerName2($customerName2)
    {
        $this->customerName2 = $customerName2;

        return $this;
    }

    /**
     * Get customerName2
     *
     * @return string
     */
    public function getCustomerName2()
    {
        return $this->customerName2;
    }

    /**
     * Set customerAddress
     *
     * @param string $customerAddress
     *
     * @return Customer
     */
    public function setCustomerAddress($customerAddress)
    {
        $this->customerAddress = $customerAddress;

        return $this;
    }

    /**
     * Get customerAddress
     *
     * @return string
     */
    public function getCustomerAddress()
    {
        return $this->customerAddress;
    }

    /**
     * Set customerComple
     *
     * @param string $customerComple
     *
     * @return Customer
     */
    public function setCustomerComple($customerComple)
    {
        $this->customerComple = $customerComple;

        return $this;
    }

    /**
     * Get customerComple
     *
     * @return string
     */
    public function getCustomerComple()
    {
        return $this->customerComple;
    }

    /**
     * Set customerNeig
     *
     * @param string $customerNeig
     *
     * @return Customer
     */
    public function setCustomerNeig($customerNeig)
    {
        $this->customerNeig = $customerNeig;

        return $this;
    }

    /**
     * Get customerNeig
     *
     * @return string
     */
    public function getCustomerNeig()
    {
        return $this->customerNeig;
    }

    /**
     * Set customerCity
     *
     * @param string $customerCity
     *
     * @return Customer
     */
    public function setCustomerCity($customerCity)
    {
        $this->customerCity = $customerCity;

        return $this;
    }

    /**
     * Get customerCity
     *
     * @return string
     */
    public function getCustomerCity()
    {
        return $this->customerCity;
    }

    /**
     * Set customerState
     *
     * @param string $customerState
     *
     * @return Customer
     */
    public function setCustomerState($customerState)
    {
        $this->customerState = $customerState;

        return $this;
    }

    /**
     * Get customerState
     *
     * @return string
     */
    public function getCustomerState()
    {
        return $this->customerState;
    }

    /**
     * Set customerZip
     *
     * @param string $customerZip
     *
     * @return Customer
     */
    public function setCustomerZip($customerZip)
    {
        $this->customerZip = $customerZip;

        return $this;
    }

    /**
     * Get customerZip
     *
     * @return string
     */
    public function getCustomerZip()
    {
        return $this->customerZip;
    }

    /**
     * Set customerEmail
     *
     * @param string $customerEmail
     *
     * @return Customer
     */
    public function setCustomerEmail($customerEmail)
    {
        $this->customerEmail = $customerEmail;

        return $this;
    }

    /**
     * Get customerEmail
     *
     * @return string
     */
    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }

    /**
     * Set customerPhone1
     *
     * @param string $customerPhone1
     *
     * @return Customer
     */
    public function setCustomerPhone1($customerPhone1)
    {
        $this->customerPhone1 = $customerPhone1;

        return $this;
    }

    /**
     * Get customerPhone1
     *
     * @return string
     */
    public function getCustomerPhone1()
    {
        return $this->customerPhone1;
    }

    /**
     * Set customerPhone1Rec
     *
     * @param string $customerPhone1Rec
     *
     * @return Customer
     */
    public function setCustomerPhone1Rec($customerPhone1Rec)
    {
        $this->customerPhone1Rec = $customerPhone1Rec;

        return $this;
    }

    /**
     * Get customerPhone1Rec
     *
     * @return string
     */
    public function getCustomerPhone1Rec()
    {
        return $this->customerPhone1Rec;
    }

    /**
     * Set customerPhone2
     *
     * @param string $customerPhone2
     *
     * @return Customer
     */
    public function setCustomerPhone2($customerPhone2)
    {
        $this->customerPhone2 = $customerPhone2;

        return $this;
    }

    /**
     * Get customerPhone2
     *
     * @return string
     */
    public function getCustomerPhone2()
    {
        return $this->customerPhone2;
    }

    /**
     * Set customerDateInc
     *
     * @param \DateTime $customerDateInc
     *
     * @return Customer
     */
    public function setCustomerDateInc($customerDateInc)
    {
        $this->customerDateInc = $customerDateInc;

        return $this;
    }

    /**
     * Get customerDateInc
     *
     * @return \DateTime
     */
    public function getCustomerDateInc()
    {
        return $this->customerDateInc;
    }

    /**
     * Set customerDateAlt
     *
     * @param \DateTime $customerDateAlt
     *
     * @return Customer
     */
    public function setCustomerDateAlt($customerDateAlt)
    {
        $this->customerDateAlt = $customerDateAlt;

        return $this;
    }

    /**
     * Get customerDateAlt
     *
     * @return \DateTime
     */
    public function getCustomerDateAlt()
    {
        return $this->customerDateAlt;
    }

    /**
     * Set customerType
     *
     * @param integer $customerType
     *
     * @return Customer
     */
    public function setCustomerType($customerType)
    {
        $this->customerType = $customerType;

        return $this;
    }

    /**
     * Get customerType
     *
     * @return integer
     */
    public function getCustomerType()
    {
        return $this->customerType;
    }

    /**
     * Set customerCode
     *
     * @param integer $customerCode
     *
     * @return Customer
     */
    public function setCustomerCode($customerCode)
    {
        $this->customerCode = $customerCode;

        return $this;
    }

    /**
     * Get customerCode
     *
     * @return integer
     */
    public function getCustomerCode()
    {
        return $this->customerCode;
    }

    /**
     * Set customerLastChangeTime
     *
     * @param \DateTime $customerLastChangeTime
     *
     * @return Customer
     */
    public function setCustomerLastChangeTime($customerLastChangeTime)
    {
        $this->customerLastChangeTime = $customerLastChangeTime;

        return $this;
    }

    /**
     * Get customerLastChangeTime
     *
     * @return \DateTime
     */
    public function getCustomerLastChangeTime()
    {
        return $this->customerLastChangeTime;
    }

    /**
     * Set customerIe
     *
     * @param string $customerIe
     *
     * @return Customer
     */
    public function setCustomerIe($customerIe)
    {
        $this->customerIe = $customerIe;

        return $this;
    }

    /**
     * Get customerIe
     *
     * @return string
     */
    public function getCustomerIe()
    {
        return $this->customerIe;
    }

    /**
     * Set customerAdrType
     *
     * @param boolean $customerAdrType
     *
     * @return Customer
     */
    public function setCustomerAdrType($customerAdrType)
    {
        $this->customerAdrType = $customerAdrType;

        return $this;
    }

    /**
     * Get customerAdrType
     *
     * @return boolean
     */
    public function getCustomerAdrType()
    {
        return $this->customerAdrType;
    }

    /**
     * Set customerAdrTime
     *
     * @param string $customerAdrTime
     *
     * @return Customer
     */
    public function setCustomerAdrTime($customerAdrTime)
    {
        $this->customerAdrTime = $customerAdrTime;

        return $this;
    }

    /**
     * Get customerAdrTime
     *
     * @return string
     */
    public function getCustomerAdrTime()
    {
        return $this->customerAdrTime;
    }

    /**
     * Set customerCountryCode
     *
     * @param string $customerCountryCode
     *
     * @return Customer
     */
    public function setCustomerCountryCode($customerCountryCode)
    {
        $this->customerCountryCode = $customerCountryCode;

        return $this;
    }

    /**
     * Get customerCountryCode
     *
     * @return string
     */
    public function getCustomerCountryCode()
    {
        return $this->customerCountryCode;
    }

    /**
     * Set customerStateCode
     *
     * @param string $customerStateCode
     *
     * @return Customer
     */
    public function setCustomerStateCode($customerStateCode)
    {
        $this->customerStateCode = $customerStateCode;

        return $this;
    }

    /**
     * Get customerStateCode
     *
     * @return string
     */
    public function getCustomerStateCode()
    {
        return $this->customerStateCode;
    }

    /**
     * Set customerCityCode
     *
     * @param string $customerCityCode
     *
     * @return Customer
     */
    public function setCustomerCityCode($customerCityCode)
    {
        $this->customerCityCode = $customerCityCode;

        return $this;
    }

    /**
     * Get customerCityCode
     *
     * @return string
     */
    public function getCustomerCityCode()
    {
        return $this->customerCityCode;
    }

    /**
     * Set customerJobId
     *
     * @param string $customerJobId
     *
     * @return Customer
     */
    public function setCustomerJobId($customerJobId)
    {
        $this->customerJobId = $customerJobId;

        return $this;
    }

    /**
     * Get customerJobId
     *
     * @return string
     */
    public function getCustomerJobId()
    {
        return $this->customerJobId;
    }

    /**
     * Set customerJobName
     *
     * @param string $customerJobName
     *
     * @return Customer
     */
    public function setCustomerJobName($customerJobName)
    {
        $this->customerJobName = $customerJobName;

        return $this;
    }

    /**
     * Get customerJobName
     *
     * @return string
     */
    public function getCustomerJobName()
    {
        return $this->customerJobName;
    }

    /**
     * Set customerJobAddress
     *
     * @param string $customerJobAddress
     *
     * @return Customer
     */
    public function setCustomerJobAddress($customerJobAddress)
    {
        $this->customerJobAddress = $customerJobAddress;

        return $this;
    }

    /**
     * Get customerJobAddress
     *
     * @return string
     */
    public function getCustomerJobAddress()
    {
        return $this->customerJobAddress;
    }

    /**
     * Set customerJobComple
     *
     * @param string $customerJobComple
     *
     * @return Customer
     */
    public function setCustomerJobComple($customerJobComple)
    {
        $this->customerJobComple = $customerJobComple;

        return $this;
    }

    /**
     * Get customerJobComple
     *
     * @return string
     */
    public function getCustomerJobComple()
    {
        return $this->customerJobComple;
    }

    /**
     * Set customerJobNeig
     *
     * @param string $customerJobNeig
     *
     * @return Customer
     */
    public function setCustomerJobNeig($customerJobNeig)
    {
        $this->customerJobNeig = $customerJobNeig;

        return $this;
    }

    /**
     * Get customerJobNeig
     *
     * @return string
     */
    public function getCustomerJobNeig()
    {
        return $this->customerJobNeig;
    }

    /**
     * Set customerJobCity
     *
     * @param string $customerJobCity
     *
     * @return Customer
     */
    public function setCustomerJobCity($customerJobCity)
    {
        $this->customerJobCity = $customerJobCity;

        return $this;
    }

    /**
     * Get customerJobCity
     *
     * @return string
     */
    public function getCustomerJobCity()
    {
        return $this->customerJobCity;
    }

    /**
     * Set customerJobState
     *
     * @param string $customerJobState
     *
     * @return Customer
     */
    public function setCustomerJobState($customerJobState)
    {
        $this->customerJobState = $customerJobState;

        return $this;
    }

    /**
     * Get customerJobState
     *
     * @return string
     */
    public function getCustomerJobState()
    {
        return $this->customerJobState;
    }

    /**
     * Set customerJobZip
     *
     * @param string $customerJobZip
     *
     * @return Customer
     */
    public function setCustomerJobZip($customerJobZip)
    {
        $this->customerJobZip = $customerJobZip;

        return $this;
    }

    /**
     * Get customerJobZip
     *
     * @return string
     */
    public function getCustomerJobZip()
    {
        return $this->customerJobZip;
    }

    /**
     * Set customerJobPhone
     *
     * @param string $customerJobPhone
     *
     * @return Customer
     */
    public function setCustomerJobPhone($customerJobPhone)
    {
        $this->customerJobPhone = $customerJobPhone;

        return $this;
    }

    /**
     * Get customerJobPhone
     *
     * @return string
     */
    public function getCustomerJobPhone()
    {
        return $this->customerJobPhone;
    }

    /**
     * Set customerJobTitle
     *
     * @param string $customerJobTitle
     *
     * @return Customer
     */
    public function setCustomerJobTitle($customerJobTitle)
    {
        $this->customerJobTitle = $customerJobTitle;

        return $this;
    }

    /**
     * Get customerJobTitle
     *
     * @return string
     */
    public function getCustomerJobTitle()
    {
        return $this->customerJobTitle;
    }

    /**
     * Set customerJobRevenue
     *
     * @param string $customerJobRevenue
     *
     * @return Customer
     */
    public function setCustomerJobRevenue($customerJobRevenue)
    {
        $this->customerJobRevenue = $customerJobRevenue;

        return $this;
    }

    /**
     * Get customerJobRevenue
     *
     * @return string
     */
    public function getCustomerJobRevenue()
    {
        return $this->customerJobRevenue;
    }

    /**
     * Set customerJobDate
     *
     * @param \DateTime $customerJobDate
     *
     * @return Customer
     */
    public function setCustomerJobDate($customerJobDate)
    {
        $this->customerJobDate = $customerJobDate;

        return $this;
    }

    /**
     * Get customerJobDate
     *
     * @return \DateTime
     */
    public function getCustomerJobDate()
    {
        return $this->customerJobDate;
    }

    /**
     * Set customerJobType
     *
     * @param boolean $customerJobType
     *
     * @return Customer
     */
    public function setCustomerJobType($customerJobType)
    {
        $this->customerJobType = $customerJobType;

        return $this;
    }

    /**
     * Get customerJobType
     *
     * @return boolean
     */
    public function getCustomerJobType()
    {
        return $this->customerJobType;
    }

    /**
     * Set customerJobOldName
     *
     * @param string $customerJobOldName
     *
     * @return Customer
     */
    public function setCustomerJobOldName($customerJobOldName)
    {
        $this->customerJobOldName = $customerJobOldName;

        return $this;
    }

    /**
     * Get customerJobOldName
     *
     * @return string
     */
    public function getCustomerJobOldName()
    {
        return $this->customerJobOldName;
    }

    /**
     * Set customerJobOldPhone
     *
     * @param string $customerJobOldPhone
     *
     * @return Customer
     */
    public function setCustomerJobOldPhone($customerJobOldPhone)
    {
        $this->customerJobOldPhone = $customerJobOldPhone;

        return $this;
    }

    /**
     * Get customerJobOldPhone
     *
     * @return string
     */
    public function getCustomerJobOldPhone()
    {
        return $this->customerJobOldPhone;
    }

    /**
     * Set customerJobOldIn
     *
     * @param \DateTime $customerJobOldIn
     *
     * @return Customer
     */
    public function setCustomerJobOldIn($customerJobOldIn)
    {
        $this->customerJobOldIn = $customerJobOldIn;

        return $this;
    }

    /**
     * Get customerJobOldIn
     *
     * @return \DateTime
     */
    public function getCustomerJobOldIn()
    {
        return $this->customerJobOldIn;
    }

    /**
     * Set customerJobOldOut
     *
     * @param \DateTime $customerJobOldOut
     *
     * @return Customer
     */
    public function setCustomerJobOldOut($customerJobOldOut)
    {
        $this->customerJobOldOut = $customerJobOldOut;

        return $this;
    }

    /**
     * Get customerJobOldOut
     *
     * @return \DateTime
     */
    public function getCustomerJobOldOut()
    {
        return $this->customerJobOldOut;
    }

    /**
     * Set customerRefBank1
     *
     * @param integer $customerRefBank1
     *
     * @return Customer
     */
    public function setCustomerRefBank1($customerRefBank1)
    {
        $this->customerRefBank1 = $customerRefBank1;

        return $this;
    }

    /**
     * Get customerRefBank1
     *
     * @return integer
     */
    public function getCustomerRefBank1()
    {
        return $this->customerRefBank1;
    }

    /**
     * Set customerRefBranch1
     *
     * @param integer $customerRefBranch1
     *
     * @return Customer
     */
    public function setCustomerRefBranch1($customerRefBranch1)
    {
        $this->customerRefBranch1 = $customerRefBranch1;

        return $this;
    }

    /**
     * Get customerRefBranch1
     *
     * @return integer
     */
    public function getCustomerRefBranch1()
    {
        return $this->customerRefBranch1;
    }

    /**
     * Set customerRefAccount1
     *
     * @param integer $customerRefAccount1
     *
     * @return Customer
     */
    public function setCustomerRefAccount1($customerRefAccount1)
    {
        $this->customerRefAccount1 = $customerRefAccount1;

        return $this;
    }

    /**
     * Get customerRefAccount1
     *
     * @return integer
     */
    public function getCustomerRefAccount1()
    {
        return $this->customerRefAccount1;
    }

    /**
     * Set customerRefBank2
     *
     * @param integer $customerRefBank2
     *
     * @return Customer
     */
    public function setCustomerRefBank2($customerRefBank2)
    {
        $this->customerRefBank2 = $customerRefBank2;

        return $this;
    }

    /**
     * Get customerRefBank2
     *
     * @return integer
     */
    public function getCustomerRefBank2()
    {
        return $this->customerRefBank2;
    }

    /**
     * Set customerRefBranch2
     *
     * @param integer $customerRefBranch2
     *
     * @return Customer
     */
    public function setCustomerRefBranch2($customerRefBranch2)
    {
        $this->customerRefBranch2 = $customerRefBranch2;

        return $this;
    }

    /**
     * Get customerRefBranch2
     *
     * @return integer
     */
    public function getCustomerRefBranch2()
    {
        return $this->customerRefBranch2;
    }

    /**
     * Set customerRefAccount2
     *
     * @param integer $customerRefAccount2
     *
     * @return Customer
     */
    public function setCustomerRefAccount2($customerRefAccount2)
    {
        $this->customerRefAccount2 = $customerRefAccount2;

        return $this;
    }

    /**
     * Get customerRefAccount2
     *
     * @return integer
     */
    public function getCustomerRefAccount2()
    {
        return $this->customerRefAccount2;
    }

    /**
     * Set customerRefName1
     *
     * @param string $customerRefName1
     *
     * @return Customer
     */
    public function setCustomerRefName1($customerRefName1)
    {
        $this->customerRefName1 = $customerRefName1;

        return $this;
    }

    /**
     * Get customerRefName1
     *
     * @return string
     */
    public function getCustomerRefName1()
    {
        return $this->customerRefName1;
    }

    /**
     * Set customerRefPhone1
     *
     * @param string $customerRefPhone1
     *
     * @return Customer
     */
    public function setCustomerRefPhone1($customerRefPhone1)
    {
        $this->customerRefPhone1 = $customerRefPhone1;

        return $this;
    }

    /**
     * Get customerRefPhone1
     *
     * @return string
     */
    public function getCustomerRefPhone1()
    {
        return $this->customerRefPhone1;
    }

    /**
     * Set customerRefComple1
     *
     * @param string $customerRefComple1
     *
     * @return Customer
     */
    public function setCustomerRefComple1($customerRefComple1)
    {
        $this->customerRefComple1 = $customerRefComple1;

        return $this;
    }

    /**
     * Get customerRefComple1
     *
     * @return string
     */
    public function getCustomerRefComple1()
    {
        return $this->customerRefComple1;
    }

    /**
     * Set customerRefName2
     *
     * @param string $customerRefName2
     *
     * @return Customer
     */
    public function setCustomerRefName2($customerRefName2)
    {
        $this->customerRefName2 = $customerRefName2;

        return $this;
    }

    /**
     * Get customerRefName2
     *
     * @return string
     */
    public function getCustomerRefName2()
    {
        return $this->customerRefName2;
    }

    /**
     * Set customerRefPhone2
     *
     * @param string $customerRefPhone2
     *
     * @return Customer
     */
    public function setCustomerRefPhone2($customerRefPhone2)
    {
        $this->customerRefPhone2 = $customerRefPhone2;

        return $this;
    }

    /**
     * Get customerRefPhone2
     *
     * @return string
     */
    public function getCustomerRefPhone2()
    {
        return $this->customerRefPhone2;
    }

    /**
     * Set customerRefComple2
     *
     * @param string $customerRefComple2
     *
     * @return Customer
     */
    public function setCustomerRefComple2($customerRefComple2)
    {
        $this->customerRefComple2 = $customerRefComple2;

        return $this;
    }

    /**
     * Get customerRefComple2
     *
     * @return string
     */
    public function getCustomerRefComple2()
    {
        return $this->customerRefComple2;
    }

    /**
     * Set customerRefCard1
     *
     * @param boolean $customerRefCard1
     *
     * @return Customer
     */
    public function setCustomerRefCard1($customerRefCard1)
    {
        $this->customerRefCard1 = $customerRefCard1;

        return $this;
    }

    /**
     * Get customerRefCard1
     *
     * @return boolean
     */
    public function getCustomerRefCard1()
    {
        return $this->customerRefCard1;
    }

    /**
     * Set customerRefCard2
     *
     * @param boolean $customerRefCard2
     *
     * @return Customer
     */
    public function setCustomerRefCard2($customerRefCard2)
    {
        $this->customerRefCard2 = $customerRefCard2;

        return $this;
    }

    /**
     * Get customerRefCard2
     *
     * @return boolean
     */
    public function getCustomerRefCard2()
    {
        return $this->customerRefCard2;
    }

    /**
     * Set customerRefCard3
     *
     * @param boolean $customerRefCard3
     *
     * @return Customer
     */
    public function setCustomerRefCard3($customerRefCard3)
    {
        $this->customerRefCard3 = $customerRefCard3;

        return $this;
    }

    /**
     * Get customerRefCard3
     *
     * @return boolean
     */
    public function getCustomerRefCard3()
    {
        return $this->customerRefCard3;
    }

    /**
     * Set customerRefCard4
     *
     * @param boolean $customerRefCard4
     *
     * @return Customer
     */
    public function setCustomerRefCard4($customerRefCard4)
    {
        $this->customerRefCard4 = $customerRefCard4;

        return $this;
    }

    /**
     * Get customerRefCard4
     *
     * @return boolean
     */
    public function getCustomerRefCard4()
    {
        return $this->customerRefCard4;
    }

    /**
     * Set customerRefCard5
     *
     * @param boolean $customerRefCard5
     *
     * @return Customer
     */
    public function setCustomerRefCard5($customerRefCard5)
    {
        $this->customerRefCard5 = $customerRefCard5;

        return $this;
    }

    /**
     * Get customerRefCard5
     *
     * @return boolean
     */
    public function getCustomerRefCard5()
    {
        return $this->customerRefCard5;
    }

    /**
     * Set customerBirthday
     *
     * @param \DateTime $customerBirthday
     *
     * @return Customer
     */
    public function setCustomerBirthday($customerBirthday)
    {
        $this->customerBirthday = $customerBirthday;

        return $this;
    }

    /**
     * Get customerBirthday
     *
     * @return \DateTime
     */
    public function getCustomerBirthday()
    {
        return $this->customerBirthday;
    }

    /**
     * Set customerGender
     *
     * @param boolean $customerGender
     *
     * @return Customer
     */
    public function setCustomerGender($customerGender)
    {
        $this->customerGender = $customerGender;

        return $this;
    }

    /**
     * Get customerGender
     *
     * @return boolean
     */
    public function getCustomerGender()
    {
        return $this->customerGender;
    }

    /**
     * Set customerNacionality
     *
     * @param boolean $customerNacionality
     *
     * @return Customer
     */
    public function setCustomerNacionality($customerNacionality)
    {
        $this->customerNacionality = $customerNacionality;

        return $this;
    }

    /**
     * Get customerNacionality
     *
     * @return boolean
     */
    public function getCustomerNacionality()
    {
        return $this->customerNacionality;
    }

    /**
     * Set customerEducationLevel
     *
     * @param boolean $customerEducationLevel
     *
     * @return Customer
     */
    public function setCustomerEducationLevel($customerEducationLevel)
    {
        $this->customerEducationLevel = $customerEducationLevel;

        return $this;
    }

    /**
     * Get customerEducationLevel
     *
     * @return boolean
     */
    public function getCustomerEducationLevel()
    {
        return $this->customerEducationLevel;
    }

    /**
     * Set customerCivilStatus
     *
     * @param boolean $customerCivilStatus
     *
     * @return Customer
     */
    public function setCustomerCivilStatus($customerCivilStatus)
    {
        $this->customerCivilStatus = $customerCivilStatus;

        return $this;
    }

    /**
     * Get customerCivilStatus
     *
     * @return boolean
     */
    public function getCustomerCivilStatus()
    {
        return $this->customerCivilStatus;
    }

    /**
     * Set customerMothersName
     *
     * @param string $customerMothersName
     *
     * @return Customer
     */
    public function setCustomerMothersName($customerMothersName)
    {
        $this->customerMothersName = $customerMothersName;

        return $this;
    }

    /**
     * Get customerMothersName
     *
     * @return string
     */
    public function getCustomerMothersName()
    {
        return $this->customerMothersName;
    }

    /**
     * Set customerFathersName
     *
     * @param string $customerFathersName
     *
     * @return Customer
     */
    public function setCustomerFathersName($customerFathersName)
    {
        $this->customerFathersName = $customerFathersName;

        return $this;
    }

    /**
     * Get customerFathersName
     *
     * @return string
     */
    public function getCustomerFathersName()
    {
        return $this->customerFathersName;
    }

    /**
     * Set customerSpouseId
     *
     * @param string $customerSpouseId
     *
     * @return Customer
     */
    public function setCustomerSpouseId($customerSpouseId)
    {
        $this->customerSpouseId = $customerSpouseId;

        return $this;
    }

    /**
     * Get customerSpouseId
     *
     * @return string
     */
    public function getCustomerSpouseId()
    {
        return $this->customerSpouseId;
    }

    /**
     * Set customerSpouseName
     *
     * @param string $customerSpouseName
     *
     * @return Customer
     */
    public function setCustomerSpouseName($customerSpouseName)
    {
        $this->customerSpouseName = $customerSpouseName;

        return $this;
    }

    /**
     * Get customerSpouseName
     *
     * @return string
     */
    public function getCustomerSpouseName()
    {
        return $this->customerSpouseName;
    }

    /**
     * Set customerSpouseBirthday
     *
     * @param \DateTime $customerSpouseBirthday
     *
     * @return Customer
     */
    public function setCustomerSpouseBirthday($customerSpouseBirthday)
    {
        $this->customerSpouseBirthday = $customerSpouseBirthday;

        return $this;
    }

    /**
     * Get customerSpouseBirthday
     *
     * @return \DateTime
     */
    public function getCustomerSpouseBirthday()
    {
        return $this->customerSpouseBirthday;
    }

    /**
     * Set customerSpouseJobName
     *
     * @param string $customerSpouseJobName
     *
     * @return Customer
     */
    public function setCustomerSpouseJobName($customerSpouseJobName)
    {
        $this->customerSpouseJobName = $customerSpouseJobName;

        return $this;
    }

    /**
     * Get customerSpouseJobName
     *
     * @return string
     */
    public function getCustomerSpouseJobName()
    {
        return $this->customerSpouseJobName;
    }

    /**
     * Set customerSpouseJobTime
     *
     * @param boolean $customerSpouseJobTime
     *
     * @return Customer
     */
    public function setCustomerSpouseJobTime($customerSpouseJobTime)
    {
        $this->customerSpouseJobTime = $customerSpouseJobTime;

        return $this;
    }

    /**
     * Get customerSpouseJobTime
     *
     * @return boolean
     */
    public function getCustomerSpouseJobTime()
    {
        return $this->customerSpouseJobTime;
    }

    /**
     * Set customerSpouseJobPhone
     *
     * @param string $customerSpouseJobPhone
     *
     * @return Customer
     */
    public function setCustomerSpouseJobPhone($customerSpouseJobPhone)
    {
        $this->customerSpouseJobPhone = $customerSpouseJobPhone;

        return $this;
    }

    /**
     * Get customerSpouseJobPhone
     *
     * @return string
     */
    public function getCustomerSpouseJobPhone()
    {
        return $this->customerSpouseJobPhone;
    }

    /**
     * Set customerSpouseJobTitle
     *
     * @param string $customerSpouseJobTitle
     *
     * @return Customer
     */
    public function setCustomerSpouseJobTitle($customerSpouseJobTitle)
    {
        $this->customerSpouseJobTitle = $customerSpouseJobTitle;

        return $this;
    }

    /**
     * Get customerSpouseJobTitle
     *
     * @return string
     */
    public function getCustomerSpouseJobTitle()
    {
        return $this->customerSpouseJobTitle;
    }

    /**
     * Set customerSpouseJobRevenue
     *
     * @param string $customerSpouseJobRevenue
     *
     * @return Customer
     */
    public function setCustomerSpouseJobRevenue($customerSpouseJobRevenue)
    {
        $this->customerSpouseJobRevenue = $customerSpouseJobRevenue;

        return $this;
    }

    /**
     * Get customerSpouseJobRevenue
     *
     * @return string
     */
    public function getCustomerSpouseJobRevenue()
    {
        return $this->customerSpouseJobRevenue;
    }

    /**
     * Set customerDependents
     *
     * @param integer $customerDependents
     *
     * @return Customer
     */
    public function setCustomerDependents($customerDependents)
    {
        $this->customerDependents = $customerDependents;

        return $this;
    }

    /**
     * Get customerDependents
     *
     * @return integer
     */
    public function getCustomerDependents()
    {
        return $this->customerDependents;
    }

    /**
     * Set customerDepName1
     *
     * @param string $customerDepName1
     *
     * @return Customer
     */
    public function setCustomerDepName1($customerDepName1)
    {
        $this->customerDepName1 = $customerDepName1;

        return $this;
    }

    /**
     * Get customerDepName1
     *
     * @return string
     */
    public function getCustomerDepName1()
    {
        return $this->customerDepName1;
    }

    /**
     * Set customerDepBirthday1
     *
     * @param \DateTime $customerDepBirthday1
     *
     * @return Customer
     */
    public function setCustomerDepBirthday1($customerDepBirthday1)
    {
        $this->customerDepBirthday1 = $customerDepBirthday1;

        return $this;
    }

    /**
     * Get customerDepBirthday1
     *
     * @return \DateTime
     */
    public function getCustomerDepBirthday1()
    {
        return $this->customerDepBirthday1;
    }

    /**
     * Set customerDepGender1
     *
     * @param boolean $customerDepGender1
     *
     * @return Customer
     */
    public function setCustomerDepGender1($customerDepGender1)
    {
        $this->customerDepGender1 = $customerDepGender1;

        return $this;
    }

    /**
     * Get customerDepGender1
     *
     * @return boolean
     */
    public function getCustomerDepGender1()
    {
        return $this->customerDepGender1;
    }

    /**
     * Set customerDepName2
     *
     * @param string $customerDepName2
     *
     * @return Customer
     */
    public function setCustomerDepName2($customerDepName2)
    {
        $this->customerDepName2 = $customerDepName2;

        return $this;
    }

    /**
     * Get customerDepName2
     *
     * @return string
     */
    public function getCustomerDepName2()
    {
        return $this->customerDepName2;
    }

    /**
     * Set customerDepBirthday2
     *
     * @param \DateTime $customerDepBirthday2
     *
     * @return Customer
     */
    public function setCustomerDepBirthday2($customerDepBirthday2)
    {
        $this->customerDepBirthday2 = $customerDepBirthday2;

        return $this;
    }

    /**
     * Get customerDepBirthday2
     *
     * @return \DateTime
     */
    public function getCustomerDepBirthday2()
    {
        return $this->customerDepBirthday2;
    }

    /**
     * Set customerDepGender2
     *
     * @param boolean $customerDepGender2
     *
     * @return Customer
     */
    public function setCustomerDepGender2($customerDepGender2)
    {
        $this->customerDepGender2 = $customerDepGender2;

        return $this;
    }

    /**
     * Get customerDepGender2
     *
     * @return boolean
     */
    public function getCustomerDepGender2()
    {
        return $this->customerDepGender2;
    }

    /**
     * Set customerDepName3
     *
     * @param string $customerDepName3
     *
     * @return Customer
     */
    public function setCustomerDepName3($customerDepName3)
    {
        $this->customerDepName3 = $customerDepName3;

        return $this;
    }

    /**
     * Get customerDepName3
     *
     * @return string
     */
    public function getCustomerDepName3()
    {
        return $this->customerDepName3;
    }

    /**
     * Set customerDepBirthday3
     *
     * @param \DateTime $customerDepBirthday3
     *
     * @return Customer
     */
    public function setCustomerDepBirthday3($customerDepBirthday3)
    {
        $this->customerDepBirthday3 = $customerDepBirthday3;

        return $this;
    }

    /**
     * Get customerDepBirthday3
     *
     * @return \DateTime
     */
    public function getCustomerDepBirthday3()
    {
        return $this->customerDepBirthday3;
    }

    /**
     * Set customerDepGender3
     *
     * @param boolean $customerDepGender3
     *
     * @return Customer
     */
    public function setCustomerDepGender3($customerDepGender3)
    {
        $this->customerDepGender3 = $customerDepGender3;

        return $this;
    }

    /**
     * Get customerDepGender3
     *
     * @return boolean
     */
    public function getCustomerDepGender3()
    {
        return $this->customerDepGender3;
    }

    /**
     * Set customerVehicles
     *
     * @param string $customerVehicles
     *
     * @return Customer
     */
    public function setCustomerVehicles($customerVehicles)
    {
        $this->customerVehicles = $customerVehicles;

        return $this;
    }

    /**
     * Get customerVehicles
     *
     * @return string
     */
    public function getCustomerVehicles()
    {
        return $this->customerVehicles;
    }

    /**
     * Set customerProperties
     *
     * @param string $customerProperties
     *
     * @return Customer
     */
    public function setCustomerProperties($customerProperties)
    {
        $this->customerProperties = $customerProperties;

        return $this;
    }

    /**
     * Get customerProperties
     *
     * @return string
     */
    public function getCustomerProperties()
    {
        return $this->customerProperties;
    }

    /**
     * Set customerPassword
     *
     * @param string $customerPassword
     *
     * @return Customer
     */
    public function setCustomerPassword($customerPassword)
    {
        $this->customerPassword = $customerPassword;

        return $this;
    }

    /**
     * Get customerPassword
     *
     * @return string
     */
    public function getCustomerPassword()
    {
        return $this->customerPassword;
    }

    /**
     * Set customerPasswordMd5
     *
     * @param string $customerPasswordMd5
     *
     * @return Customer
     */
    public function setCustomerPasswordMd5($customerPasswordMd5)
    {
        $this->customerPasswordMd5 = $customerPasswordMd5;

        return $this;
    }

    /**
     * Get customerPasswordMd5
     *
     * @return string
     */
    public function getCustomerPasswordMd5()
    {
        return $this->customerPasswordMd5;
    }

    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return Customer
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
     * Set biometrics
     *
     * @param string $biometrics
     *
     * @return Customer
     */
    public function setBiometrics($biometrics)
    {
        $this->biometrics = $biometrics;

        return $this;
    }

    /**
     * Get biometrics
     *
     * @return string
     */
    public function getBiometrics()
    {
        return $this->biometrics;
    }
}
