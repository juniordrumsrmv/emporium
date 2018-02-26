<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgentGroup
 *
 * @ORM\Table(name="agent_group")
 * @ORM\Entity
 */
class AgentGroup
{
    /**
     * @var integer
     *
     * @ORM\Column(name="group_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $groupKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="agent_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $agentKey;



    /**
     * Set groupKey
     *
     * @param integer $groupKey
     *
     * @return AgentGroup
     */
    public function setGroupKey($groupKey)
    {
        $this->groupKey = $groupKey;

        return $this;
    }

    /**
     * Get groupKey
     *
     * @return integer
     */
    public function getGroupKey()
    {
        return $this->groupKey;
    }

    /**
     * Set agentKey
     *
     * @param integer $agentKey
     *
     * @return AgentGroup
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
}
