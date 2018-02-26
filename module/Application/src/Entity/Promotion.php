<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotion
 *
 * @ORM\Table(name="promotion")
 * @ORM\Entity
 */
class Promotion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="promotion_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $promotionKey;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

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
     * @ORM\Column(name="promotion_type", type="smallint", nullable=true)
     */
    private $promotionType;

    /**
     * @var integer
     *
     * @ORM\Column(name="promotion_mode", type="smallint", nullable=true)
     */
    private $promotionMode;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_min", type="bigint", nullable=true)
     */
    private $quantityMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_lim", type="bigint", nullable=true)
     */
    private $quantityLim;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_max", type="bigint", nullable=true)
     */
    private $quantityMax;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amount;

    /**
     * @var integer
     *
     * @ORM\Column(name="extra_ticket_type_key", type="smallint", nullable=true)
     */
    private $extraTicketTypeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_id", type="smallint", nullable=true)
     */
    private $mediaId;

    /**
     * @var string
     *
     * @ORM\Column(name="promotion_header", type="string", length=250, nullable=true)
     */
    private $promotionHeader;

    /**
     * @var string
     *
     * @ORM\Column(name="promotion_message", type="string", length=250, nullable=true)
     */
    private $promotionMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="promotion_command", type="string", length=250, nullable=true)
     */
    private $promotionCommand;

    /**
     * @var string
     *
     * @ORM\Column(name="points", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $points;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @var boolean
     *
     * @ORM\Column(name="md_partial", type="boolean", nullable=true)
     */
    private $mdPartial;

    /**
     * @var string
     *
     * @ORM\Column(name="discount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $discount;

    /**
     * @var integer
     *
     * @ORM\Column(name="flag_discount", type="smallint", nullable=true)
     */
    private $flagDiscount = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="reason_type_key", type="integer", nullable=true)
     */
    private $reasonTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="option_01", type="string", length=250, nullable=true)
     */
    private $option01;

    /**
     * @var string
     *
     * @ORM\Column(name="option_02", type="string", length=250, nullable=true)
     */
    private $option02;

    /**
     * @var string
     *
     * @ORM\Column(name="option_03", type="string", length=250, nullable=true)
     */
    private $option03;

    /**
     * @var string
     *
     * @ORM\Column(name="option_04", type="string", length=250, nullable=true)
     */
    private $option04;

    /**
     * @var string
     *
     * @ORM\Column(name="option_05", type="string", length=250, nullable=true)
     */
    private $option05;

    /**
     * @var string
     *
     * @ORM\Column(name="option_06", type="string", length=250, nullable=true)
     */
    private $option06;

    /**
     * @var string
     *
     * @ORM\Column(name="option_07", type="string", length=250, nullable=true)
     */
    private $option07;

    /**
     * @var string
     *
     * @ORM\Column(name="option_08", type="string", length=250, nullable=true)
     */
    private $option08;

    /**
     * @var string
     *
     * @ORM\Column(name="option_09", type="string", length=250, nullable=true)
     */
    private $option09;

    /**
     * @var string
     *
     * @ORM\Column(name="option_10", type="string", length=250, nullable=true)
     */
    private $option10;

    /**
     * @var string
     *
     * @ORM\Column(name="option_11", type="string", length=250, nullable=true)
     */
    private $option11;

    /**
     * @var string
     *
     * @ORM\Column(name="option_12", type="string", length=250, nullable=true)
     */
    private $option12;

    /**
     * @var string
     *
     * @ORM\Column(name="option_13", type="string", length=250, nullable=true)
     */
    private $option13;

    /**
     * @var string
     *
     * @ORM\Column(name="option_14", type="string", length=250, nullable=true)
     */
    private $option14;

    /**
     * @var string
     *
     * @ORM\Column(name="option_15", type="string", length=250, nullable=true)
     */
    private $option15;

    /**
     * @var string
     *
     * @ORM\Column(name="option_16", type="string", length=250, nullable=true)
     */
    private $option16;

    /**
     * @var string
     *
     * @ORM\Column(name="option_17", type="string", length=250, nullable=true)
     */
    private $option17;

    /**
     * @var string
     *
     * @ORM\Column(name="option_18", type="string", length=250, nullable=true)
     */
    private $option18;

    /**
     * @var string
     *
     * @ORM\Column(name="option_19", type="string", length=250, nullable=true)
     */
    private $option19;

    /**
     * @var string
     *
     * @ORM\Column(name="option_20", type="string", length=250, nullable=true)
     */
    private $option20;



    /**
     * Get promotionKey
     *
     * @return integer
     */
    public function getPromotionKey()
    {
        return $this->promotionKey;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Promotion
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set start
     *
     * @param \DateTime $start
     *
     * @return Promotion
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
     * @return Promotion
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
     * Set promotionType
     *
     * @param integer $promotionType
     *
     * @return Promotion
     */
    public function setPromotionType($promotionType)
    {
        $this->promotionType = $promotionType;

        return $this;
    }

    /**
     * Get promotionType
     *
     * @return integer
     */
    public function getPromotionType()
    {
        return $this->promotionType;
    }

    /**
     * Set promotionMode
     *
     * @param integer $promotionMode
     *
     * @return Promotion
     */
    public function setPromotionMode($promotionMode)
    {
        $this->promotionMode = $promotionMode;

        return $this;
    }

    /**
     * Get promotionMode
     *
     * @return integer
     */
    public function getPromotionMode()
    {
        return $this->promotionMode;
    }

    /**
     * Set quantityMin
     *
     * @param integer $quantityMin
     *
     * @return Promotion
     */
    public function setQuantityMin($quantityMin)
    {
        $this->quantityMin = $quantityMin;

        return $this;
    }

    /**
     * Get quantityMin
     *
     * @return integer
     */
    public function getQuantityMin()
    {
        return $this->quantityMin;
    }

    /**
     * Set quantityLim
     *
     * @param integer $quantityLim
     *
     * @return Promotion
     */
    public function setQuantityLim($quantityLim)
    {
        $this->quantityLim = $quantityLim;

        return $this;
    }

    /**
     * Get quantityLim
     *
     * @return integer
     */
    public function getQuantityLim()
    {
        return $this->quantityLim;
    }

    /**
     * Set quantityMax
     *
     * @param integer $quantityMax
     *
     * @return Promotion
     */
    public function setQuantityMax($quantityMax)
    {
        $this->quantityMax = $quantityMax;

        return $this;
    }

    /**
     * Get quantityMax
     *
     * @return integer
     */
    public function getQuantityMax()
    {
        return $this->quantityMax;
    }

    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return Promotion
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set extraTicketTypeKey
     *
     * @param integer $extraTicketTypeKey
     *
     * @return Promotion
     */
    public function setExtraTicketTypeKey($extraTicketTypeKey)
    {
        $this->extraTicketTypeKey = $extraTicketTypeKey;

        return $this;
    }

    /**
     * Get extraTicketTypeKey
     *
     * @return integer
     */
    public function getExtraTicketTypeKey()
    {
        return $this->extraTicketTypeKey;
    }

    /**
     * Set mediaId
     *
     * @param integer $mediaId
     *
     * @return Promotion
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
     * Set promotionHeader
     *
     * @param string $promotionHeader
     *
     * @return Promotion
     */
    public function setPromotionHeader($promotionHeader)
    {
        $this->promotionHeader = $promotionHeader;

        return $this;
    }

    /**
     * Get promotionHeader
     *
     * @return string
     */
    public function getPromotionHeader()
    {
        return $this->promotionHeader;
    }

    /**
     * Set promotionMessage
     *
     * @param string $promotionMessage
     *
     * @return Promotion
     */
    public function setPromotionMessage($promotionMessage)
    {
        $this->promotionMessage = $promotionMessage;

        return $this;
    }

    /**
     * Get promotionMessage
     *
     * @return string
     */
    public function getPromotionMessage()
    {
        return $this->promotionMessage;
    }

    /**
     * Set promotionCommand
     *
     * @param string $promotionCommand
     *
     * @return Promotion
     */
    public function setPromotionCommand($promotionCommand)
    {
        $this->promotionCommand = $promotionCommand;

        return $this;
    }

    /**
     * Get promotionCommand
     *
     * @return string
     */
    public function getPromotionCommand()
    {
        return $this->promotionCommand;
    }

    /**
     * Set points
     *
     * @param string $points
     *
     * @return Promotion
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return string
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Promotion
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set mdPartial
     *
     * @param boolean $mdPartial
     *
     * @return Promotion
     */
    public function setMdPartial($mdPartial)
    {
        $this->mdPartial = $mdPartial;

        return $this;
    }

    /**
     * Get mdPartial
     *
     * @return boolean
     */
    public function getMdPartial()
    {
        return $this->mdPartial;
    }

    /**
     * Set discount
     *
     * @param string $discount
     *
     * @return Promotion
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return string
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set flagDiscount
     *
     * @param integer $flagDiscount
     *
     * @return Promotion
     */
    public function setFlagDiscount($flagDiscount)
    {
        $this->flagDiscount = $flagDiscount;

        return $this;
    }

    /**
     * Get flagDiscount
     *
     * @return integer
     */
    public function getFlagDiscount()
    {
        return $this->flagDiscount;
    }

    /**
     * Set reasonTypeKey
     *
     * @param integer $reasonTypeKey
     *
     * @return Promotion
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
     * Set option01
     *
     * @param string $option01
     *
     * @return Promotion
     */
    public function setOption01($option01)
    {
        $this->option01 = $option01;

        return $this;
    }

    /**
     * Get option01
     *
     * @return string
     */
    public function getOption01()
    {
        return $this->option01;
    }

    /**
     * Set option02
     *
     * @param string $option02
     *
     * @return Promotion
     */
    public function setOption02($option02)
    {
        $this->option02 = $option02;

        return $this;
    }

    /**
     * Get option02
     *
     * @return string
     */
    public function getOption02()
    {
        return $this->option02;
    }

    /**
     * Set option03
     *
     * @param string $option03
     *
     * @return Promotion
     */
    public function setOption03($option03)
    {
        $this->option03 = $option03;

        return $this;
    }

    /**
     * Get option03
     *
     * @return string
     */
    public function getOption03()
    {
        return $this->option03;
    }

    /**
     * Set option04
     *
     * @param string $option04
     *
     * @return Promotion
     */
    public function setOption04($option04)
    {
        $this->option04 = $option04;

        return $this;
    }

    /**
     * Get option04
     *
     * @return string
     */
    public function getOption04()
    {
        return $this->option04;
    }

    /**
     * Set option05
     *
     * @param string $option05
     *
     * @return Promotion
     */
    public function setOption05($option05)
    {
        $this->option05 = $option05;

        return $this;
    }

    /**
     * Get option05
     *
     * @return string
     */
    public function getOption05()
    {
        return $this->option05;
    }

    /**
     * Set option06
     *
     * @param string $option06
     *
     * @return Promotion
     */
    public function setOption06($option06)
    {
        $this->option06 = $option06;

        return $this;
    }

    /**
     * Get option06
     *
     * @return string
     */
    public function getOption06()
    {
        return $this->option06;
    }

    /**
     * Set option07
     *
     * @param string $option07
     *
     * @return Promotion
     */
    public function setOption07($option07)
    {
        $this->option07 = $option07;

        return $this;
    }

    /**
     * Get option07
     *
     * @return string
     */
    public function getOption07()
    {
        return $this->option07;
    }

    /**
     * Set option08
     *
     * @param string $option08
     *
     * @return Promotion
     */
    public function setOption08($option08)
    {
        $this->option08 = $option08;

        return $this;
    }

    /**
     * Get option08
     *
     * @return string
     */
    public function getOption08()
    {
        return $this->option08;
    }

    /**
     * Set option09
     *
     * @param string $option09
     *
     * @return Promotion
     */
    public function setOption09($option09)
    {
        $this->option09 = $option09;

        return $this;
    }

    /**
     * Get option09
     *
     * @return string
     */
    public function getOption09()
    {
        return $this->option09;
    }

    /**
     * Set option10
     *
     * @param string $option10
     *
     * @return Promotion
     */
    public function setOption10($option10)
    {
        $this->option10 = $option10;

        return $this;
    }

    /**
     * Get option10
     *
     * @return string
     */
    public function getOption10()
    {
        return $this->option10;
    }

    /**
     * Set option11
     *
     * @param string $option11
     *
     * @return Promotion
     */
    public function setOption11($option11)
    {
        $this->option11 = $option11;

        return $this;
    }

    /**
     * Get option11
     *
     * @return string
     */
    public function getOption11()
    {
        return $this->option11;
    }

    /**
     * Set option12
     *
     * @param string $option12
     *
     * @return Promotion
     */
    public function setOption12($option12)
    {
        $this->option12 = $option12;

        return $this;
    }

    /**
     * Get option12
     *
     * @return string
     */
    public function getOption12()
    {
        return $this->option12;
    }

    /**
     * Set option13
     *
     * @param string $option13
     *
     * @return Promotion
     */
    public function setOption13($option13)
    {
        $this->option13 = $option13;

        return $this;
    }

    /**
     * Get option13
     *
     * @return string
     */
    public function getOption13()
    {
        return $this->option13;
    }

    /**
     * Set option14
     *
     * @param string $option14
     *
     * @return Promotion
     */
    public function setOption14($option14)
    {
        $this->option14 = $option14;

        return $this;
    }

    /**
     * Get option14
     *
     * @return string
     */
    public function getOption14()
    {
        return $this->option14;
    }

    /**
     * Set option15
     *
     * @param string $option15
     *
     * @return Promotion
     */
    public function setOption15($option15)
    {
        $this->option15 = $option15;

        return $this;
    }

    /**
     * Get option15
     *
     * @return string
     */
    public function getOption15()
    {
        return $this->option15;
    }

    /**
     * Set option16
     *
     * @param string $option16
     *
     * @return Promotion
     */
    public function setOption16($option16)
    {
        $this->option16 = $option16;

        return $this;
    }

    /**
     * Get option16
     *
     * @return string
     */
    public function getOption16()
    {
        return $this->option16;
    }

    /**
     * Set option17
     *
     * @param string $option17
     *
     * @return Promotion
     */
    public function setOption17($option17)
    {
        $this->option17 = $option17;

        return $this;
    }

    /**
     * Get option17
     *
     * @return string
     */
    public function getOption17()
    {
        return $this->option17;
    }

    /**
     * Set option18
     *
     * @param string $option18
     *
     * @return Promotion
     */
    public function setOption18($option18)
    {
        $this->option18 = $option18;

        return $this;
    }

    /**
     * Get option18
     *
     * @return string
     */
    public function getOption18()
    {
        return $this->option18;
    }

    /**
     * Set option19
     *
     * @param string $option19
     *
     * @return Promotion
     */
    public function setOption19($option19)
    {
        $this->option19 = $option19;

        return $this;
    }

    /**
     * Get option19
     *
     * @return string
     */
    public function getOption19()
    {
        return $this->option19;
    }

    /**
     * Set option20
     *
     * @param string $option20
     *
     * @return Promotion
     */
    public function setOption20($option20)
    {
        $this->option20 = $option20;

        return $this;
    }

    /**
     * Get option20
     *
     * @return string
     */
    public function getOption20()
    {
        return $this->option20;
    }
}
