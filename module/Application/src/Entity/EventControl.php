<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventControl
 *
 * @ORM\Table(name="event_control", indexes={@ORM\Index(name="event_control_index", columns={"evctl_id", "agent_key"})})
 * @ORM\Entity
 */
class EventControl
{
    /**
     * @var integer
     *
     * @ORM\Column(name="evctl_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $evctlKey;

    /**
     * @var string
     *
     * @ORM\Column(name="evctl_id", type="string", length=32, nullable=false)
     */
    private $evctlId;

    /**
     * @var integer
     *
     * @ORM\Column(name="agent_key", type="bigint", nullable=true)
     */
    private $agentKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="evctl_time", type="datetime", nullable=true)
     */
    private $evctlTime;



    /**
     * Get evctlKey
     *
     * @return integer
     */
    public function getEvctlKey()
    {
        return $this->evctlKey;
    }

    /**
     * Set evctlId
     *
     * @param string $evctlId
     *
     * @return EventControl
     */
    public function setEvctlId($evctlId)
    {
        $this->evctlId = $evctlId;

        return $this;
    }

    /**
     * Get evctlId
     *
     * @return string
     */
    public function getEvctlId()
    {
        return $this->evctlId;
    }

    /**
     * Set agentKey
     *
     * @param integer $agentKey
     *
     * @return EventControl
     */
    public function setAgentKey($agentKey)
    {
        $this->agentKey = $agentKey;

        return $this;
    }

    /**
     * Get agentKey
     *
     * @return integer
     */
    public function getAgentKey()
    {
        return $this->agentKey;
    }

    /**
     * Set evctlTime
     *
     * @param \DateTime $evctlTime
     *
     * @return EventControl
     */
    public function setEvctlTime($evctlTime)
    {
        $this->evctlTime = $evctlTime;

        return $this;
    }

    /**
     * Get evctlTime
     *
     * @return \DateTime
     */
    public function getEvctlTime()
    {
        return $this->evctlTime;
    }
}
