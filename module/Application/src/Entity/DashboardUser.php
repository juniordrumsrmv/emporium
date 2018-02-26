<?php

namespace Emporium;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityDashboardUser
 *
 * @ORM\Table(name="dashboard_user")
 * @ORM\Entity
 */
class DashboardUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="agent_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $agentId;

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
     * Set agentId
     *
     * @param integer $agentId
     *
     * @return DashboardUser
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

    /**
     * Set prmType
     *
     * @param integer $prmType
     *
     * @return DashboardUser
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
     * @return DashboardUser
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
     * @return DashboardUser
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
}
