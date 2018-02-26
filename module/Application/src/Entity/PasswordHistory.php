<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PasswordHistory
 *
 * @ORM\Table(name="password_history")
 * @ORM\Entity
 */
class PasswordHistory
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
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $lastChangeTime;

    /**
     * @var string
     *
     * @ORM\Column(name="cript_password", type="string", length=50, nullable=true)
     */
    private $criptPassword;



    /**
     * Set agentKey
     *
     * @param integer $agentKey
     *
     * @return PasswordHistory
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
     * Set lastChangeTime
     *
     * @param \DateTime $lastChangeTime
     *
     * @return PasswordHistory
     */
    public function setLastChangeTime($lastChangeTime)
    {
        $this->lastChangeTime = $lastChangeTime;

        return $this;
    }

    /**
     * Get lastChangeTime
     *
     * @return \DateTime
     */
    public function getLastChangeTime()
    {
        return $this->lastChangeTime;
    }

    /**
     * Set criptPassword
     *
     * @param string $criptPassword
     *
     * @return PasswordHistory
     */
    public function setCriptPassword($criptPassword)
    {
        $this->criptPassword = $criptPassword;

        return $this;
    }

    /**
     * Get criptPassword
     *
     * @return string
     */
    public function getCriptPassword()
    {
        return $this->criptPassword;
    }
}
