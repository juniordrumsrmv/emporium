<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Poll
 *
 * @ORM\Table(name="poll")
 * @ORM\Entity
 */
class Poll
{
    /**
     * @var integer
     *
     * @ORM\Column(name="poll_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pollKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="poll_type", type="boolean", nullable=true)
     */
    private $pollType;

    /**
     * @var string
     *
     * @ORM\Column(name="poll_name", type="string", length=255, nullable=true)
     */
    private $pollName;

    /**
     * @var string
     *
     * @ORM\Column(name="poll_display_name", type="string", length=255, nullable=true)
     */
    private $pollDisplayName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=true)
     */
    private $startTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finish_time", type="datetime", nullable=true)
     */
    private $finishTime;



    /**
     * Get pollKey
     *
     * @return integer
     */
    public function getPollKey()
    {
        return $this->pollKey;
    }

    /**
     * Set pollType
     *
     * @param boolean $pollType
     *
     * @return Poll
     */
    public function setPollType($pollType)
    {
        $this->pollType = $pollType;

        return $this;
    }

    /**
     * Get pollType
     *
     * @return boolean
     */
    public function getPollType()
    {
        return $this->pollType;
    }

    /**
     * Set pollName
     *
     * @param string $pollName
     *
     * @return Poll
     */
    public function setPollName($pollName)
    {
        $this->pollName = $pollName;

        return $this;
    }

    /**
     * Get pollName
     *
     * @return string
     */
    public function getPollName()
    {
        return $this->pollName;
    }

    /**
     * Set pollDisplayName
     *
     * @param string $pollDisplayName
     *
     * @return Poll
     */
    public function setPollDisplayName($pollDisplayName)
    {
        $this->pollDisplayName = $pollDisplayName;

        return $this;
    }

    /**
     * Get pollDisplayName
     *
     * @return string
     */
    public function getPollDisplayName()
    {
        return $this->pollDisplayName;
    }

    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return Poll
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set finishTime
     *
     * @param \DateTime $finishTime
     *
     * @return Poll
     */
    public function setFinishTime($finishTime)
    {
        $this->finishTime = $finishTime;

        return $this;
    }

    /**
     * Get finishTime
     *
     * @return \DateTime
     */
    public function getFinishTime()
    {
        return $this->finishTime;
    }
}
