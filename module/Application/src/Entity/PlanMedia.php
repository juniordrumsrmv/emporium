<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanMedia
 *
 * @ORM\Table(name="plan_media")
 * @ORM\Entity
 */
class PlanMedia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="plan_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $planKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mediaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_sub_id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mediaSubId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;



    /**
     * Set planKey
     *
     * @param integer $planKey
     *
     * @return PlanMedia
     */
    public function setPlanKey($planKey)
    {
        $this->planKey = $planKey;

        return $this;
    }

    /**
     * Get planKey
     *
     * @return integer
     */
    public function getPlanKey()
    {
        return $this->planKey;
    }

    /**
     * Set mediaId
     *
     * @param integer $mediaId
     *
     * @return PlanMedia
     */
    public function setMediaId($mediaId)
    {
        $this->mediaId = $mediaId;

        return $this;
    }

    /**
     * Get mediaId
     *
     * @return integer
     */
    public function getMediaId()
    {
        return $this->mediaId;
    }

    /**
     * Set mediaSubId
     *
     * @param integer $mediaSubId
     *
     * @return PlanMedia
     */
    public function setMediaSubId($mediaSubId)
    {
        $this->mediaSubId = $mediaSubId;

        return $this;
    }

    /**
     * Get mediaSubId
     *
     * @return integer
     */
    public function getMediaSubId()
    {
        return $this->mediaSubId;
    }

    /**
     * Set lastChangeTime
     *
     * @param \DateTime $lastChangeTime
     *
     * @return PlanMedia
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
}
