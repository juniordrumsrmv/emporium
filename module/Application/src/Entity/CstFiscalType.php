<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CstFiscalType
 *
 * @ORM\Table(name="cst_fiscal_type")
 * @ORM\Entity
 */
class CstFiscalType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cst_fiscal_type_key", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cstFiscalTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="cst_fiscal_type_name", type="string", length=20, nullable=true)
     */
    private $cstFiscalTypeName;

    /**
     * @var integer
     *
     * @ORM\Column(name="cst_fiscal_type_invoice", type="smallint", nullable=true)
     */
    private $cstFiscalTypeInvoice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cst_fiscal_type_last_change_time", type="datetime", nullable=true)
     */
    private $cstFiscalTypeLastChangeTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="cst_fiscal_type_price", type="integer", nullable=true)
     */
    private $cstFiscalTypePrice = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="cst_fiscal_tax_exception", type="boolean", nullable=true)
     */
    private $cstFiscalTaxException = '0';



    /**
     * Get cstFiscalTypeKey
     *
     * @return integer
     */
    public function getCstFiscalTypeKey()
    {
        return $this->cstFiscalTypeKey;
    }

    /**
     * Set cstFiscalTypeName
     *
     * @param string $cstFiscalTypeName
     *
     * @return CstFiscalType
     */
    public function setCstFiscalTypeName($cstFiscalTypeName)
    {
        $this->cstFiscalTypeName = $cstFiscalTypeName;

        return $this;
    }

    /**
     * Get cstFiscalTypeName
     *
     * @return string
     */
    public function getCstFiscalTypeName()
    {
        return $this->cstFiscalTypeName;
    }

    /**
     * Set cstFiscalTypeInvoice
     *
     * @param integer $cstFiscalTypeInvoice
     *
     * @return CstFiscalType
     */
    public function setCstFiscalTypeInvoice($cstFiscalTypeInvoice)
    {
        $this->cstFiscalTypeInvoice = $cstFiscalTypeInvoice;

        return $this;
    }

    /**
     * Get cstFiscalTypeInvoice
     *
     * @return integer
     */
    public function getCstFiscalTypeInvoice()
    {
        return $this->cstFiscalTypeInvoice;
    }

    /**
     * Set cstFiscalTypeLastChangeTime
     *
     * @param \DateTime $cstFiscalTypeLastChangeTime
     *
     * @return CstFiscalType
     */
    public function setCstFiscalTypeLastChangeTime($cstFiscalTypeLastChangeTime)
    {
        $this->cstFiscalTypeLastChangeTime = $cstFiscalTypeLastChangeTime;

        return $this;
    }

    /**
     * Get cstFiscalTypeLastChangeTime
     *
     * @return \DateTime
     */
    public function getCstFiscalTypeLastChangeTime()
    {
        return $this->cstFiscalTypeLastChangeTime;
    }

    /**
     * Set cstFiscalTypePrice
     *
     * @param integer $cstFiscalTypePrice
     *
     * @return CstFiscalType
     */
    public function setCstFiscalTypePrice($cstFiscalTypePrice)
    {
        $this->cstFiscalTypePrice = $cstFiscalTypePrice;

        return $this;
    }

    /**
     * Get cstFiscalTypePrice
     *
     * @return integer
     */
    public function getCstFiscalTypePrice()
    {
        return $this->cstFiscalTypePrice;
    }

    /**
     * Set cstFiscalTaxException
     *
     * @param boolean $cstFiscalTaxException
     *
     * @return CstFiscalType
     */
    public function setCstFiscalTaxException($cstFiscalTaxException)
    {
        $this->cstFiscalTaxException = $cstFiscalTaxException;

        return $this;
    }

    /**
     * Get cstFiscalTaxException
     *
     * @return boolean
     */
    public function getCstFiscalTaxException()
    {
        return $this->cstFiscalTaxException;
    }
}
