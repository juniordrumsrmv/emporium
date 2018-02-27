<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DashboardParameter
 *
 * @ORM\Table(name="dashboard_parameter")
 * @ORM\Entity
 */
class DashboardParameter
{
    /**
     * @var integer
     *
     * @ORM\Column(name="prm_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $prmKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="prm_type", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $prmType;

    /**
     * @var string
     *
     * @ORM\Column(name="prm_id", type="string", length=24, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $prmId;

    /**
     * @var string
     *
     * @ORM\Column(name="prm_value", type="text", length=65535, nullable=true)
     */
    private $prmValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="agent_id", type="bigint", nullable=true)
     */
    private $agentId;



    /**
     * Set prmKey
     *
     * @param integer $prmKey
     *
     * @return DashboardParameter
     */
    public function setPrmKey($prmKey)
    {
        $this->prmKey = $prmKey;

        return $this;
    }

    /**
     * Get prmKey
     *
     * @return integer
     */
    public function getPrmKey()
    {
        return $this->prmKey;
    }

    /**
     * Set prmType
     *
     * @param integer $prmType
     *
     * @return DashboardParameter
     */
    public function setPrmType($prmType)
    {
        $this->prmType = $prmType;

        return $this;
    }

    /**
     * Get prmType
     *
     * @return integer
     */
    public function getPrmType()
    {
        return $this->prmType;
    }

    /**
     * Set prmId
     *
     * @param string $prmId
     *
     * @return DashboardParameter
     */
    public function setPrmId($prmId)
    {
        $this->prmId = $prmId;

        return $this;
    }

    /**
     * Get prmId
     *
     * @return string
     */
    public function getPrmId()
    {
        return $this->prmId;
    }

    /**
     * Set prmValue
     *
     * @param string $prmValue
     *
     * @return DashboardParameter
     */
    public function setPrmValue($prmValue)
    {
        $this->prmValue = $prmValue;

        return $this;
    }

    /**
     * Get prmValue
     *
     * @return string
     */
    public function getPrmValue()
    {
        return $this->prmValue;
    }

    /**
     * Set agentId
     *
     * @param integer $agentId
     *
     * @return DashboardParameter
     */
    public function setAgentId($agentId)
    {
        $this->agentId = $agentId;

        return $this;
    }

    /**
     * Get agentId
     *
     * @return integer
     */
    public function getAgentId()
    {
        return $this->agentId;
    }
}
