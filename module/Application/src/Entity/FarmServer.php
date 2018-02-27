<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FarmServer
 *
 * @ORM\Table(name="farm_server")
 * @ORM\Entity
 */
class FarmServer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="farm_server_key", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $farmServerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="farm_server_name", type="string", length=255, nullable=true)
     */
    private $farmServerName;

    /**
     * @var string
     *
     * @ORM\Column(name="farm_server_ip", type="string", length=32, nullable=true)
     */
    private $farmServerIp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="farm_server_priority", type="boolean", nullable=true)
     */
    private $farmServerPriority;

    /**
     * @var boolean
     *
     * @ORM\Column(name="farm_server_status", type="boolean", nullable=true)
     */
    private $farmServerStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="farm_server_directory", type="string", length=255, nullable=true)
     */
    private $farmServerDirectory;

    /**
     * @var string
     *
     * @ORM\Column(name="farm_server_substitute", type="string", length=255, nullable=true)
     */
    private $farmServerSubstitute;



    /**
     * Get farmServerKey
     *
     * @return integer
     */
    public function getFarmServerKey()
    {
        return $this->farmServerKey;
    }

    /**
     * Set farmServerName
     *
     * @param string $farmServerName
     *
     * @return FarmServer
     */
    public function setFarmServerName($farmServerName)
    {
        $this->farmServerName = $farmServerName;

        return $this;
    }

    /**
     * Get farmServerName
     *
     * @return string
     */
    public function getFarmServerName()
    {
        return $this->farmServerName;
    }

    /**
     * Set farmServerIp
     *
     * @param string $farmServerIp
     *
     * @return FarmServer
     */
    public function setFarmServerIp($farmServerIp)
    {
        $this->farmServerIp = $farmServerIp;

        return $this;
    }

    /**
     * Get farmServerIp
     *
     * @return string
     */
    public function getFarmServerIp()
    {
        return $this->farmServerIp;
    }

    /**
     * Set farmServerPriority
     *
     * @param boolean $farmServerPriority
     *
     * @return FarmServer
     */
    public function setFarmServerPriority($farmServerPriority)
    {
        $this->farmServerPriority = $farmServerPriority;

        return $this;
    }

    /**
     * Get farmServerPriority
     *
     * @return boolean
     */
    public function getFarmServerPriority()
    {
        return $this->farmServerPriority;
    }

    /**
     * Set farmServerStatus
     *
     * @param boolean $farmServerStatus
     *
     * @return FarmServer
     */
    public function setFarmServerStatus($farmServerStatus)
    {
        $this->farmServerStatus = $farmServerStatus;

        return $this;
    }

    /**
     * Get farmServerStatus
     *
     * @return boolean
     */
    public function getFarmServerStatus()
    {
        return $this->farmServerStatus;
    }

    /**
     * Set farmServerDirectory
     *
     * @param string $farmServerDirectory
     *
     * @return FarmServer
     */
    public function setFarmServerDirectory($farmServerDirectory)
    {
        $this->farmServerDirectory = $farmServerDirectory;

        return $this;
    }

    /**
     * Get farmServerDirectory
     *
     * @return string
     */
    public function getFarmServerDirectory()
    {
        return $this->farmServerDirectory;
    }

    /**
     * Set farmServerSubstitute
     *
     * @param string $farmServerSubstitute
     *
     * @return FarmServer
     */
    public function setFarmServerSubstitute($farmServerSubstitute)
    {
        $this->farmServerSubstitute = $farmServerSubstitute;

        return $this;
    }

    /**
     * Get farmServerSubstitute
     *
     * @return string
     */
    public function getFarmServerSubstitute()
    {
        return $this->farmServerSubstitute;
    }
}
