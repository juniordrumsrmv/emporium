<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LabelPromotion
 *
 * @ORM\Table(name="label_promotion")
 * @ORM\Entity
 */
class LabelPromotion
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
     * @ORM\Column(name="plu_id", type="bigint", nullable=false)
     */
    private $pluId;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $price;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start", type="datetime", nullable=true)
     */
    private $start;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finish", type="datetime", nullable=true)
     */
    private $finish;

    /**
     * @var integer
     *
     * @ORM\Column(name="reason_type_key", type="integer", nullable=true)
     */
    private $reasonTypeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=true)
     */
    private $storeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="label_sku", type="string", length=14, nullable=true)
     */
    private $labelSku;

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
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;



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
     * Set pluId
     *
     * @param integer $pluId
     *
     * @return LabelPromotion
     */
    public function setPluId($pluId)
    {
        $this->pluId = $pluId;

        return $this;
    }

    /**
     * Get pluId
     *
     * @return integer
     */
    public function getPluId()
    {
        return $this->pluId;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return LabelPromotion
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
     * Set start
     *
     * @param \DateTime $start
     *
     * @return LabelPromotion
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set finish
     *
     * @param \DateTime $finish
     *
     * @return LabelPromotion
     */
    public function setFinish($finish)
    {
        $this->finish = $finish;

        return $this;
    }

    /**
     * Get finish
     *
     * @return \DateTime
     */
    public function getFinish()
    {
        return $this->finish;
    }

    /**
     * Set reasonTypeKey
     *
     * @param integer $reasonTypeKey
     *
     * @return LabelPromotion
     */
    public function setReasonTypeKey($reasonTypeKey)
    {
        $this->reasonTypeKey = $reasonTypeKey;

        return $this;
    }

    /**
     * Get reasonTypeKey
     *
     * @return integer
     */
    public function getReasonTypeKey()
    {
        return $this->reasonTypeKey;
    }

    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return LabelPromotion
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
     * Set labelSku
     *
     * @param string $labelSku
     *
     * @return LabelPromotion
     */
    public function setLabelSku($labelSku)
    {
        $this->labelSku = $labelSku;

        return $this;
    }

    /**
     * Get labelSku
     *
     * @return string
     */
    public function getLabelSku()
    {
        return $this->labelSku;
    }

    /**
     * Set labelQuantity
     *
     * @param integer $labelQuantity
     *
     * @return LabelPromotion
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
     * @return LabelPromotion
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

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return LabelPromotion
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }
}
