<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NetworkType
 *
 * @ORM\Table(name="network_type")
 * @ORM\Entity
 */
class NetworkType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="network_key", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $networkKey;

    /**
     * @var string
     *
     * @ORM\Column(name="network_name", type="string", length=30, nullable=true)
     */
    private $networkName;



    /**
     * Get networkKey
     *
     * @return integer
     */
    public function getNetworkKey()
    {
        return $this->networkKey;
    }

    /**
     * Set networkName
     *
     * @param string $networkName
     *
     * @return NetworkType
     */
    public function setNetworkName($networkName)
    {
        $this->networkName = $networkName;

        return $this;
    }

    /**
     * Get networkName
     *
     * @return string
     */
    public function getNetworkName()
    {
        return $this->networkName;
    }
}
