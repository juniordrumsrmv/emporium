<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReturnConfig
 *
 * @ORM\Table(name="return_config")
 * @ORM\Entity
 */
class ReturnConfig
{
    /**
     * @var integer
     *
     * @ORM\Column(name="return_type", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $returnType;

    /**
     * @var integer
     *
     * @ORM\Column(name="record_return_control", type="smallint", nullable=true)
     */
    private $recordReturnControl;

    /**
     * @var integer
     *
     * @ORM\Column(name="record_sale", type="smallint", nullable=true)
     */
    private $recordSale;

    /**
     * @var integer
     *
     * @ORM\Column(name="issue_customer_print", type="smallint", nullable=true)
     */
    private $issueCustomerPrint;

    /**
     * @var integer
     *
     * @ORM\Column(name="show_amount_print", type="smallint", nullable=true)
     */
    private $showAmountPrint;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="return_status", type="smallint", nullable=true)
     */
    private $returnStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="return_barcode", type="smallint", nullable=true)
     */
    private $returnBarcode;

    /**
     * @var integer
     *
     * @ORM\Column(name="return_layout", type="smallint", nullable=true)
     */
    private $returnLayout;



    /**
     * Get returnType
     *
     * @return integer
     */
    public function getReturnType()
    {
        return $this->returnType;
    }

    /**
     * Set recordReturnControl
     *
     * @param integer $recordReturnControl
     *
     * @return ReturnConfig
     */
    public function setRecordReturnControl($recordReturnControl)
    {
        $this->recordReturnControl = $recordReturnControl;

        return $this;
    }

    /**
     * Get recordReturnControl
     *
     * @return integer
     */
    public function getRecordReturnControl()
    {
        return $this->recordReturnControl;
    }

    /**
     * Set recordSale
     *
     * @param integer $recordSale
     *
     * @return ReturnConfig
     */
    public function setRecordSale($recordSale)
    {
        $this->recordSale = $recordSale;

        return $this;
    }

    /**
     * Get recordSale
     *
     * @return integer
     */
    public function getRecordSale()
    {
        return $this->recordSale;
    }

    /**
     * Set issueCustomerPrint
     *
     * @param integer $issueCustomerPrint
     *
     * @return ReturnConfig
     */
    public function setIssueCustomerPrint($issueCustomerPrint)
    {
        $this->issueCustomerPrint = $issueCustomerPrint;

        return $this;
    }

    /**
     * Get issueCustomerPrint
     *
     * @return integer
     */
    public function getIssueCustomerPrint()
    {
        return $this->issueCustomerPrint;
    }

    /**
     * Set showAmountPrint
     *
     * @param integer $showAmountPrint
     *
     * @return ReturnConfig
     */
    public function setShowAmountPrint($showAmountPrint)
    {
        $this->showAmountPrint = $showAmountPrint;

        return $this;
    }

    /**
     * Get showAmountPrint
     *
     * @return integer
     */
    public function getShowAmountPrint()
    {
        return $this->showAmountPrint;
    }

    /**
     * Set lastChangeTime
     *
     * @param \DateTime $lastChangeTime
     *
     * @return ReturnConfig
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
     * Set returnStatus
     *
     * @param integer $returnStatus
     *
     * @return ReturnConfig
     */
    public function setReturnStatus($returnStatus)
    {
        $this->returnStatus = $returnStatus;

        return $this;
    }

    /**
     * Get returnStatus
     *
     * @return integer
     */
    public function getReturnStatus()
    {
        return $this->returnStatus;
    }

    /**
     * Set returnBarcode
     *
     * @param integer $returnBarcode
     *
     * @return ReturnConfig
     */
    public function setReturnBarcode($returnBarcode)
    {
        $this->returnBarcode = $returnBarcode;

        return $this;
    }

    /**
     * Get returnBarcode
     *
     * @return integer
     */
    public function getReturnBarcode()
    {
        return $this->returnBarcode;
    }

    /**
     * Set returnLayout
     *
     * @param integer $returnLayout
     *
     * @return ReturnConfig
     */
    public function setReturnLayout($returnLayout)
    {
        $this->returnLayout = $returnLayout;

        return $this;
    }

    /**
     * Get returnLayout
     *
     * @return integer
     */
    public function getReturnLayout()
    {
        return $this->returnLayout;
    }
}
