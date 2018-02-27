<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ncm
 *
 * @ORM\Table(name="ncm")
 * @ORM\Entity
 */
class Ncm
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ncm_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ncmKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ncm_ex", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ncmEx;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=60, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="unit", type="string", length=10, nullable=true)
     */
    private $unit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ncm_table", type="boolean", nullable=true)
     */
    private $ncmTable;

    /**
     * @var string
     *
     * @ORM\Column(name="ncm_aliqnac", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $ncmAliqnac;

    /**
     * @var string
     *
     * @ORM\Column(name="ncm_aliqimp", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $ncmAliqimp;

    /**
     * @var string
     *
     * @ORM\Column(name="ncm_aliqstate", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $ncmAliqstate;

    /**
     * @var string
     *
     * @ORM\Column(name="ncm_aliqmunicipal", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $ncmAliqmunicipal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ncm_vigbegin", type="date", nullable=true)
     */
    private $ncmVigbegin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ncm_vigend", type="date", nullable=true)
     */
    private $ncmVigend;

    /**
     * @var string
     *
     * @ORM\Column(name="ncm_code", type="string", length=30, nullable=true)
     */
    private $ncmCode;

    /**
     * @var string
     *
     * @ORM\Column(name="ncm_version", type="string", length=30, nullable=true)
     */
    private $ncmVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="ncm_source", type="string", length=20, nullable=true)
     */
    private $ncmSource;



    /**
     * Set ncmKey
     *
     * @param integer $ncmKey
     *
     * @return Ncm
     */
    public function setNcmKey($ncmKey)
    {
        $this->ncmKey = $ncmKey;

        return $this;
    }

    /**
     * Get ncmKey
     *
     * @return integer
     */
    public function getNcmKey()
    {
        return $this->ncmKey;
    }

    /**
     * Set ncmEx
     *
     * @param boolean $ncmEx
     *
     * @return Ncm
     */
    public function setNcmEx($ncmEx)
    {
        $this->ncmEx = $ncmEx;

        return $this;
    }

    /**
     * Get ncmEx
     *
     * @return boolean
     */
    public function getNcmEx()
    {
        return $this->ncmEx;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Ncm
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set unit
     *
     * @param string $unit
     *
     * @return Ncm
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Get unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Set ncmTable
     *
     * @param boolean $ncmTable
     *
     * @return Ncm
     */
    public function setNcmTable($ncmTable)
    {
        $this->ncmTable = $ncmTable;

        return $this;
    }

    /**
     * Get ncmTable
     *
     * @return boolean
     */
    public function getNcmTable()
    {
        return $this->ncmTable;
    }

    /**
     * Set ncmAliqnac
     *
     * @param string $ncmAliqnac
     *
     * @return Ncm
     */
    public function setNcmAliqnac($ncmAliqnac)
    {
        $this->ncmAliqnac = $ncmAliqnac;

        return $this;
    }

    /**
     * Get ncmAliqnac
     *
     * @return string
     */
    public function getNcmAliqnac()
    {
        return $this->ncmAliqnac;
    }

    /**
     * Set ncmAliqimp
     *
     * @param string $ncmAliqimp
     *
     * @return Ncm
     */
    public function setNcmAliqimp($ncmAliqimp)
    {
        $this->ncmAliqimp = $ncmAliqimp;

        return $this;
    }

    /**
     * Get ncmAliqimp
     *
     * @return string
     */
    public function getNcmAliqimp()
    {
        return $this->ncmAliqimp;
    }

    /**
     * Set ncmAliqstate
     *
     * @param string $ncmAliqstate
     *
     * @return Ncm
     */
    public function setNcmAliqstate($ncmAliqstate)
    {
        $this->ncmAliqstate = $ncmAliqstate;

        return $this;
    }

    /**
     * Get ncmAliqstate
     *
     * @return string
     */
    public function getNcmAliqstate()
    {
        return $this->ncmAliqstate;
    }

    /**
     * Set ncmAliqmunicipal
     *
     * @param string $ncmAliqmunicipal
     *
     * @return Ncm
     */
    public function setNcmAliqmunicipal($ncmAliqmunicipal)
    {
        $this->ncmAliqmunicipal = $ncmAliqmunicipal;

        return $this;
    }

    /**
     * Get ncmAliqmunicipal
     *
     * @return string
     */
    public function getNcmAliqmunicipal()
    {
        return $this->ncmAliqmunicipal;
    }

    /**
     * Set ncmVigbegin
     *
     * @param \DateTime $ncmVigbegin
     *
     * @return Ncm
     */
    public function setNcmVigbegin($ncmVigbegin)
    {
        $this->ncmVigbegin = $ncmVigbegin;

        return $this;
    }

    /**
     * Get ncmVigbegin
     *
     * @return \DateTime
     */
    public function getNcmVigbegin()
    {
        return $this->ncmVigbegin;
    }

    /**
     * Set ncmVigend
     *
     * @param \DateTime $ncmVigend
     *
     * @return Ncm
     */
    public function setNcmVigend($ncmVigend)
    {
        $this->ncmVigend = $ncmVigend;

        return $this;
    }

    /**
     * Get ncmVigend
     *
     * @return \DateTime
     */
    public function getNcmVigend()
    {
        return $this->ncmVigend;
    }

    /**
     * Set ncmCode
     *
     * @param string $ncmCode
     *
     * @return Ncm
     */
    public function setNcmCode($ncmCode)
    {
        $this->ncmCode = $ncmCode;

        return $this;
    }

    /**
     * Get ncmCode
     *
     * @return string
     */
    public function getNcmCode()
    {
        return $this->ncmCode;
    }

    /**
     * Set ncmVersion
     *
     * @param string $ncmVersion
     *
     * @return Ncm
     */
    public function setNcmVersion($ncmVersion)
    {
        $this->ncmVersion = $ncmVersion;

        return $this;
    }

    /**
     * Get ncmVersion
     *
     * @return string
     */
    public function getNcmVersion()
    {
        return $this->ncmVersion;
    }

    /**
     * Set ncmSource
     *
     * @param string $ncmSource
     *
     * @return Ncm
     */
    public function setNcmSource($ncmSource)
    {
        $this->ncmSource = $ncmSource;

        return $this;
    }

    /**
     * Get ncmSource
     *
     * @return string
     */
    public function getNcmSource()
    {
        return $this->ncmSource;
    }
}
