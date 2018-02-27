<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BankingLocationAmount
 *
 * @ORM\Table(name="banking_location_amount", indexes={@ORM\Index(name="index_banking_location_amount_1", columns={"location_key", "reference_date", "extended_media_id"})})
 * @ORM\Entity
 */
class BankingLocationAmount
{
    /**
     * @var integer
     *
     * @ORM\Column(name="location_key", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $locationKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reference_date", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $referenceDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mediaId;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_added", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amountAdded;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_subtracted", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amountSubtracted;

    /**
     * @var integer
     *
     * @ORM\Column(name="extended_media_id", type="smallint", nullable=true)
     */
    private $extendedMediaId;



    /**
     * Set locationKey
     *
     * @param integer $locationKey
     *
     * @return BankingLocationAmount
     */
    public function setLocationKey($locationKey)
    {
        $this->locationKey = $locationKey;

        return $this;
    }

    /**
     * Get locationKey
     *
     * @return integer
     */
    public function getLocationKey()
    {
        return $this->locationKey;
    }

    /**
     * Set referenceDate
     *
     * @param \DateTime $referenceDate
     *
     * @return BankingLocationAmount
     */
    public function setReferenceDate($referenceDate)
    {
        $this->referenceDate = $referenceDate;

        return $this;
    }

    /**
     * Get referenceDate
     *
     * @return \DateTime
     */
    public function getReferenceDate()
    {
        return $this->referenceDate;
    }

    /**
     * Set mediaId
     *
     * @param integer $mediaId
     *
     * @return BankingLocationAmount
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
     * Set amountAdded
     *
     * @param string $amountAdded
     *
     * @return BankingLocationAmount
     */
    public function setAmountAdded($amountAdded)
    {
        $this->amountAdded = $amountAdded;

        return $this;
    }

    /**
     * Get amountAdded
     *
     * @return string
     */
    public function getAmountAdded()
    {
        return $this->amountAdded;
    }

    /**
     * Set amountSubtracted
     *
     * @param string $amountSubtracted
     *
     * @return BankingLocationAmount
     */
    public function setAmountSubtracted($amountSubtracted)
    {
        $this->amountSubtracted = $amountSubtracted;

        return $this;
    }

    /**
     * Get amountSubtracted
     *
     * @return string
     */
    public function getAmountSubtracted()
    {
        return $this->amountSubtracted;
    }

    /**
     * Set extendedMediaId
     *
     * @param integer $extendedMediaId
     *
     * @return BankingLocationAmount
     */
    public function setExtendedMediaId($extendedMediaId)
    {
        $this->extendedMediaId = $extendedMediaId;

        return $this;
    }

    /**
     * Get extendedMediaId
     *
     * @return integer
     */
    public function getExtendedMediaId()
    {
        return $this->extendedMediaId;
    }
}
