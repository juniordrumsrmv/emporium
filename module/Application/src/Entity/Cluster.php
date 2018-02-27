<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cluster
 *
 * @ORM\Table(name="cluster")
 * @ORM\Entity
 */
class Cluster
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
     * @var string
     *
     * @ORM\Column(name="server_name", type="text", length=65535, nullable=true)
     */
    private $serverName;

    /**
     * @var string
     *
     * @ORM\Column(name="server_path", type="text", length=65535, nullable=true)
     */
    private $serverPath;



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
     * Set serverName
     *
     * @param string $serverName
     *
     * @return Cluster
     */
    public function setServerName($serverName)
    {
        $this->serverName = $serverName;

        return $this;
    }

    /**
     * Get serverName
     *
     * @return string
     */
    public function getServerName()
    {
        return $this->serverName;
    }

    /**
     * Set serverPath
     *
     * @param string $serverPath
     *
     * @return Cluster
     */
    public function setServerPath($serverPath)
    {
        $this->serverPath = $serverPath;

        return $this;
    }

    /**
     * Get serverPath
     *
     * @return string
     */
    public function getServerPath()
    {
        return $this->serverPath;
    }
}
