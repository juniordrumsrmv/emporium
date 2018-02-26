<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Research
 *
 * @ORM\Table(name="research", indexes={@ORM\Index(name="index_research_name", columns={"store_key", "research_name"}), @ORM\Index(name="index_research_key", columns={"research_key"})})
 * @ORM\Entity
 */
class Research
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $storeKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="research_date", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $researchDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="research_type", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $researchType;

    /**
     * @var integer
     *
     * @ORM\Column(name="research_key", type="bigint", nullable=false)
     */
    private $researchKey;

    /**
     * @var string
     *
     * @ORM\Column(name="research_name", type="string", length=50, nullable=false)
     */
    private $researchName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="research_status", type="boolean", nullable=true)
     */
    private $researchStatus;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return Research
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

    /**
     * Set researchDate
     *
     * @param \DateTime $researchDate
     *
     * @return Research
     */
    public function setResearchDate($researchDate)
    {
        $this->researchDate = $researchDate;

        return $this;
    }

    /**
     * Get researchDate
     *
     * @return \DateTime
     */
    public function getResearchDate()
    {
        return $this->researchDate;
    }

    /**
     * Set researchType
     *
     * @param boolean $researchType
     *
     * @return Research
     */
    public function setResearchType($researchType)
    {
        $this->researchType = $researchType;

        return $this;
    }

    /**
     * Get researchType
     *
     * @return boolean
     */
    public function getResearchType()
    {
        return $this->researchType;
    }

    /**
     * Set researchKey
     *
     * @param integer $researchKey
     *
     * @return Research
     */
    public function setResearchKey($researchKey)
    {
        $this->researchKey = $researchKey;

        return $this;
    }

    /**
     * Get researchKey
     *
     * @return integer
     */
    public function getResearchKey()
    {
        return $this->researchKey;
    }

    /**
     * Set researchName
     *
     * @param string $researchName
     *
     * @return Research
     */
    public function setResearchName($researchName)
    {
        $this->researchName = $researchName;

        return $this;
    }

    /**
     * Get researchName
     *
     * @return string
     */
    public function getResearchName()
    {
        return $this->researchName;
    }

    /**
     * Set researchStatus
     *
     * @param boolean $researchStatus
     *
     * @return Research
     */
    public function setResearchStatus($researchStatus)
    {
        $this->researchStatus = $researchStatus;

        return $this;
    }

    /**
     * Get researchStatus
     *
     * @return boolean
     */
    public function getResearchStatus()
    {
        return $this->researchStatus;
    }
}
