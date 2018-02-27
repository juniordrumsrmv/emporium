<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BankingLocation
 *
 * @ORM\Table(name="banking_location")
 * @ORM\Entity
 */
class BankingLocation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="location_key", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $locationKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="loc_type", type="boolean", nullable=false)
     */
    private $locType;

    /**
     * @var string
     *
     * @ORM\Column(name="loc_name", type="string", length=50, nullable=true)
     */
    private $locName;

    /**
     * @var string
     *
     * @ORM\Column(name="loc_name_alt", type="string", length=30, nullable=true)
     */
    private $locNameAlt;

    /**
     * @var string
     *
     * @ORM\Column(name="loc_address", type="string", length=50, nullable=true)
     */
    private $locAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="loc_neig", type="string", length=20, nullable=true)
     */
    private $locNeig;

    /**
     * @var string
     *
     * @ORM\Column(name="loc_city", type="string", length=20, nullable=true)
     */
    private $locCity;

    /**
     * @var string
     *
     * @ORM\Column(name="loc_state", type="string", length=20, nullable=true)
     */
    private $locState;

    /**
     * @var string
     *
     * @ORM\Column(name="loc_zip", type="string", length=12, nullable=true)
     */
    private $locZip;

    /**
     * @var integer
     *
     * @ORM\Column(name="loc_bank", type="smallint", nullable=true)
     */
    private $locBank;

    /**
     * @var integer
     *
     * @ORM\Column(name="loc_branch", type="smallint", nullable=true)
     */
    private $locBranch;

    /**
     * @var integer
     *
     * @ORM\Column(name="loc_account", type="integer", nullable=true)
     */
    private $locAccount;

    /**
     * @var integer
     *
     * @ORM\Column(name="loc_cmc", type="integer", nullable=false)
     */
    private $locCmc;

    /**
     * @var integer
     *
     * @ORM\Column(name="loc_ident", type="integer", nullable=false)
     */
    private $locIdent;



    /**
     * Get locationKey
     *
     * @return integer
     */
    public function getLocationKey()
    {
        return $this->locationKey;
    }

    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return BankingLocation
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
     * Set locType
     *
     * @param boolean $locType
     *
     * @return BankingLocation
     */
    public function setLocType($locType)
    {
        $this->locType = $locType;

        return $this;
    }

    /**
     * Get locType
     *
     * @return boolean
     */
    public function getLocType()
    {
        return $this->locType;
    }

    /**
     * Set locName
     *
     * @param string $locName
     *
     * @return BankingLocation
     */
    public function setLocName($locName)
    {
        $this->locName = $locName;

        return $this;
    }

    /**
     * Get locName
     *
     * @return string
     */
    public function getLocName()
    {
        return $this->locName;
    }

    /**
     * Set locNameAlt
     *
     * @param string $locNameAlt
     *
     * @return BankingLocation
     */
    public function setLocNameAlt($locNameAlt)
    {
        $this->locNameAlt = $locNameAlt;

        return $this;
    }

    /**
     * Get locNameAlt
     *
     * @return string
     */
    public function getLocNameAlt()
    {
        return $this->locNameAlt;
    }

    /**
     * Set locAddress
     *
     * @param string $locAddress
     *
     * @return BankingLocation
     */
    public function setLocAddress($locAddress)
    {
        $this->locAddress = $locAddress;

        return $this;
    }

    /**
     * Get locAddress
     *
     * @return string
     */
    public function getLocAddress()
    {
        return $this->locAddress;
    }

    /**
     * Set locNeig
     *
     * @param string $locNeig
     *
     * @return BankingLocation
     */
    public function setLocNeig($locNeig)
    {
        $this->locNeig = $locNeig;

        return $this;
    }

    /**
     * Get locNeig
     *
     * @return string
     */
    public function getLocNeig()
    {
        return $this->locNeig;
    }

    /**
     * Set locCity
     *
     * @param string $locCity
     *
     * @return BankingLocation
     */
    public function setLocCity($locCity)
    {
        $this->locCity = $locCity;

        return $this;
    }

    /**
     * Get locCity
     *
     * @return string
     */
    public function getLocCity()
    {
        return $this->locCity;
    }

    /**
     * Set locState
     *
     * @param string $locState
     *
     * @return BankingLocation
     */
    public function setLocState($locState)
    {
        $this->locState = $locState;

        return $this;
    }

    /**
     * Get locState
     *
     * @return string
     */
    public function getLocState()
    {
        return $this->locState;
    }

    /**
     * Set locZip
     *
     * @param string $locZip
     *
     * @return BankingLocation
     */
    public function setLocZip($locZip)
    {
        $this->locZip = $locZip;

        return $this;
    }

    /**
     * Get locZip
     *
     * @return string
     */
    public function getLocZip()
    {
        return $this->locZip;
    }

    /**
     * Set locBank
     *
     * @param integer $locBank
     *
     * @return BankingLocation
     */
    public function setLocBank($locBank)
    {
        $this->locBank = $locBank;

        return $this;
    }

    /**
     * Get locBank
     *
     * @return integer
     */
    public function getLocBank()
    {
        return $this->locBank;
    }

    /**
     * Set locBranch
     *
     * @param integer $locBranch
     *
     * @return BankingLocation
     */
    public function setLocBranch($locBranch)
    {
        $this->locBranch = $locBranch;

        return $this;
    }

    /**
     * Get locBranch
     *
     * @return integer
     */
    public function getLocBranch()
    {
        return $this->locBranch;
    }

    /**
     * Set locAccount
     *
     * @param integer $locAccount
     *
     * @return BankingLocation
     */
    public function setLocAccount($locAccount)
    {
        $this->locAccount = $locAccount;

        return $this;
    }

    /**
     * Get locAccount
     *
     * @return integer
     */
    public function getLocAccount()
    {
        return $this->locAccount;
    }

    /**
     * Set locCmc
     *
     * @param integer $locCmc
     *
     * @return BankingLocation
     */
    public function setLocCmc($locCmc)
    {
        $this->locCmc = $locCmc;

        return $this;
    }

    /**
     * Get locCmc
     *
     * @return integer
     */
    public function getLocCmc()
    {
        return $this->locCmc;
    }

    /**
     * Set locIdent
     *
     * @param integer $locIdent
     *
     * @return BankingLocation
     */
    public function setLocIdent($locIdent)
    {
        $this->locIdent = $locIdent;

        return $this;
    }

    /**
     * Get locIdent
     *
     * @return integer
     */
    public function getLocIdent()
    {
        return $this->locIdent;
    }
}
