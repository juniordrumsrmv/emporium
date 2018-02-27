<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competitor
 *
 * @ORM\Table(name="competitor", indexes={@ORM\Index(name="index_compe_name", columns={"store_key", "compet_name"}), @ORM\Index(name="index_compe_flag", columns={"store_key", "compet_flag"})})
 * @ORM\Entity
 */
class Competitor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="compet_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $competKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="compet_name", type="string", length=50, nullable=false)
     */
    private $competName;

    /**
     * @var string
     *
     * @ORM\Column(name="compet_flag", type="string", length=50, nullable=true)
     */
    private $competFlag;

    /**
     * @var string
     *
     * @ORM\Column(name="compet_address", type="string", length=50, nullable=true)
     */
    private $competAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="compet_comple", type="string", length=20, nullable=true)
     */
    private $competComple;

    /**
     * @var string
     *
     * @ORM\Column(name="compet_neig", type="string", length=20, nullable=true)
     */
    private $competNeig;

    /**
     * @var string
     *
     * @ORM\Column(name="compet_city", type="string", length=20, nullable=true)
     */
    private $competCity;

    /**
     * @var string
     *
     * @ORM\Column(name="compet_state", type="string", length=20, nullable=true)
     */
    private $competState;

    /**
     * @var string
     *
     * @ORM\Column(name="compet_zip", type="string", length=12, nullable=true)
     */
    private $competZip;

    /**
     * @var string
     *
     * @ORM\Column(name="compet_email", type="string", length=50, nullable=true)
     */
    private $competEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="compet_site", type="string", length=50, nullable=true)
     */
    private $competSite;

    /**
     * @var string
     *
     * @ORM\Column(name="compet_phone", type="string", length=15, nullable=true)
     */
    private $competPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="compet_contact", type="string", length=20, nullable=true)
     */
    private $competContact;

    /**
     * @var string
     *
     * @ORM\Column(name="compet_country_code", type="string", length=10, nullable=true)
     */
    private $competCountryCode;

    /**
     * @var string
     *
     * @ORM\Column(name="compet_state_code", type="string", length=10, nullable=true)
     */
    private $competStateCode;

    /**
     * @var string
     *
     * @ORM\Column(name="compet_city_code", type="string", length=16, nullable=true)
     */
    private $competCityCode;

    /**
     * @var boolean
     *
     * @ORM\Column(name="compet_status", type="boolean", nullable=true)
     */
    private $competStatus;



    /**
     * Get competKey
     *
     * @return integer
     */
    public function getCompetKey()
    {
        return $this->competKey;
    }

    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return Competitor
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
     * Set competName
     *
     * @param string $competName
     *
     * @return Competitor
     */
    public function setCompetName($competName)
    {
        $this->competName = $competName;

        return $this;
    }

    /**
     * Get competName
     *
     * @return string
     */
    public function getCompetName()
    {
        return $this->competName;
    }

    /**
     * Set competFlag
     *
     * @param string $competFlag
     *
     * @return Competitor
     */
    public function setCompetFlag($competFlag)
    {
        $this->competFlag = $competFlag;

        return $this;
    }

    /**
     * Get competFlag
     *
     * @return string
     */
    public function getCompetFlag()
    {
        return $this->competFlag;
    }

    /**
     * Set competAddress
     *
     * @param string $competAddress
     *
     * @return Competitor
     */
    public function setCompetAddress($competAddress)
    {
        $this->competAddress = $competAddress;

        return $this;
    }

    /**
     * Get competAddress
     *
     * @return string
     */
    public function getCompetAddress()
    {
        return $this->competAddress;
    }

    /**
     * Set competComple
     *
     * @param string $competComple
     *
     * @return Competitor
     */
    public function setCompetComple($competComple)
    {
        $this->competComple = $competComple;

        return $this;
    }

    /**
     * Get competComple
     *
     * @return string
     */
    public function getCompetComple()
    {
        return $this->competComple;
    }

    /**
     * Set competNeig
     *
     * @param string $competNeig
     *
     * @return Competitor
     */
    public function setCompetNeig($competNeig)
    {
        $this->competNeig = $competNeig;

        return $this;
    }

    /**
     * Get competNeig
     *
     * @return string
     */
    public function getCompetNeig()
    {
        return $this->competNeig;
    }

    /**
     * Set competCity
     *
     * @param string $competCity
     *
     * @return Competitor
     */
    public function setCompetCity($competCity)
    {
        $this->competCity = $competCity;

        return $this;
    }

    /**
     * Get competCity
     *
     * @return string
     */
    public function getCompetCity()
    {
        return $this->competCity;
    }

    /**
     * Set competState
     *
     * @param string $competState
     *
     * @return Competitor
     */
    public function setCompetState($competState)
    {
        $this->competState = $competState;

        return $this;
    }

    /**
     * Get competState
     *
     * @return string
     */
    public function getCompetState()
    {
        return $this->competState;
    }

    /**
     * Set competZip
     *
     * @param string $competZip
     *
     * @return Competitor
     */
    public function setCompetZip($competZip)
    {
        $this->competZip = $competZip;

        return $this;
    }

    /**
     * Get competZip
     *
     * @return string
     */
    public function getCompetZip()
    {
        return $this->competZip;
    }

    /**
     * Set competEmail
     *
     * @param string $competEmail
     *
     * @return Competitor
     */
    public function setCompetEmail($competEmail)
    {
        $this->competEmail = $competEmail;

        return $this;
    }

    /**
     * Get competEmail
     *
     * @return string
     */
    public function getCompetEmail()
    {
        return $this->competEmail;
    }

    /**
     * Set competSite
     *
     * @param string $competSite
     *
     * @return Competitor
     */
    public function setCompetSite($competSite)
    {
        $this->competSite = $competSite;

        return $this;
    }

    /**
     * Get competSite
     *
     * @return string
     */
    public function getCompetSite()
    {
        return $this->competSite;
    }

    /**
     * Set competPhone
     *
     * @param string $competPhone
     *
     * @return Competitor
     */
    public function setCompetPhone($competPhone)
    {
        $this->competPhone = $competPhone;

        return $this;
    }

    /**
     * Get competPhone
     *
     * @return string
     */
    public function getCompetPhone()
    {
        return $this->competPhone;
    }

    /**
     * Set competContact
     *
     * @param string $competContact
     *
     * @return Competitor
     */
    public function setCompetContact($competContact)
    {
        $this->competContact = $competContact;

        return $this;
    }

    /**
     * Get competContact
     *
     * @return string
     */
    public function getCompetContact()
    {
        return $this->competContact;
    }

    /**
     * Set competCountryCode
     *
     * @param string $competCountryCode
     *
     * @return Competitor
     */
    public function setCompetCountryCode($competCountryCode)
    {
        $this->competCountryCode = $competCountryCode;

        return $this;
    }

    /**
     * Get competCountryCode
     *
     * @return string
     */
    public function getCompetCountryCode()
    {
        return $this->competCountryCode;
    }

    /**
     * Set competStateCode
     *
     * @param string $competStateCode
     *
     * @return Competitor
     */
    public function setCompetStateCode($competStateCode)
    {
        $this->competStateCode = $competStateCode;

        return $this;
    }

    /**
     * Get competStateCode
     *
     * @return string
     */
    public function getCompetStateCode()
    {
        return $this->competStateCode;
    }

    /**
     * Set competCityCode
     *
     * @param string $competCityCode
     *
     * @return Competitor
     */
    public function setCompetCityCode($competCityCode)
    {
        $this->competCityCode = $competCityCode;

        return $this;
    }

    /**
     * Get competCityCode
     *
     * @return string
     */
    public function getCompetCityCode()
    {
        return $this->competCityCode;
    }

    /**
     * Set competStatus
     *
     * @param boolean $competStatus
     *
     * @return Competitor
     */
    public function setCompetStatus($competStatus)
    {
        $this->competStatus = $competStatus;

        return $this;
    }

    /**
     * Get competStatus
     *
     * @return boolean
     */
    public function getCompetStatus()
    {
        return $this->competStatus;
    }
}
