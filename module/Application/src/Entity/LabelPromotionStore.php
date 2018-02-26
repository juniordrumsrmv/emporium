<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LabelPromotionStore
 *
 * @ORM\Table(name="label_promotion_store")
 * @ORM\Entity
 */
class LabelPromotionStore
{
    /**
     * @var integer
     *
     * @ORM\Column(name="code", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $code;

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
     * @ORM\Column(name="label_quantity", type="integer", nullable=true)
     */
    private $labelQuantity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="label_printing_date", type="datetime", nullable=true)
     */
    private $labelPrintingDate;



    /**
     * Set code
     *
     * @param integer $code
     *
     * @return LabelPromotionStore
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return integer
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return LabelPromotionStore
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
     * Set labelQuantity
     *
     * @param integer $labelQuantity
     *
     * @return LabelPromotionStore
     */
    public function setLabelQuantity($labelQuantity)
    {
        $this->labelQuantity = $labelQuantity;

        return $this;
    }

    /**
     * Get labelQuantity
     *
     * @return integer
     */
    public function getLabelQuantity()
    {
        return $this->labelQuantity;
    }

    /**
     * Set labelPrintingDate
     *
     * @param \DateTime $labelPrintingDate
     *
     * @return LabelPromotionStore
     */
    public function setLabelPrintingDate($labelPrintingDate)
    {
        $this->labelPrintingDate = $labelPrintingDate;

        return $this;
    }

    /**
     * Get labelPrintingDate
     *
     * @return \DateTime
     */
    public function getLabelPrintingDate()
    {
        return $this->labelPrintingDate;
    }
}
