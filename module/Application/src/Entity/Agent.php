<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agent
 *
 * @ORM\Table(name="agent", uniqueConstraints={@ORM\UniqueConstraint(name="index_agent_id", columns={"agent_type", "id"})})
 * @ORM\Entity
 */
class Agent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="agent_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $agentKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="agent_type", type="integer", nullable=false)
     */
    private $agentType;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=16, nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="remark", type="string", length=255, nullable=true)
     */
    private $remark;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sub_type", type="boolean", nullable=true)
     */
    private $subType;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pos_send_group", type="boolean", nullable=true)
     */
    private $posSendGroup = '0';



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
     * Set agentType
     *
     * @param integer $agentType
     *
     * @return Agent
     */
    public function setAgentType($agentType)
    {
        $this->agentType = $agentType;

        return $this;
    }

    /**
     * Get agentType
     *
     * @return integer
     */
    public function getAgentType()
    {
        return $this->agentType;
    }

    /**
     * Set id
     *
     * @param string $id
     *
     * @return Agent
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Agent
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set remark
     *
     * @param string $remark
     *
     * @return Agent
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;

        return $this;
    }

    /**
     * Get remark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Set subType
     *
     * @param boolean $subType
     *
     * @return Agent
     */
    public function setSubType($subType)
    {
        $this->subType = $subType;

        return $this;
    }

    /**
     * Get subType
     *
     * @return boolean
     */
    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * Set posSendGroup
     *
     * @param boolean $posSendGroup
     *
     * @return Agent
     */
    public function setPosSendGroup($posSendGroup)
    {
        $this->posSendGroup = $posSendGroup;

        return $this;
    }

    /**
     * Get posSendGroup
     *
     * @return boolean
     */
    public function getPosSendGroup()
    {
        return $this->posSendGroup;
    }
}
