<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CstType
 *
 * @ORM\Table(name="cst_type")
 * @ORM\Entity
 */
class CstType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cst_type_key", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cstTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="cst_name", type="string", length=20, nullable=false)
     */
    private $cstName;

    /**
     * @var string
     *
     * @ORM\Column(name="cst_discount", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $cstDiscount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cst_second_ticket", type="boolean", nullable=true)
     */
    private $cstSecondTicket;

    /**
     * @var integer
     *
     * @ORM\Column(name="cst_type_price", type="integer", nullable=true)
     */
    private $cstTypePrice;

    /**
     * @var string
     *
     * @ORM\Column(name="cst_extra_discount", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $cstExtraDiscount;

    /**
     * @var integer
     *
     * @ORM\Column(name="cst_extra_type_price", type="integer", nullable=true)
     */
    private $cstExtraTypePrice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;



    /**
     * Get cstTypeKey
     *
     * @return integer
     */
    public function getCstTypeKey()
    {
        return $this->cstTypeKey;
    }

    /**
     * Set cstName
     *
     * @param string $cstName
     *
     * @return CstType
     */
    public function setCstName($cstName)
    {
        $this->cstName = $cstName;

        return $this;
    }

    /**
     * Get cstName
     *
     * @return string
     */
    public function getCstName()
    {
        return $this->cstName;
    }

    /**
     * Set cstDiscount
     *
     * @param string $cstDiscount
     *
     * @return CstType
     */
    public function setCstDiscount($cstDiscount)
    {
        $this->cstDiscount = $cstDiscount;

        return $this;
    }

    /**
     * Get cstDiscount
     *
     * @return string
     */
    public function getCstDiscount()
    {
        return $this->cstDiscount;
    }

    /**
     * Set cstSecondTicket
     *
     * @param boolean $cstSecondTicket
     *
     * @return CstType
     */
    public function setCstSecondTicket($cstSecondTicket)
    {
        $this->cstSecondTicket = $cstSecondTicket;

        return $this;
    }

    /**
     * Get cstSecondTicket
     *
     * @return boolean
     */
    public function getCstSecondTicket()
    {
        return $this->cstSecondTicket;
    }

    /**
     * Set cstTypePrice
     *
     * @param integer $cstTypePrice
     *
     * @return CstType
     */
    public function setCstTypePrice($cstTypePrice)
    {
        $this->cstTypePrice = $cstTypePrice;

        return $this;
    }

    /**
     * Get cstTypePrice
     *
     * @return integer
     */
    public function getCstTypePrice()
    {
        return $this->cstTypePrice;
    }

    /**
     * Set cstExtraDiscount
     *
     * @param string $cstExtraDiscount
     *
     * @return CstType
     */
    public function setCstExtraDiscount($cstExtraDiscount)
    {
        $this->cstExtraDiscount = $cstExtraDiscount;

        return $this;
    }

    /**
     * Get cstExtraDiscount
     *
     * @return string
     */
    public function getCstExtraDiscount()
    {
        return $this->cstExtraDiscount;
    }

    /**
     * Set cstExtraTypePrice
     *
     * @param integer $cstExtraTypePrice
     *
     * @return CstType
     */
    public function setCstExtraTypePrice($cstExtraTypePrice)
    {
        $this->cstExtraTypePrice = $cstExtraTypePrice;

        return $this;
    }

    /**
     * Get cstExtraTypePrice
     *
     * @return integer
     */
    public function getCstExtraTypePrice()
    {
        return $this->cstExtraTypePrice;
    }

    /**
     * Set lastChangeTime
     *
     * @param \DateTime $lastChangeTime
     *
     * @return CstType
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
