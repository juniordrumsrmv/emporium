<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgentStoreGroup
 *
 * @ORM\Table(name="agent_store_group")
 * @ORM\Entity
 */
class AgentStoreGroup
{
    /**
     * @var integer
     *
     * @ORM\Column(name="agent_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $agentKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_group_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $storeGroupKey;



    /**
     * Set agentKey
     *
     * @param integer $agentKey
     *
     * @return AgentStoreGroup
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
     * Set storeGroupKey
     *
     * @param integer $storeGroupKey
     *
     * @return AgentStoreGroup
     */
    public function setStoreGroupKey($storeGroupKey)
    {
        $this->storeGroupKey = $storeGroupKey;

        return $this;
    }

    /**
     * Get storeGroupKey
     *
     * @return integer
     */
    public function getStoreGroupKey()
    {
        return $this->storeGroupKey;
    }
}
