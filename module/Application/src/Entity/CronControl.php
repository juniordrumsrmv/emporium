<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CronControl
 *
 * @ORM\Table(name="cron_control", uniqueConstraints={@ORM\UniqueConstraint(name="index_entity_id", columns={"entity_key", "cronctl_reference_time", "cronctl_start_time"})})
 * @ORM\Entity
 */
class CronControl
{
    /**
     * @var integer
     *
     * @ORM\Column(name="entity_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $entityKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cronctl_reference_time", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cronctlReferenceTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cronctl_start_time", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cronctlStartTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cronctl_end_time", type="datetime", nullable=true)
     */
    private $cronctlEndTime;

    /**
     * @var string
     *
     * @ORM\Column(name="cronctl_output", type="string", length=255, nullable=true)
     */
    private $cronctlOutput;



    /**
     * Set entityKey
     *
     * @param integer $entityKey
     *
     * @return CronControl
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
     * Set cronctlReferenceTime
     *
     * @param \DateTime $cronctlReferenceTime
     *
     * @return CronControl
     */
    public function setCronctlReferenceTime($cronctlReferenceTime)
    {
        $this->cronctlReferenceTime = $cronctlReferenceTime;

        return $this;
    }

    /**
     * Get cronctlReferenceTime
     *
     * @return \DateTime
     */
    public function getCronctlReferenceTime()
    {
        return $this->cronctlReferenceTime;
    }

    /**
     * Set cronctlStartTime
     *
     * @param \DateTime $cronctlStartTime
     *
     * @return CronControl
     */
    public function setCronctlStartTime($cronctlStartTime)
    {
        $this->cronctlStartTime = $cronctlStartTime;

        return $this;
    }

    /**
     * Get cronctlStartTime
     *
     * @return \DateTime
     */
    public function getCronctlStartTime()
    {
        return $this->cronctlStartTime;
    }

    /**
     * Set cronctlEndTime
     *
     * @param \DateTime $cronctlEndTime
     *
     * @return CronControl
     */
    public function setCronctlEndTime($cronctlEndTime)
    {
        $this->cronctlEndTime = $cronctlEndTime;

        return $this;
    }

    /**
     * Get cronctlEndTime
     *
     * @return \DateTime
     */
    public function getCronctlEndTime()
    {
        return $this->cronctlEndTime;
    }

    /**
     * Set cronctlOutput
     *
     * @param string $cronctlOutput
     *
     * @return CronControl
     */
    public function setCronctlOutput($cronctlOutput)
    {
        $this->cronctlOutput = $cronctlOutput;

        return $this;
    }

    /**
     * Get cronctlOutput
     *
     * @return string
     */
    public function getCronctlOutput()
    {
        return $this->cronctlOutput;
    }
}
