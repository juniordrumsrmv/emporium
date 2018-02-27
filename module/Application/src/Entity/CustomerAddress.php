<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerAddress
 *
 * @ORM\Table(name="customer_address")
 * @ORM\Entity
 */
class CustomerAddress
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
     * @ORM\Column(name="custaddr_type", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $custaddrType;

    /**
     * @var string
     *
     * @ORM\Column(name="custaddr_address", type="string", length=60, nullable=true)
     */
    private $custaddrAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="custaddr_number", type="string", length=20, nullable=true)
     */
    private $custaddrNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="custaddr_comple", type="string", length=20, nullable=true)
     */
    private $custaddrComple;

    /**
     * @var string
     *
     * @ORM\Column(name="custaddr_neig", type="string", length=20, nullable=true)
     */
    private $custaddrNeig;

    /**
     * @var string
     *
     * @ORM\Column(name="custaddr_city", type="string", length=20, nullable=true)
     */
    private $custaddrCity;

    /**
     * @var string
     *
     * @ORM\Column(name="custaddr_state", type="string", length=20, nullable=true)
     */
    private $custaddrState;

    /**
     * @var string
     *
     * @ORM\Column(name="custaddr_zip", type="string", length=12, nullable=true)
     */
    private $custaddrZip;

    /**
     * @var string
     *
     * @ORM\Column(name="custaddr_reference", type="string", length=60, nullable=true)
     */
    private $custaddrReference;

    /**
     * @var string
     *
     * @ORM\Column(name="custaddr_phone_area_code", type="string", length=16, nullable=true)
     */
    private $custaddrPhoneAreaCode;

    /**
     * @var string
     *
     * @ORM\Column(name="custaddr_phone_number", type="string", length=16, nullable=true)
     */
    private $custaddrPhoneNumber;

    /**
     * @var boolean
     *
     * @ORM\Column(name="custaddr_addr_time", type="boolean", nullable=true)
     */
    private $custaddrAddrTime;

    /**
     * @var string
     *
     * @ORM\Column(name="custaddr_country_code", type="string", length=10, nullable=true)
     */
    private $custaddrCountryCode;

    /**
     * @var string
     *
     * @ORM\Column(name="custaddr_state_code", type="string", length=10, nullable=true)
     */
    private $custaddrStateCode;

    /**
     * @var string
     *
     * @ORM\Column(name="custaddr_city_code", type="string", length=16, nullable=true)
     */
    private $custaddrCityCode;



    /**
     * Set customerKey
     *
     * @param integer $customerKey
     *
     * @return CustomerAddress
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
     * Set custaddrType
     *
     * @param integer $custaddrType
     *
     * @return CustomerAddress
     */
    public function setCustaddrType($custaddrType)
    {
        $this->custaddrType = $custaddrType;

        return $this;
    }

    /**
     * Get custaddrType
     *
     * @return integer
     */
    public function getCustaddrType()
    {
        return $this->custaddrType;
    }

    /**
     * Set custaddrAddress
     *
     * @param string $custaddrAddress
     *
     * @return CustomerAddress
     */
    public function setCustaddrAddress($custaddrAddress)
    {
        $this->custaddrAddress = $custaddrAddress;

        return $this;
    }

    /**
     * Get custaddrAddress
     *
     * @return string
     */
    public function getCustaddrAddress()
    {
        return $this->custaddrAddress;
    }

    /**
     * Set custaddrNumber
     *
     * @param string $custaddrNumber
     *
     * @return CustomerAddress
     */
    public function setCustaddrNumber($custaddrNumber)
    {
        $this->custaddrNumber = $custaddrNumber;

        return $this;
    }

    /**
     * Get custaddrNumber
     *
     * @return string
     */
    public function getCustaddrNumber()
    {
        return $this->custaddrNumber;
    }

    /**
     * Set custaddrComple
     *
     * @param string $custaddrComple
     *
     * @return CustomerAddress
     */
    public function setCustaddrComple($custaddrComple)
    {
        $this->custaddrComple = $custaddrComple;

        return $this;
    }

    /**
     * Get custaddrComple
     *
     * @return string
     */
    public function getCustaddrComple()
    {
        return $this->custaddrComple;
    }

    /**
     * Set custaddrNeig
     *
     * @param string $custaddrNeig
     *
     * @return CustomerAddress
     */
    public function setCustaddrNeig($custaddrNeig)
    {
        $this->custaddrNeig = $custaddrNeig;

        return $this;
    }

    /**
     * Get custaddrNeig
     *
     * @return string
     */
    public function getCustaddrNeig()
    {
        return $this->custaddrNeig;
    }

    /**
     * Set custaddrCity
     *
     * @param string $custaddrCity
     *
     * @return CustomerAddress
     */
    public function setCustaddrCity($custaddrCity)
    {
        $this->custaddrCity = $custaddrCity;

        return $this;
    }

    /**
     * Get custaddrCity
     *
     * @return string
     */
    public function getCustaddrCity()
    {
        return $this->custaddrCity;
    }

    /**
     * Set custaddrState
     *
     * @param string $custaddrState
     *
     * @return CustomerAddress
     */
    public function setCustaddrState($custaddrState)
    {
        $this->custaddrState = $custaddrState;

        return $this;
    }

    /**
     * Get custaddrState
     *
     * @return string
     */
    public function getCustaddrState()
    {
        return $this->custaddrState;
    }

    /**
     * Set custaddrZip
     *
     * @param string $custaddrZip
     *
     * @return CustomerAddress
     */
    public function setCustaddrZip($custaddrZip)
    {
        $this->custaddrZip = $custaddrZip;

        return $this;
    }

    /**
     * Get custaddrZip
     *
     * @return string
     */
    public function getCustaddrZip()
    {
        return $this->custaddrZip;
    }

    /**
     * Set custaddrReference
     *
     * @param string $custaddrReference
     *
     * @return CustomerAddress
     */
    public function setCustaddrReference($custaddrReference)
    {
        $this->custaddrReference = $custaddrReference;

        return $this;
    }

    /**
     * Get custaddrReference
     *
     * @return string
     */
    public function getCustaddrReference()
    {
        return $this->custaddrReference;
    }

    /**
     * Set custaddrPhoneAreaCode
     *
     * @param string $custaddrPhoneAreaCode
     *
     * @return CustomerAddress
     */
    public function setCustaddrPhoneAreaCode($custaddrPhoneAreaCode)
    {
        $this->custaddrPhoneAreaCode = $custaddrPhoneAreaCode;

        return $this;
    }

    /**
     * Get custaddrPhoneAreaCode
     *
     * @return string
     */
    public function getCustaddrPhoneAreaCode()
    {
        return $this->custaddrPhoneAreaCode;
    }

    /**
     * Set custaddrPhoneNumber
     *
     * @param string $custaddrPhoneNumber
     *
     * @return CustomerAddress
     */
    public function setCustaddrPhoneNumber($custaddrPhoneNumber)
    {
        $this->custaddrPhoneNumber = $custaddrPhoneNumber;

        return $this;
    }

    /**
     * Get custaddrPhoneNumber
     *
     * @return string
     */
    public function getCustaddrPhoneNumber()
    {
        return $this->custaddrPhoneNumber;
    }

    /**
     * Set custaddrAddrTime
     *
     * @param boolean $custaddrAddrTime
     *
     * @return CustomerAddress
     */
    public function setCustaddrAddrTime($custaddrAddrTime)
    {
        $this->custaddrAddrTime = $custaddrAddrTime;

        return $this;
    }

    /**
     * Get custaddrAddrTime
     *
     * @return boolean
     */
    public function getCustaddrAddrTime()
    {
        return $this->custaddrAddrTime;
    }

    /**
     * Set custaddrCountryCode
     *
     * @param string $custaddrCountryCode
     *
     * @return CustomerAddress
     */
    public function setCustaddrCountryCode($custaddrCountryCode)
    {
        $this->custaddrCountryCode = $custaddrCountryCode;

        return $this;
    }

    /**
     * Get custaddrCountryCode
     *
     * @return string
     */
    public function getCustaddrCountryCode()
    {
        return $this->custaddrCountryCode;
    }

    /**
     * Set custaddrStateCode
     *
     * @param string $custaddrStateCode
     *
     * @return CustomerAddress
     */
    public function setCustaddrStateCode($custaddrStateCode)
    {
        $this->custaddrStateCode = $custaddrStateCode;

        return $this;
    }

    /**
     * Get custaddrStateCode
     *
     * @return string
     */
    public function getCustaddrStateCode()
    {
        return $this->custaddrStateCode;
    }

    /**
     * Set custaddrCityCode
     *
     * @param string $custaddrCityCode
     *
     * @return CustomerAddress
     */
    public function setCustaddrCityCode($custaddrCityCode)
    {
        $this->custaddrCityCode = $custaddrCityCode;

        return $this;
    }

    /**
     * Get custaddrCityCode
     *
     * @return string
     */
    public function getCustaddrCityCode()
    {
        return $this->custaddrCityCode;
    }
}
