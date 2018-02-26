<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Maker
 *
 * @ORM\Table(name="maker", uniqueConstraints={@ORM\UniqueConstraint(name="index_maker_id", columns={"maker_id"})})
 * @ORM\Entity
 */
class Maker
{
    /**
     * @var integer
     *
     * @ORM\Column(name="maker_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $makerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_id", type="string", length=50, nullable=false)
     */
    private $makerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="maker_id_type", type="smallint", nullable=true)
     */
    private $makerIdType;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_name", type="string", length=50, nullable=true)
     */
    private $makerName;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_razao", type="string", length=50, nullable=true)
     */
    private $makerRazao;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_address", type="string", length=50, nullable=true)
     */
    private $makerAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_comple", type="string", length=20, nullable=true)
     */
    private $makerComple;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_neig", type="string", length=20, nullable=true)
     */
    private $makerNeig;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_city", type="string", length=20, nullable=true)
     */
    private $makerCity;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_state", type="string", length=20, nullable=true)
     */
    private $makerState;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_zip", type="string", length=12, nullable=true)
     */
    private $makerZip;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_email", type="string", length=50, nullable=true)
     */
    private $makerEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_site", type="string", length=50, nullable=true)
     */
    private $makerSite;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_phone1", type="string", length=15, nullable=true)
     */
    private $makerPhone1;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_phone2", type="string", length=15, nullable=true)
     */
    private $makerPhone2;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_contact", type="string", length=20, nullable=true)
     */
    private $makerContact;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_country_code", type="string", length=10, nullable=true)
     */
    private $makerCountryCode;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_state_code", type="string", length=10, nullable=true)
     */
    private $makerStateCode;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_city_code", type="string", length=16, nullable=true)
     */
    private $makerCityCode;



    /**
     * Get makerKey
     *
     * @return integer
     */
    public function getMakerKey()
    {
        return $this->makerKey;
    }

    /**
     * Set makerId
     *
     * @param string $makerId
     *
     * @return Maker
     */
    public function setMakerId($makerId)
    {
        $this->makerId = $makerId;

        return $this;
    }

    /**
     * Get makerId
     *
     * @return string
     */
    public function getMakerId()
    {
        return $this->makerId;
    }

    /**
     * Set makerIdType
     *
     * @param integer $makerIdType
     *
     * @return Maker
     */
    public function setMakerIdType($makerIdType)
    {
        $this->makerIdType = $makerIdType;

        return $this;
    }

    /**
     * Get makerIdType
     *
     * @return integer
     */
    public function getMakerIdType()
    {
        return $this->makerIdType;
    }

    /**
     * Set makerName
     *
     * @param string $makerName
     *
     * @return Maker
     */
    public function setMakerName($makerName)
    {
        $this->makerName = $makerName;

        return $this;
    }

    /**
     * Get makerName
     *
     * @return string
     */
    public function getMakerName()
    {
        return $this->makerName;
    }

    /**
     * Set makerRazao
     *
     * @param string $makerRazao
     *
     * @return Maker
     */
    public function setMakerRazao($makerRazao)
    {
        $this->makerRazao = $makerRazao;

        return $this;
    }

    /**
     * Get makerRazao
     *
     * @return string
     */
    public function getMakerRazao()
    {
        return $this->makerRazao;
    }

    /**
     * Set makerAddress
     *
     * @param string $makerAddress
     *
     * @return Maker
     */
    public function setMakerAddress($makerAddress)
    {
        $this->makerAddress = $makerAddress;

        return $this;
    }

    /**
     * Get makerAddress
     *
     * @return string
     */
    public function getMakerAddress()
    {
        return $this->makerAddress;
    }

    /**
     * Set makerComple
     *
     * @param string $makerComple
     *
     * @return Maker
     */
    public function setMakerComple($makerComple)
    {
        $this->makerComple = $makerComple;

        return $this;
    }

    /**
     * Get makerComple
     *
     * @return string
     */
    public function getMakerComple()
    {
        return $this->makerComple;
    }

    /**
     * Set makerNeig
     *
     * @param string $makerNeig
     *
     * @return Maker
     */
    public function setMakerNeig($makerNeig)
    {
        $this->makerNeig = $makerNeig;

        return $this;
    }

    /**
     * Get makerNeig
     *
     * @return string
     */
    public function getMakerNeig()
    {
        return $this->makerNeig;
    }

    /**
     * Set makerCity
     *
     * @param string $makerCity
     *
     * @return Maker
     */
    public function setMakerCity($makerCity)
    {
        $this->makerCity = $makerCity;

        return $this;
    }

    /**
     * Get makerCity
     *
     * @return string
     */
    public function getMakerCity()
    {
        return $this->makerCity;
    }

    /**
     * Set makerState
     *
     * @param string $makerState
     *
     * @return Maker
     */
    public function setMakerState($makerState)
    {
        $this->makerState = $makerState;

        return $this;
    }

    /**
     * Get makerState
     *
     * @return string
     */
    public function getMakerState()
    {
        return $this->makerState;
    }

    /**
     * Set makerZip
     *
     * @param string $makerZip
     *
     * @return Maker
     */
    public function setMakerZip($makerZip)
    {
        $this->makerZip = $makerZip;

        return $this;
    }

    /**
     * Get makerZip
     *
     * @return string
     */
    public function getMakerZip()
    {
        return $this->makerZip;
    }

    /**
     * Set makerEmail
     *
     * @param string $makerEmail
     *
     * @return Maker
     */
    public function setMakerEmail($makerEmail)
    {
        $this->makerEmail = $makerEmail;

        return $this;
    }

    /**
     * Get makerEmail
     *
     * @return string
     */
    public function getMakerEmail()
    {
        return $this->makerEmail;
    }

    /**
     * Set makerSite
     *
     * @param string $makerSite
     *
     * @return Maker
     */
    public function setMakerSite($makerSite)
    {
        $this->makerSite = $makerSite;

        return $this;
    }

    /**
     * Get makerSite
     *
     * @return string
     */
    public function getMakerSite()
    {
        return $this->makerSite;
    }

    /**
     * Set makerPhone1
     *
     * @param string $makerPhone1
     *
     * @return Maker
     */
    public function setMakerPhone1($makerPhone1)
    {
        $this->makerPhone1 = $makerPhone1;

        return $this;
    }

    /**
     * Get makerPhone1
     *
     * @return string
     */
    public function getMakerPhone1()
    {
        return $this->makerPhone1;
    }

    /**
     * Set makerPhone2
     *
     * @param string $makerPhone2
     *
     * @return Maker
     */
    public function setMakerPhone2($makerPhone2)
    {
        $this->makerPhone2 = $makerPhone2;

        return $this;
    }

    /**
     * Get makerPhone2
     *
     * @return string
     */
    public function getMakerPhone2()
    {
        return $this->makerPhone2;
    }

    /**
     * Set makerContact
     *
     * @param string $makerContact
     *
     * @return Maker
     */
    public function setMakerContact($makerContact)
    {
        $this->makerContact = $makerContact;

        return $this;
    }

    /**
     * Get makerContact
     *
     * @return string
     */
    public function getMakerContact()
    {
        return $this->makerContact;
    }

    /**
     * Set makerCountryCode
     *
     * @param string $makerCountryCode
     *
     * @return Maker
     */
    public function setMakerCountryCode($makerCountryCode)
    {
        $this->makerCountryCode = $makerCountryCode;

        return $this;
    }

    /**
     * Get makerCountryCode
     *
     * @return string
     */
    public function getMakerCountryCode()
    {
        return $this->makerCountryCode;
    }

    /**
     * Set makerStateCode
     *
     * @param string $makerStateCode
     *
     * @return Maker
     */
    public function setMakerStateCode($makerStateCode)
    {
        $this->makerStateCode = $makerStateCode;

        return $this;
    }

    /**
     * Get makerStateCode
     *
     * @return string
     */
    public function getMakerStateCode()
    {
        return $this->makerStateCode;
    }

    /**
     * Set makerCityCode
     *
     * @param string $makerCityCode
     *
     * @return Maker
     */
    public function setMakerCityCode($makerCityCode)
    {
        $this->makerCityCode = $makerCityCode;

        return $this;
    }

    /**
     * Get makerCityCode
     *
     * @return string
     */
    public function getMakerCityCode()
    {
        return $this->makerCityCode;
    }
}
