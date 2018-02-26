<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccessControl
 *
 * @ORM\Table(name="access_control", uniqueConstraints={@ORM\UniqueConstraint(name="index_control_ch", columns={"entity_key", "agent_key", "access_type_key"})})
 * @ORM\Entity
 */
class AccessControl
{
    /**
     * @var integer
     *
     * @ORM\Column(name="access_control_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $accessControlKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="entity_key", type="bigint", nullable=false)
     */
    private $entityKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="agent_key", type="bigint", nullable=false)
     */
    private $agentKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="access_type_key", type="integer", nullable=false)
     */
    private $accessTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="high_limit_value", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $highLimitValue;

    /**
     * @var string
     *
     * @ORM\Column(name="low_limit_value", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $lowLimitValue;

    /**
     * @var string
     *
     * @ORM\Column(name="high_limit_percent", type="decimal", precision=6, scale=3, nullable=true)
     */
    private $highLimitPercent;

    /**
     * @var string
     *
     * @ORM\Column(name="low_limit_percent", type="decimal", precision=6, scale=3, nullable=true)
     */
    private $lowLimitPercent;

    /**
     * @var integer
     *
     * @ORM\Column(name="high_limit_quantity", type="smallint", nullable=true)
     */
    private $highLimitQuantity;



    /**
     * Get accessControlKey
     *
     * @return integer
     */
    public function getAccessControlKey()
    {
        return $this->accessControlKey;
    }

    /**
     * Set entityKey
     *
     * @param integer $entityKey
     *
     * @return AccessControl
     */
    public function setEntityKey($entityKey)
    {
        $this->entityKey = $entityKey;

        return $this;
    }

    /**
     * Get entityKey
     *
     * @return integer
     */
    public function getEntityKey()
    {
        return $this->entityKey;
    }

    /**
     * Set agentKey
     *
     * @param integer $agentKey
     *
     * @return AccessControl
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
     * Set accessTypeKey
     *
     * @param integer $accessTypeKey
     *
     * @return AccessControl
     */
    public function setAccessTypeKey($accessTypeKey)
    {
        $this->accessTypeKey = $accessTypeKey;

        return $this;
    }

    /**
     * Get accessTypeKey
     *
     * @return integer
     */
    public function getAccessTypeKey()
    {
        return $this->accessTypeKey;
    }

    /**
     * Set highLimitValue
     *
     * @param string $highLimitValue
     *
     * @return AccessControl
     */
    public function setHighLimitValue($highLimitValue)
    {
        $this->highLimitValue = $highLimitValue;

        return $this;
    }

    /**
     * Get highLimitValue
     *
     * @return string
     */
    public function getHighLimitValue()
    {
        return $this->highLimitValue;
    }

    /**
     * Set lowLimitValue
     *
     * @param string $lowLimitValue
     *
     * @return AccessControl
     */
    public function setLowLimitValue($lowLimitValue)
    {
        $this->lowLimitValue = $lowLimitValue;

        return $this;
    }

    /**
     * Get lowLimitValue
     *
     * @return string
     */
    public function getLowLimitValue()
    {
        return $this->lowLimitValue;
    }

    /**
     * Set highLimitPercent
     *
     * @param string $highLimitPercent
     *
     * @return AccessControl
     */
    public function setHighLimitPercent($highLimitPercent)
    {
        $this->highLimitPercent = $highLimitPercent;

        return $this;
    }

    /**
     * Get highLimitPercent
     *
     * @return string
     */
    public function getHighLimitPercent()
    {
        return $this->highLimitPercent;
    }

    /**
     * Set lowLimitPercent
     *
     * @param string $lowLimitPercent
     *
     * @return AccessControl
     */
    public function setLowLimitPercent($lowLimitPercent)
    {
        $this->lowLimitPercent = $lowLimitPercent;

        return $this;
    }

    /**
     * Get lowLimitPercent
     *
     * @return string
     */
    public function getLowLimitPercent()
    {
        return $this->lowLimitPercent;
    }

    /**
     * Set highLimitQuantity
     *
     * @param integer $highLimitQuantity
     *
     * @return AccessControl
     */
    public function setHighLimitQuantity($highLimitQuantity)
    {
        $this->highLimitQuantity = $highLimitQuantity;

        return $this;
    }

    /**
     * Get highLimitQuantity
     *
     * @return integer
     */
    public function getHighLimitQuantity()
    {
        return $this->highLimitQuantity;
    }
}
