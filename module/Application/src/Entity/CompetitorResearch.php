<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompetitorResearch
 *
 * @ORM\Table(name="competitor_research", indexes={@ORM\Index(name="index_research_key", columns={"research_key"}), @ORM\Index(name="index_research_competitor", columns={"store_key", "compet_key", "plu_key", "research_date", "research_key"})})
 * @ORM\Entity
 */
class CompetitorResearch
{
    /**
     * @var integer
     *
     * @ORM\Column(name="research_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $researchKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="compet_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $competKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pluKey;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $price;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="research_date", type="date", nullable=false)
     */
    private $researchDate;



    /**
     * Set researchKey
     *
     * @param integer $researchKey
     *
     * @return CompetitorResearch
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
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return CompetitorResearch
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
     * Set competKey
     *
     * @param integer $competKey
     *
     * @return CompetitorResearch
     */
    public function setCompetKey($competKey)
    {
        $this->competKey = $competKey;

        return $this;
    }

    /**
     * Get competKey
     *
     * @return integer
     */
    public function getCompetKey()
    {
        return $this->competKey;
    }

    /**
     * Set pluKey
     *
     * @param integer $pluKey
     *
     * @return CompetitorResearch
     */
    public function setPluKey($pluKey)
    {
        $this->pluKey = $pluKey;

        return $this;
    }

    /**
     * Get pluKey
     *
     * @return integer
     */
    public function getPluKey()
    {
        return $this->pluKey;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return CompetitorResearch
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set researchDate
     *
     * @param \DateTime $researchDate
     *
     * @return CompetitorResearch
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
}
