<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DiscountType
 *
 * @ORM\Table(name="discount_type")
 * @ORM\Entity
 */
class DiscountType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="dst_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dstKey;

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
     * @ORM\Column(name="dst_start_time", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dstStartTime;

    /**
     * @var string
     *
     * @ORM\Column(name="dst_name", type="string", length=60, nullable=false)
     */
    private $dstName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dst_application", type="boolean", nullable=true)
     */
    private $dstApplication;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dst_mec", type="boolean", nullable=true)
     */
    private $dstMec;

    /**
     * @var string
     *
     * @ORM\Column(name="dst_min_quantity", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $dstMinQuantity;

    /**
     * @var string
     *
     * @ORM\Column(name="dst_max_percent", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $dstMaxPercent;

    /**
     * @var string
     *
     * @ORM\Column(name="dst_max_value", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $dstMaxValue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dst_end_time", type="datetime", nullable=true)
     */
    private $dstEndTime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dst_accum_item", type="boolean", nullable=true)
     */
    private $dstAccumItem;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dst_accum_subtotal", type="boolean", nullable=true)
     */
    private $dstAccumSubtotal;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dst_restriction", type="boolean", nullable=true)
     */
    private $dstRestriction;

    /**
     * @var string
     *
     * @ORM\Column(name="dst_max_accum_value", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $dstMaxAccumValue;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dst_ind_exceed", type="boolean", nullable=true)
     */
    private $dstIndExceed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dst_show_accum", type="boolean", nullable=true)
     */
    private $dstShowAccum;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dst_error_correction", type="boolean", nullable=true)
     */
    private $dstErrorCorrection;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dst_ind_kit", type="boolean", nullable=true)
     */
    private $dstIndKit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dst_ind_bonus", type="boolean", nullable=true)
     */
    private $dstIndBonus;

    /**
     * @var integer
     *
     * @ORM\Column(name="authorizer_key", type="bigint", nullable=true)
     */
    private $authorizerKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dst_require_prev_aut", type="boolean", nullable=true)
     */
    private $dstRequirePrevAut;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dst_dismissal_prev_aut", type="boolean", nullable=true)
     */
    private $dstDismissalPrevAut;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dst_customer_require", type="boolean", nullable=true)
     */
    private $dstCustomerRequire;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dst_quant_receipt", type="boolean", nullable=true)
     */
    private $dstQuantReceipt;



    /**
     * Set dstKey
     *
     * @param integer $dstKey
     *
     * @return DiscountType
     */
    public function setDstKey($dstKey)
    {
        $this->dstKey = $dstKey;

        return $this;
    }

    /**
     * Get dstKey
     *
     * @return integer
     */
    public function getDstKey()
    {
        return $this->dstKey;
    }

    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return DiscountType
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
     * Set dstStartTime
     *
     * @param \DateTime $dstStartTime
     *
     * @return DiscountType
     */
    public function setDstStartTime($dstStartTime)
    {
        $this->dstStartTime = $dstStartTime;

        return $this;
    }

    /**
     * Get dstStartTime
     *
     * @return \DateTime
     */
    public function getDstStartTime()
    {
        return $this->dstStartTime;
    }

    /**
     * Set dstName
     *
     * @param string $dstName
     *
     * @return DiscountType
     */
    public function setDstName($dstName)
    {
        $this->dstName = $dstName;

        return $this;
    }

    /**
     * Get dstName
     *
     * @return string
     */
    public function getDstName()
    {
        return $this->dstName;
    }

    /**
     * Set dstApplication
     *
     * @param boolean $dstApplication
     *
     * @return DiscountType
     */
    public function setDstApplication($dstApplication)
    {
        $this->dstApplication = $dstApplication;

        return $this;
    }

    /**
     * Get dstApplication
     *
     * @return boolean
     */
    public function getDstApplication()
    {
        return $this->dstApplication;
    }

    /**
     * Set dstMec
     *
     * @param boolean $dstMec
     *
     * @return DiscountType
     */
    public function setDstMec($dstMec)
    {
        $this->dstMec = $dstMec;

        return $this;
    }

    /**
     * Get dstMec
     *
     * @return boolean
     */
    public function getDstMec()
    {
        return $this->dstMec;
    }

    /**
     * Set dstMinQuantity
     *
     * @param string $dstMinQuantity
     *
     * @return DiscountType
     */
    public function setDstMinQuantity($dstMinQuantity)
    {
        $this->dstMinQuantity = $dstMinQuantity;

        return $this;
    }

    /**
     * Get dstMinQuantity
     *
     * @return string
     */
    public function getDstMinQuantity()
    {
        return $this->dstMinQuantity;
    }

    /**
     * Set dstMaxPercent
     *
     * @param string $dstMaxPercent
     *
     * @return DiscountType
     */
    public function setDstMaxPercent($dstMaxPercent)
    {
        $this->dstMaxPercent = $dstMaxPercent;

        return $this;
    }

    /**
     * Get dstMaxPercent
     *
     * @return string
     */
    public function getDstMaxPercent()
    {
        return $this->dstMaxPercent;
    }

    /**
     * Set dstMaxValue
     *
     * @param string $dstMaxValue
     *
     * @return DiscountType
     */
    public function setDstMaxValue($dstMaxValue)
    {
        $this->dstMaxValue = $dstMaxValue;

        return $this;
    }

    /**
     * Get dstMaxValue
     *
     * @return string
     */
    public function getDstMaxValue()
    {
        return $this->dstMaxValue;
    }

    /**
     * Set dstEndTime
     *
     * @param \DateTime $dstEndTime
     *
     * @return DiscountType
     */
    public function setDstEndTime($dstEndTime)
    {
        $this->dstEndTime = $dstEndTime;

        return $this;
    }

    /**
     * Get dstEndTime
     *
     * @return \DateTime
     */
    public function getDstEndTime()
    {
        return $this->dstEndTime;
    }

    /**
     * Set dstAccumItem
     *
     * @param boolean $dstAccumItem
     *
     * @return DiscountType
     */
    public function setDstAccumItem($dstAccumItem)
    {
        $this->dstAccumItem = $dstAccumItem;

        return $this;
    }

    /**
     * Get dstAccumItem
     *
     * @return boolean
     */
    public function getDstAccumItem()
    {
        return $this->dstAccumItem;
    }

    /**
     * Set dstAccumSubtotal
     *
     * @param boolean $dstAccumSubtotal
     *
     * @return DiscountType
     */
    public function setDstAccumSubtotal($dstAccumSubtotal)
    {
        $this->dstAccumSubtotal = $dstAccumSubtotal;

        return $this;
    }

    /**
     * Get dstAccumSubtotal
     *
     * @return boolean
     */
    public function getDstAccumSubtotal()
    {
        return $this->dstAccumSubtotal;
    }

    /**
     * Set dstRestriction
     *
     * @param boolean $dstRestriction
     *
     * @return DiscountType
     */
    public function setDstRestriction($dstRestriction)
    {
        $this->dstRestriction = $dstRestriction;

        return $this;
    }

    /**
     * Get dstRestriction
     *
     * @return boolean
     */
    public function getDstRestriction()
    {
        return $this->dstRestriction;
    }

    /**
     * Set dstMaxAccumValue
     *
     * @param string $dstMaxAccumValue
     *
     * @return DiscountType
     */
    public function setDstMaxAccumValue($dstMaxAccumValue)
    {
        $this->dstMaxAccumValue = $dstMaxAccumValue;

        return $this;
    }

    /**
     * Get dstMaxAccumValue
     *
     * @return string
     */
    public function getDstMaxAccumValue()
    {
        return $this->dstMaxAccumValue;
    }

    /**
     * Set dstIndExceed
     *
     * @param boolean $dstIndExceed
     *
     * @return DiscountType
     */
    public function setDstIndExceed($dstIndExceed)
    {
        $this->dstIndExceed = $dstIndExceed;

        return $this;
    }

    /**
     * Get dstIndExceed
     *
     * @return boolean
     */
    public function getDstIndExceed()
    {
        return $this->dstIndExceed;
    }

    /**
     * Set dstShowAccum
     *
     * @param boolean $dstShowAccum
     *
     * @return DiscountType
     */
    public function setDstShowAccum($dstShowAccum)
    {
        $this->dstShowAccum = $dstShowAccum;

        return $this;
    }

    /**
     * Get dstShowAccum
     *
     * @return boolean
     */
    public function getDstShowAccum()
    {
        return $this->dstShowAccum;
    }

    /**
     * Set dstErrorCorrection
     *
     * @param boolean $dstErrorCorrection
     *
     * @return DiscountType
     */
    public function setDstErrorCorrection($dstErrorCorrection)
    {
        $this->dstErrorCorrection = $dstErrorCorrection;

        return $this;
    }

    /**
     * Get dstErrorCorrection
     *
     * @return boolean
     */
    public function getDstErrorCorrection()
    {
        return $this->dstErrorCorrection;
    }

    /**
     * Set dstIndKit
     *
     * @param boolean $dstIndKit
     *
     * @return DiscountType
     */
    public function setDstIndKit($dstIndKit)
    {
        $this->dstIndKit = $dstIndKit;

        return $this;
    }

    /**
     * Get dstIndKit
     *
     * @return boolean
     */
    public function getDstIndKit()
    {
        return $this->dstIndKit;
    }

    /**
     * Set dstIndBonus
     *
     * @param boolean $dstIndBonus
     *
     * @return DiscountType
     */
    public function setDstIndBonus($dstIndBonus)
    {
        $this->dstIndBonus = $dstIndBonus;

        return $this;
    }

    /**
     * Get dstIndBonus
     *
     * @return boolean
     */
    public function getDstIndBonus()
    {
        return $this->dstIndBonus;
    }

    /**
     * Set authorizerKey
     *
     * @param integer $authorizerKey
     *
     * @return DiscountType
     */
    public function setAuthorizerKey($authorizerKey)
    {
        $this->authorizerKey = $authorizerKey;

        return $this;
    }

    /**
     * Get authorizerKey
     *
     * @return integer
     */
    public function getAuthorizerKey()
    {
        return $this->authorizerKey;
    }

    /**
     * Set dstRequirePrevAut
     *
     * @param boolean $dstRequirePrevAut
     *
     * @return DiscountType
     */
    public function setDstRequirePrevAut($dstRequirePrevAut)
    {
        $this->dstRequirePrevAut = $dstRequirePrevAut;

        return $this;
    }

    /**
     * Get dstRequirePrevAut
     *
     * @return boolean
     */
    public function getDstRequirePrevAut()
    {
        return $this->dstRequirePrevAut;
    }

    /**
     * Set dstDismissalPrevAut
     *
     * @param boolean $dstDismissalPrevAut
     *
     * @return DiscountType
     */
    public function setDstDismissalPrevAut($dstDismissalPrevAut)
    {
        $this->dstDismissalPrevAut = $dstDismissalPrevAut;

        return $this;
    }

    /**
     * Get dstDismissalPrevAut
     *
     * @return boolean
     */
    public function getDstDismissalPrevAut()
    {
        return $this->dstDismissalPrevAut;
    }

    /**
     * Set dstCustomerRequire
     *
     * @param boolean $dstCustomerRequire
     *
     * @return DiscountType
     */
    public function setDstCustomerRequire($dstCustomerRequire)
    {
        $this->dstCustomerRequire = $dstCustomerRequire;

        return $this;
    }

    /**
     * Get dstCustomerRequire
     *
     * @return boolean
     */
    public function getDstCustomerRequire()
    {
        return $this->dstCustomerRequire;
    }

    /**
     * Set dstQuantReceipt
     *
     * @param boolean $dstQuantReceipt
     *
     * @return DiscountType
     */
    public function setDstQuantReceipt($dstQuantReceipt)
    {
        $this->dstQuantReceipt = $dstQuantReceipt;

        return $this;
    }

    /**
     * Get dstQuantReceipt
     *
     * @return boolean
     */
    public function getDstQuantReceipt()
    {
        return $this->dstQuantReceipt;
    }
}
