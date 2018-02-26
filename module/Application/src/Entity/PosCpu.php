<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PosCpu
 *
 * @ORM\Table(name="pos_cpu")
 * @ORM\Entity
 */
class PosCpu
{
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
     * @var boolean
     *
     * @ORM\Column(name="processor_number", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $processorNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="vendor_id", type="string", length=255, nullable=true)
     */
    private $vendorId;

    /**
     * @var integer
     *
     * @ORM\Column(name="cpu_family", type="smallint", nullable=true)
     */
    private $cpuFamily;

    /**
     * @var integer
     *
     * @ORM\Column(name="model", type="smallint", nullable=true)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="model_name", type="string", length=255, nullable=true)
     */
    private $modelName;

    /**
     * @var integer
     *
     * @ORM\Column(name="stepping", type="smallint", nullable=true)
     */
    private $stepping;

    /**
     * @var string
     *
     * @ORM\Column(name="cpu_mhz", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $cpuMhz;

    /**
     * @var string
     *
     * @ORM\Column(name="cache_size", type="string", length=255, nullable=true)
     */
    private $cacheSize;

    /**
     * @var boolean
     *
     * @ORM\Column(name="physical_id", type="boolean", nullable=true)
     */
    private $physicalId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="siblings", type="boolean", nullable=true)
     */
    private $siblings;

    /**
     * @var boolean
     *
     * @ORM\Column(name="core_id", type="boolean", nullable=true)
     */
    private $coreId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cpu_cores", type="boolean", nullable=true)
     */
    private $cpuCores;

    /**
     * @var string
     *
     * @ORM\Column(name="fpu", type="string", length=8, nullable=true)
     */
    private $fpu;

    /**
     * @var string
     *
     * @ORM\Column(name="fpu_exception", type="string", length=8, nullable=true)
     */
    private $fpuException;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cpuid_level", type="boolean", nullable=true)
     */
    private $cpuidLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="wp", type="string", length=8, nullable=true)
     */
    private $wp;

    /**
     * @var string
     *
     * @ORM\Column(name="flags", type="string", length=255, nullable=true)
     */
    private $flags;

    /**
     * @var string
     *
     * @ORM\Column(name="bogomips", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $bogomips;

    /**
     * @var integer
     *
     * @ORM\Column(name="clflush_size", type="smallint", nullable=true)
     */
    private $clflushSize;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return PosCpu
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
     * @return PosCpu
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
     * Set processorNumber
     *
     * @param boolean $processorNumber
     *
     * @return PosCpu
     */
    public function setProcessorNumber($processorNumber)
    {
        $this->processorNumber = $processorNumber;

        return $this;
    }

    /**
     * Get processorNumber
     *
     * @return boolean
     */
    public function getProcessorNumber()
    {
        return $this->processorNumber;
    }

    /**
     * Set vendorId
     *
     * @param string $vendorId
     *
     * @return PosCpu
     */
    public function setVendorId($vendorId)
    {
        $this->vendorId = $vendorId;

        return $this;
    }

    /**
     * Get vendorId
     *
     * @return string
     */
    public function getVendorId()
    {
        return $this->vendorId;
    }

    /**
     * Set cpuFamily
     *
     * @param integer $cpuFamily
     *
     * @return PosCpu
     */
    public function setCpuFamily($cpuFamily)
    {
        $this->cpuFamily = $cpuFamily;

        return $this;
    }

    /**
     * Get cpuFamily
     *
     * @return integer
     */
    public function getCpuFamily()
    {
        return $this->cpuFamily;
    }

    /**
     * Set model
     *
     * @param integer $model
     *
     * @return PosCpu
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return integer
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set modelName
     *
     * @param string $modelName
     *
     * @return PosCpu
     */
    public function setModelName($modelName)
    {
        $this->modelName = $modelName;

        return $this;
    }

    /**
     * Get modelName
     *
     * @return string
     */
    public function getModelName()
    {
        return $this->modelName;
    }

    /**
     * Set stepping
     *
     * @param integer $stepping
     *
     * @return PosCpu
     */
    public function setStepping($stepping)
    {
        $this->stepping = $stepping;

        return $this;
    }

    /**
     * Get stepping
     *
     * @return integer
     */
    public function getStepping()
    {
        return $this->stepping;
    }

    /**
     * Set cpuMhz
     *
     * @param string $cpuMhz
     *
     * @return PosCpu
     */
    public function setCpuMhz($cpuMhz)
    {
        $this->cpuMhz = $cpuMhz;

        return $this;
    }

    /**
     * Get cpuMhz
     *
     * @return string
     */
    public function getCpuMhz()
    {
        return $this->cpuMhz;
    }

    /**
     * Set cacheSize
     *
     * @param string $cacheSize
     *
     * @return PosCpu
     */
    public function setCacheSize($cacheSize)
    {
        $this->cacheSize = $cacheSize;

        return $this;
    }

    /**
     * Get cacheSize
     *
     * @return string
     */
    public function getCacheSize()
    {
        return $this->cacheSize;
    }

    /**
     * Set physicalId
     *
     * @param boolean $physicalId
     *
     * @return PosCpu
     */
    public function setPhysicalId($physicalId)
    {
        $this->physicalId = $physicalId;

        return $this;
    }

    /**
     * Get physicalId
     *
     * @return boolean
     */
    public function getPhysicalId()
    {
        return $this->physicalId;
    }

    /**
     * Set siblings
     *
     * @param boolean $siblings
     *
     * @return PosCpu
     */
    public function setSiblings($siblings)
    {
        $this->siblings = $siblings;

        return $this;
    }

    /**
     * Get siblings
     *
     * @return boolean
     */
    public function getSiblings()
    {
        return $this->siblings;
    }

    /**
     * Set coreId
     *
     * @param boolean $coreId
     *
     * @return PosCpu
     */
    public function setCoreId($coreId)
    {
        $this->coreId = $coreId;

        return $this;
    }

    /**
     * Get coreId
     *
     * @return boolean
     */
    public function getCoreId()
    {
        return $this->coreId;
    }

    /**
     * Set cpuCores
     *
     * @param boolean $cpuCores
     *
     * @return PosCpu
     */
    public function setCpuCores($cpuCores)
    {
        $this->cpuCores = $cpuCores;

        return $this;
    }

    /**
     * Get cpuCores
     *
     * @return boolean
     */
    public function getCpuCores()
    {
        return $this->cpuCores;
    }

    /**
     * Set fpu
     *
     * @param string $fpu
     *
     * @return PosCpu
     */
    public function setFpu($fpu)
    {
        $this->fpu = $fpu;

        return $this;
    }

    /**
     * Get fpu
     *
     * @return string
     */
    public function getFpu()
    {
        return $this->fpu;
    }

    /**
     * Set fpuException
     *
     * @param string $fpuException
     *
     * @return PosCpu
     */
    public function setFpuException($fpuException)
    {
        $this->fpuException = $fpuException;

        return $this;
    }

    /**
     * Get fpuException
     *
     * @return string
     */
    public function getFpuException()
    {
        return $this->fpuException;
    }

    /**
     * Set cpuidLevel
     *
     * @param boolean $cpuidLevel
     *
     * @return PosCpu
     */
    public function setCpuidLevel($cpuidLevel)
    {
        $this->cpuidLevel = $cpuidLevel;

        return $this;
    }

    /**
     * Get cpuidLevel
     *
     * @return boolean
     */
    public function getCpuidLevel()
    {
        return $this->cpuidLevel;
    }

    /**
     * Set wp
     *
     * @param string $wp
     *
     * @return PosCpu
     */
    public function setWp($wp)
    {
        $this->wp = $wp;

        return $this;
    }

    /**
     * Get wp
     *
     * @return string
     */
    public function getWp()
    {
        return $this->wp;
    }

    /**
     * Set flags
     *
     * @param string $flags
     *
     * @return PosCpu
     */
    public function setFlags($flags)
    {
        $this->flags = $flags;

        return $this;
    }

    /**
     * Get flags
     *
     * @return string
     */
    public function getFlags()
    {
        return $this->flags;
    }

    /**
     * Set bogomips
     *
     * @param string $bogomips
     *
     * @return PosCpu
     */
    public function setBogomips($bogomips)
    {
        $this->bogomips = $bogomips;

        return $this;
    }

    /**
     * Get bogomips
     *
     * @return string
     */
    public function getBogomips()
    {
        return $this->bogomips;
    }

    /**
     * Set clflushSize
     *
     * @param integer $clflushSize
     *
     * @return PosCpu
     */
    public function setClflushSize($clflushSize)
    {
        $this->clflushSize = $clflushSize;

        return $this;
    }

    /**
     * Get clflushSize
     *
     * @return integer
     */
    public function getClflushSize()
    {
        return $this->clflushSize;
    }
}
