<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgentStore
 *
 * @ORM\Table(name="agent_store")
 * @ORM\Entity
 */
class AgentStore
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
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $storeKey;



    /**
     * Set agentKey
     *
     * @param integer $agentKey
     *
     * @return AgentStore
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
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return AgentStore
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
}
