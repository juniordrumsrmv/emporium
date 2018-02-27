<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plu
 *
 * @ORM\Table(name="plu", uniqueConstraints={@ORM\UniqueConstraint(name="index_plu_id", columns={"id"})}, indexes={@ORM\Index(name="index_plu_change", columns={"last_change_time"}), @ORM\Index(name="index_plu_base", columns={"base_plu_key"}), @ORM\Index(name="index_plu_completion", columns={"conecto_flag_27"})})
 * @ORM\Entity
 */
class Plu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pluKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="base_plu_key", type="bigint", nullable=true)
     */
    private $basePluKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="link_plu_key", type="bigint", nullable=true)
     */
    private $linkPluKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_types", type="smallint", nullable=true)
     */
    private $pluTypes;

    /**
     * @var integer
     *
     * @ORM\Column(name="maker_key", type="bigint", nullable=true)
     */
    private $makerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="short_description", type="string", length=48, nullable=true)
     */
    private $shortDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="long_description", type="string", length=50, nullable=true)
     */
    private $longDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="commercial_description", type="string", length=50, nullable=true)
     */
    private $commercialDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="image_file", type="string", length=255, nullable=true)
     */
    private $imageFile;

    /**
     * @var integer
     *
     * @ORM\Column(name="tax_type_key", type="integer", nullable=true)
     */
    private $taxTypeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="cost_decimals", type="smallint", nullable=true)
     */
    private $costDecimals;

    /**
     * @var integer
     *
     * @ORM\Column(name="unit_key", type="smallint", nullable=true)
     */
    private $unitKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="price_decimals", type="smallint", nullable=true)
     */
    private $priceDecimals;

    /**
     * @var integer
     *
     * @ORM\Column(name="adder", type="bigint", nullable=true)
     */
    private $adder;

    /**
     * @var integer
     *
     * @ORM\Column(name="department_key", type="smallint", nullable=true)
     */
    private $departmentKey;

    /**
     * @var string
     *
     * @ORM\Column(name="suggested_prompt", type="string", length=80, nullable=true)
     */
    private $suggestedPrompt;

    /**
     * @var integer
     *
     * @ORM\Column(name="data_entry_key", type="integer", nullable=true)
     */
    private $dataEntryKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="tare_key", type="integer", nullable=true)
     */
    private $tareKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;

    /**
     * @var string
     *
     * @ORM\Column(name="clerk_percent", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $clerkPercent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_00", type="boolean", nullable=true)
     */
    private $conectoFlag00;

    /**
     * @var boolean
     *
     * @ORM\Column(name="has_deposit", type="boolean", nullable=true)
     */
    private $hasDeposit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="has_plu_link", type="boolean", nullable=true)
     */
    private $hasPluLink;

    /**
     * @var boolean
     *
     * @ORM\Column(name="price_required", type="boolean", nullable=true)
     */
    private $priceRequired;

    /**
     * @var boolean
     *
     * @ORM\Column(name="quantity_disallowed", type="boolean", nullable=true)
     */
    private $quantityDisallowed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="quantity_required", type="boolean", nullable=true)
     */
    private $quantityRequired;

    /**
     * @var boolean
     *
     * @ORM\Column(name="decimal_disallowed", type="boolean", nullable=true)
     */
    private $decimalDisallowed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="decimal_required", type="boolean", nullable=true)
     */
    private $decimalRequired;

    /**
     * @var boolean
     *
     * @ORM\Column(name="id_required", type="boolean", nullable=true)
     */
    private $idRequired;

    /**
     * @var boolean
     *
     * @ORM\Column(name="repeat_disallowed", type="boolean", nullable=true)
     */
    private $repeatDisallowed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="scale", type="boolean", nullable=true)
     */
    private $scale;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tracking_total", type="boolean", nullable=true)
     */
    private $trackingTotal;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deposit", type="boolean", nullable=true)
     */
    private $deposit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="non_merchandise", type="boolean", nullable=true)
     */
    private $nonMerchandise;

    /**
     * @var boolean
     *
     * @ORM\Column(name="return_disallowed", type="boolean", nullable=true)
     */
    private $returnDisallowed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="refund_disallowed", type="boolean", nullable=true)
     */
    private $refundDisallowed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="markdown_disallowed", type="boolean", nullable=true)
     */
    private $markdownDisallowed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rebate", type="boolean", nullable=true)
     */
    private $rebate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="not_for_sale", type="boolean", nullable=true)
     */
    private $notForSale;

    /**
     * @var boolean
     *
     * @ORM\Column(name="negative", type="boolean", nullable=true)
     */
    private $negative;

    /**
     * @var boolean
     *
     * @ORM\Column(name="clerk_required", type="boolean", nullable=true)
     */
    private $clerkRequired;

    /**
     * @var boolean
     *
     * @ORM\Column(name="kit", type="boolean", nullable=true)
     */
    private $kit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_22", type="boolean", nullable=true)
     */
    private $conectoFlag22;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_23", type="boolean", nullable=true)
     */
    private $conectoFlag23;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_24", type="boolean", nullable=true)
     */
    private $conectoFlag24;

    /**
     * @var boolean
     *
     * @ORM\Column(name="qty_from_amount", type="boolean", nullable=true)
     */
    private $qtyFromAmount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_26", type="boolean", nullable=true)
     */
    private $conectoFlag26;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_27", type="boolean", nullable=true)
     */
    private $conectoFlag27;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_28", type="boolean", nullable=true)
     */
    private $conectoFlag28;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_29", type="boolean", nullable=true)
     */
    private $conectoFlag29;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_30", type="boolean", nullable=true)
     */
    private $conectoFlag30;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_31", type="boolean", nullable=true)
     */
    private $conectoFlag31;

    /**
     * @var integer
     *
     * @ORM\Column(name="valid_days", type="smallint", nullable=true)
     */
    private $validDays;

    /**
     * @var string
     *
     * @ORM\Column(name="fiscal_class", type="string", length=12, nullable=true)
     */
    private $fiscalClass;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pis_cofins", type="boolean", nullable=true)
     */
    private $pisCofins;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity_min", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $quantityMin;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity_max", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $quantityMax;

    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=25, nullable=true)
     */
    private $class;

    /**
     * @var integer
     *
     * @ORM\Column(name="merchandise_origin", type="smallint", nullable=true)
     */
    private $merchandiseOrigin;

    /**
     * @var integer
     *
     * @ORM\Column(name="merchandise_group", type="bigint", nullable=true)
     */
    private $merchandiseGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="package", type="string", length=6, nullable=true)
     */
    private $package;

    /**
     * @var string
     *
     * @ORM\Column(name="wholesale_quantity", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $wholesaleQuantity;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_32", type="boolean", nullable=true)
     */
    private $conectoFlag32;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_33", type="boolean", nullable=true)
     */
    private $conectoFlag33;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_34", type="boolean", nullable=true)
     */
    private $conectoFlag34;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_35", type="boolean", nullable=true)
     */
    private $conectoFlag35;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_36", type="boolean", nullable=true)
     */
    private $conectoFlag36;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_37", type="boolean", nullable=true)
     */
    private $conectoFlag37;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_38", type="boolean", nullable=true)
     */
    private $conectoFlag38;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_39", type="boolean", nullable=true)
     */
    private $conectoFlag39;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_40", type="boolean", nullable=true)
     */
    private $conectoFlag40;

    /**
     * @var string
     *
     * @ORM\Column(name="message_subtotal", type="string", length=255, nullable=true)
     */
    private $messageSubtotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="standard_unit_key", type="smallint", nullable=true)
     */
    private $standardUnitKey;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity_standard", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $quantityStandard;

    /**
     * @var string
     *
     * @ORM\Column(name="gross_weight", type="decimal", precision=7, scale=3, nullable=true)
     */
    private $grossWeight;

    /**
     * @var string
     *
     * @ORM\Column(name="net_weight", type="decimal", precision=7, scale=3, nullable=true)
     */
    private $netWeight;

    /**
     * @var string
     *
     * @ORM\Column(name="total_tax", type="decimal", precision=7, scale=3, nullable=true)
     */
    private $totalTax;

    /**
     * @var string
     *
     * @ORM\Column(name="sefaz_id", type="string", length=10, nullable=true)
     */
    private $sefazId;

    /**
     * @var string
     *
     * @ORM\Column(name="self_checkout_weight", type="decimal", precision=7, scale=3, nullable=true)
     */
    private $selfCheckoutWeight;

    /**
     * @var string
     *
     * @ORM\Column(name="anp_code", type="string", length=10, nullable=true)
     */
    private $anpCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="pis_tax_type_key", type="integer", nullable=true)
     */
    private $pisTaxTypeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="cofins_tax_type_key", type="integer", nullable=true)
     */
    private $cofinsTaxTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="total_tax1", type="decimal", precision=7, scale=3, nullable=true)
     */
    private $totalTax1;

    /**
     * @var string
     *
     * @ORM\Column(name="total_tax2", type="decimal", precision=7, scale=3, nullable=true)
     */
    private $totalTax2;

    /**
     * @var string
     *
     * @ORM\Column(name="cest_code", type="string", length=12, nullable=true)
     */
    private $cestCode;



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
     * Set id
     *
     * @param integer $id
     *
     * @return Plu
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set basePluKey
     *
     * @param integer $basePluKey
     *
     * @return Plu
     */
    public function setBasePluKey($basePluKey)
    {
        $this->basePluKey = $basePluKey;

        return $this;
    }

    /**
     * Get basePluKey
     *
     * @return integer
     */
    public function getBasePluKey()
    {
        return $this->basePluKey;
    }

    /**
     * Set linkPluKey
     *
     * @param integer $linkPluKey
     *
     * @return Plu
     */
    public function setLinkPluKey($linkPluKey)
    {
        $this->linkPluKey = $linkPluKey;

        return $this;
    }

    /**
     * Get linkPluKey
     *
     * @return integer
     */
    public function getLinkPluKey()
    {
        return $this->linkPluKey;
    }

    /**
     * Set pluTypes
     *
     * @param integer $pluTypes
     *
     * @return Plu
     */
    public function setPluTypes($pluTypes)
    {
        $this->pluTypes = $pluTypes;

        return $this;
    }

    /**
     * Get pluTypes
     *
     * @return integer
     */
    public function getPluTypes()
    {
        return $this->pluTypes;
    }

    /**
     * Set makerKey
     *
     * @param integer $makerKey
     *
     * @return Plu
     */
    public function setMakerKey($makerKey)
    {
        $this->makerKey = $makerKey;

        return $this;
    }

    /**
     * Get makerKey
     *
     * @return integer
     */
    public function getMakerKey()
    {
        return $this->makerKey;
    }

    /**
     * Set shortDescription
     *
     * @param string $shortDescription
     *
     * @return Plu
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * Get shortDescription
     *
     * @return string
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * Set longDescription
     *
     * @param string $longDescription
     *
     * @return Plu
     */
    public function setLongDescription($longDescription)
    {
        $this->longDescription = $longDescription;

        return $this;
    }

    /**
     * Get longDescription
     *
     * @return string
     */
    public function getLongDescription()
    {
        return $this->longDescription;
    }

    /**
     * Set commercialDescription
     *
     * @param string $commercialDescription
     *
     * @return Plu
     */
    public function setCommercialDescription($commercialDescription)
    {
        $this->commercialDescription = $commercialDescription;

        return $this;
    }

    /**
     * Get commercialDescription
     *
     * @return string
     */
    public function getCommercialDescription()
    {
        return $this->commercialDescription;
    }

    /**
     * Set imageFile
     *
     * @param string $imageFile
     *
     * @return Plu
     */
    public function setImageFile($imageFile)
    {
        $this->imageFile = $imageFile;

        return $this;
    }

    /**
     * Get imageFile
     *
     * @return string
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * Set taxTypeKey
     *
     * @param integer $taxTypeKey
     *
     * @return Plu
     */
    public function setTaxTypeKey($taxTypeKey)
    {
        $this->taxTypeKey = $taxTypeKey;

        return $this;
    }

    /**
     * Get taxTypeKey
     *
     * @return integer
     */
    public function getTaxTypeKey()
    {
        return $this->taxTypeKey;
    }

    /**
     * Set costDecimals
     *
     * @param integer $costDecimals
     *
     * @return Plu
     */
    public function setCostDecimals($costDecimals)
    {
        $this->costDecimals = $costDecimals;

        return $this;
    }

    /**
     * Get costDecimals
     *
     * @return integer
     */
    public function getCostDecimals()
    {
        return $this->costDecimals;
    }

    /**
     * Set unitKey
     *
     * @param integer $unitKey
     *
     * @return Plu
     */
    public function setUnitKey($unitKey)
    {
        $this->unitKey = $unitKey;

        return $this;
    }

    /**
     * Get unitKey
     *
     * @return integer
     */
    public function getUnitKey()
    {
        return $this->unitKey;
    }

    /**
     * Set priceDecimals
     *
     * @param integer $priceDecimals
     *
     * @return Plu
     */
    public function setPriceDecimals($priceDecimals)
    {
        $this->priceDecimals = $priceDecimals;

        return $this;
    }

    /**
     * Get priceDecimals
     *
     * @return integer
     */
    public function getPriceDecimals()
    {
        return $this->priceDecimals;
    }

    /**
     * Set adder
     *
     * @param integer $adder
     *
     * @return Plu
     */
    public function setAdder($adder)
    {
        $this->adder = $adder;

        return $this;
    }

    /**
     * Get adder
     *
     * @return integer
     */
    public function getAdder()
    {
        return $this->adder;
    }

    /**
     * Set departmentKey
     *
     * @param integer $departmentKey
     *
     * @return Plu
     */
    public function setDepartmentKey($departmentKey)
    {
        $this->departmentKey = $departmentKey;

        return $this;
    }

    /**
     * Get departmentKey
     *
     * @return integer
     */
    public function getDepartmentKey()
    {
        return $this->departmentKey;
    }

    /**
     * Set suggestedPrompt
     *
     * @param string $suggestedPrompt
     *
     * @return Plu
     */
    public function setSuggestedPrompt($suggestedPrompt)
    {
        $this->suggestedPrompt = $suggestedPrompt;

        return $this;
    }

    /**
     * Get suggestedPrompt
     *
     * @return string
     */
    public function getSuggestedPrompt()
    {
        return $this->suggestedPrompt;
    }

    /**
     * Set dataEntryKey
     *
     * @param integer $dataEntryKey
     *
     * @return Plu
     */
    public function setDataEntryKey($dataEntryKey)
    {
        $this->dataEntryKey = $dataEntryKey;

        return $this;
    }

    /**
     * Get dataEntryKey
     *
     * @return integer
     */
    public function getDataEntryKey()
    {
        return $this->dataEntryKey;
    }

    /**
     * Set tareKey
     *
     * @param integer $tareKey
     *
     * @return Plu
     */
    public function setTareKey($tareKey)
    {
        $this->tareKey = $tareKey;

        return $this;
    }

    /**
     * Get tareKey
     *
     * @return integer
     */
    public function getTareKey()
    {
        return $this->tareKey;
    }

    /**
     * Set lastChangeTime
     *
     * @param \DateTime $lastChangeTime
     *
     * @return Plu
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
     * Set clerkPercent
     *
     * @param string $clerkPercent
     *
     * @return Plu
     */
    public function setClerkPercent($clerkPercent)
    {
        $this->clerkPercent = $clerkPercent;

        return $this;
    }

    /**
     * Get clerkPercent
     *
     * @return string
     */
    public function getClerkPercent()
    {
        return $this->clerkPercent;
    }

    /**
     * Set conectoFlag00
     *
     * @param boolean $conectoFlag00
     *
     * @return Plu
     */
    public function setConectoFlag00($conectoFlag00)
    {
        $this->conectoFlag00 = $conectoFlag00;

        return $this;
    }

    /**
     * Get conectoFlag00
     *
     * @return boolean
     */
    public function getConectoFlag00()
    {
        return $this->conectoFlag00;
    }

    /**
     * Set hasDeposit
     *
     * @param boolean $hasDeposit
     *
     * @return Plu
     */
    public function setHasDeposit($hasDeposit)
    {
        $this->hasDeposit = $hasDeposit;

        return $this;
    }

    /**
     * Get hasDeposit
     *
     * @return boolean
     */
    public function getHasDeposit()
    {
        return $this->hasDeposit;
    }

    /**
     * Set hasPluLink
     *
     * @param boolean $hasPluLink
     *
     * @return Plu
     */
    public function setHasPluLink($hasPluLink)
    {
        $this->hasPluLink = $hasPluLink;

        return $this;
    }

    /**
     * Get hasPluLink
     *
     * @return boolean
     */
    public function getHasPluLink()
    {
        return $this->hasPluLink;
    }

    /**
     * Set priceRequired
     *
     * @param boolean $priceRequired
     *
     * @return Plu
     */
    public function setPriceRequired($priceRequired)
    {
        $this->priceRequired = $priceRequired;

        return $this;
    }

    /**
     * Get priceRequired
     *
     * @return boolean
     */
    public function getPriceRequired()
    {
        return $this->priceRequired;
    }

    /**
     * Set quantityDisallowed
     *
     * @param boolean $quantityDisallowed
     *
     * @return Plu
     */
    public function setQuantityDisallowed($quantityDisallowed)
    {
        $this->quantityDisallowed = $quantityDisallowed;

        return $this;
    }

    /**
     * Get quantityDisallowed
     *
     * @return boolean
     */
    public function getQuantityDisallowed()
    {
        return $this->quantityDisallowed;
    }

    /**
     * Set quantityRequired
     *
     * @param boolean $quantityRequired
     *
     * @return Plu
     */
    public function setQuantityRequired($quantityRequired)
    {
        $this->quantityRequired = $quantityRequired;

        return $this;
    }

    /**
     * Get quantityRequired
     *
     * @return boolean
     */
    public function getQuantityRequired()
    {
        return $this->quantityRequired;
    }

    /**
     * Set decimalDisallowed
     *
     * @param boolean $decimalDisallowed
     *
     * @return Plu
     */
    public function setDecimalDisallowed($decimalDisallowed)
    {
        $this->decimalDisallowed = $decimalDisallowed;

        return $this;
    }

    /**
     * Get decimalDisallowed
     *
     * @return boolean
     */
    public function getDecimalDisallowed()
    {
        return $this->decimalDisallowed;
    }

    /**
     * Set decimalRequired
     *
     * @param boolean $decimalRequired
     *
     * @return Plu
     */
    public function setDecimalRequired($decimalRequired)
    {
        $this->decimalRequired = $decimalRequired;

        return $this;
    }

    /**
     * Get decimalRequired
     *
     * @return boolean
     */
    public function getDecimalRequired()
    {
        return $this->decimalRequired;
    }

    /**
     * Set idRequired
     *
     * @param boolean $idRequired
     *
     * @return Plu
     */
    public function setIdRequired($idRequired)
    {
        $this->idRequired = $idRequired;

        return $this;
    }

    /**
     * Get idRequired
     *
     * @return boolean
     */
    public function getIdRequired()
    {
        return $this->idRequired;
    }

    /**
     * Set repeatDisallowed
     *
     * @param boolean $repeatDisallowed
     *
     * @return Plu
     */
    public function setRepeatDisallowed($repeatDisallowed)
    {
        $this->repeatDisallowed = $repeatDisallowed;

        return $this;
    }

    /**
     * Get repeatDisallowed
     *
     * @return boolean
     */
    public function getRepeatDisallowed()
    {
        return $this->repeatDisallowed;
    }

    /**
     * Set scale
     *
     * @param boolean $scale
     *
     * @return Plu
     */
    public function setScale($scale)
    {
        $this->scale = $scale;

        return $this;
    }

    /**
     * Get scale
     *
     * @return boolean
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * Set trackingTotal
     *
     * @param boolean $trackingTotal
     *
     * @return Plu
     */
    public function setTrackingTotal($trackingTotal)
    {
        $this->trackingTotal = $trackingTotal;

        return $this;
    }

    /**
     * Get trackingTotal
     *
     * @return boolean
     */
    public function getTrackingTotal()
    {
        return $this->trackingTotal;
    }

    /**
     * Set deposit
     *
     * @param boolean $deposit
     *
     * @return Plu
     */
    public function setDeposit($deposit)
    {
        $this->deposit = $deposit;

        return $this;
    }

    /**
     * Get deposit
     *
     * @return boolean
     */
    public function getDeposit()
    {
        return $this->deposit;
    }

    /**
     * Set nonMerchandise
     *
     * @param boolean $nonMerchandise
     *
     * @return Plu
     */
    public function setNonMerchandise($nonMerchandise)
    {
        $this->nonMerchandise = $nonMerchandise;

        return $this;
    }

    /**
     * Get nonMerchandise
     *
     * @return boolean
     */
    public function getNonMerchandise()
    {
        return $this->nonMerchandise;
    }

    /**
     * Set returnDisallowed
     *
     * @param boolean $returnDisallowed
     *
     * @return Plu
     */
    public function setReturnDisallowed($returnDisallowed)
    {
        $this->returnDisallowed = $returnDisallowed;

        return $this;
    }

    /**
     * Get returnDisallowed
     *
     * @return boolean
     */
    public function getReturnDisallowed()
    {
        return $this->returnDisallowed;
    }

    /**
     * Set refundDisallowed
     *
     * @param boolean $refundDisallowed
     *
     * @return Plu
     */
    public function setRefundDisallowed($refundDisallowed)
    {
        $this->refundDisallowed = $refundDisallowed;

        return $this;
    }

    /**
     * Get refundDisallowed
     *
     * @return boolean
     */
    public function getRefundDisallowed()
    {
        return $this->refundDisallowed;
    }

    /**
     * Set markdownDisallowed
     *
     * @param boolean $markdownDisallowed
     *
     * @return Plu
     */
    public function setMarkdownDisallowed($markdownDisallowed)
    {
        $this->markdownDisallowed = $markdownDisallowed;

        return $this;
    }

    /**
     * Get markdownDisallowed
     *
     * @return boolean
     */
    public function getMarkdownDisallowed()
    {
        return $this->markdownDisallowed;
    }

    /**
     * Set rebate
     *
     * @param boolean $rebate
     *
     * @return Plu
     */
    public function setRebate($rebate)
    {
        $this->rebate = $rebate;

        return $this;
    }

    /**
     * Get rebate
     *
     * @return boolean
     */
    public function getRebate()
    {
        return $this->rebate;
    }

    /**
     * Set notForSale
     *
     * @param boolean $notForSale
     *
     * @return Plu
     */
    public function setNotForSale($notForSale)
    {
        $this->notForSale = $notForSale;

        return $this;
    }

    /**
     * Get notForSale
     *
     * @return boolean
     */
    public function getNotForSale()
    {
        return $this->notForSale;
    }

    /**
     * Set negative
     *
     * @param boolean $negative
     *
     * @return Plu
     */
    public function setNegative($negative)
    {
        $this->negative = $negative;

        return $this;
    }

    /**
     * Get negative
     *
     * @return boolean
     */
    public function getNegative()
    {
        return $this->negative;
    }

    /**
     * Set clerkRequired
     *
     * @param boolean $clerkRequired
     *
     * @return Plu
     */
    public function setClerkRequired($clerkRequired)
    {
        $this->clerkRequired = $clerkRequired;

        return $this;
    }

    /**
     * Get clerkRequired
     *
     * @return boolean
     */
    public function getClerkRequired()
    {
        return $this->clerkRequired;
    }

    /**
     * Set kit
     *
     * @param boolean $kit
     *
     * @return Plu
     */
    public function setKit($kit)
    {
        $this->kit = $kit;

        return $this;
    }

    /**
     * Get kit
     *
     * @return boolean
     */
    public function getKit()
    {
        return $this->kit;
    }

    /**
     * Set conectoFlag22
     *
     * @param boolean $conectoFlag22
     *
     * @return Plu
     */
    public function setConectoFlag22($conectoFlag22)
    {
        $this->conectoFlag22 = $conectoFlag22;

        return $this;
    }

    /**
     * Get conectoFlag22
     *
     * @return boolean
     */
    public function getConectoFlag22()
    {
        return $this->conectoFlag22;
    }

    /**
     * Set conectoFlag23
     *
     * @param boolean $conectoFlag23
     *
     * @return Plu
     */
    public function setConectoFlag23($conectoFlag23)
    {
        $this->conectoFlag23 = $conectoFlag23;

        return $this;
    }

    /**
     * Get conectoFlag23
     *
     * @return boolean
     */
    public function getConectoFlag23()
    {
        return $this->conectoFlag23;
    }

    /**
     * Set conectoFlag24
     *
     * @param boolean $conectoFlag24
     *
     * @return Plu
     */
    public function setConectoFlag24($conectoFlag24)
    {
        $this->conectoFlag24 = $conectoFlag24;

        return $this;
    }

    /**
     * Get conectoFlag24
     *
     * @return boolean
     */
    public function getConectoFlag24()
    {
        return $this->conectoFlag24;
    }

    /**
     * Set qtyFromAmount
     *
     * @param boolean $qtyFromAmount
     *
     * @return Plu
     */
    public function setQtyFromAmount($qtyFromAmount)
    {
        $this->qtyFromAmount = $qtyFromAmount;

        return $this;
    }

    /**
     * Get qtyFromAmount
     *
     * @return boolean
     */
    public function getQtyFromAmount()
    {
        return $this->qtyFromAmount;
    }

    /**
     * Set conectoFlag26
     *
     * @param boolean $conectoFlag26
     *
     * @return Plu
     */
    public function setConectoFlag26($conectoFlag26)
    {
        $this->conectoFlag26 = $conectoFlag26;

        return $this;
    }

    /**
     * Get conectoFlag26
     *
     * @return boolean
     */
    public function getConectoFlag26()
    {
        return $this->conectoFlag26;
    }

    /**
     * Set conectoFlag27
     *
     * @param boolean $conectoFlag27
     *
     * @return Plu
     */
    public function setConectoFlag27($conectoFlag27)
    {
        $this->conectoFlag27 = $conectoFlag27;

        return $this;
    }

    /**
     * Get conectoFlag27
     *
     * @return boolean
     */
    public function getConectoFlag27()
    {
        return $this->conectoFlag27;
    }

    /**
     * Set conectoFlag28
     *
     * @param boolean $conectoFlag28
     *
     * @return Plu
     */
    public function setConectoFlag28($conectoFlag28)
    {
        $this->conectoFlag28 = $conectoFlag28;

        return $this;
    }

    /**
     * Get conectoFlag28
     *
     * @return boolean
     */
    public function getConectoFlag28()
    {
        return $this->conectoFlag28;
    }

    /**
     * Set conectoFlag29
     *
     * @param boolean $conectoFlag29
     *
     * @return Plu
     */
    public function setConectoFlag29($conectoFlag29)
    {
        $this->conectoFlag29 = $conectoFlag29;

        return $this;
    }

    /**
     * Get conectoFlag29
     *
     * @return boolean
     */
    public function getConectoFlag29()
    {
        return $this->conectoFlag29;
    }

    /**
     * Set conectoFlag30
     *
     * @param boolean $conectoFlag30
     *
     * @return Plu
     */
    public function setConectoFlag30($conectoFlag30)
    {
        $this->conectoFlag30 = $conectoFlag30;

        return $this;
    }

    /**
     * Get conectoFlag30
     *
     * @return boolean
     */
    public function getConectoFlag30()
    {
        return $this->conectoFlag30;
    }

    /**
     * Set conectoFlag31
     *
     * @param boolean $conectoFlag31
     *
     * @return Plu
     */
    public function setConectoFlag31($conectoFlag31)
    {
        $this->conectoFlag31 = $conectoFlag31;

        return $this;
    }

    /**
     * Get conectoFlag31
     *
     * @return boolean
     */
    public function getConectoFlag31()
    {
        return $this->conectoFlag31;
    }

    /**
     * Set validDays
     *
     * @param integer $validDays
     *
     * @return Plu
     */
    public function setValidDays($validDays)
    {
        $this->validDays = $validDays;

        return $this;
    }

    /**
     * Get validDays
     *
     * @return integer
     */
    public function getValidDays()
    {
        return $this->validDays;
    }

    /**
     * Set fiscalClass
     *
     * @param string $fiscalClass
     *
     * @return Plu
     */
    public function setFiscalClass($fiscalClass)
    {
        $this->fiscalClass = $fiscalClass;

        return $this;
    }

    /**
     * Get fiscalClass
     *
     * @return string
     */
    public function getFiscalClass()
    {
        return $this->fiscalClass;
    }

    /**
     * Set pisCofins
     *
     * @param boolean $pisCofins
     *
     * @return Plu
     */
    public function setPisCofins($pisCofins)
    {
        $this->pisCofins = $pisCofins;

        return $this;
    }

    /**
     * Get pisCofins
     *
     * @return boolean
     */
    public function getPisCofins()
    {
        return $this->pisCofins;
    }

    /**
     * Set quantity
     *
     * @param string $quantity
     *
     * @return Plu
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set quantityMin
     *
     * @param string $quantityMin
     *
     * @return Plu
     */
    public function setQuantityMin($quantityMin)
    {
        $this->quantityMin = $quantityMin;

        return $this;
    }

    /**
     * Get quantityMin
     *
     * @return string
     */
    public function getQuantityMin()
    {
        return $this->quantityMin;
    }

    /**
     * Set quantityMax
     *
     * @param string $quantityMax
     *
     * @return Plu
     */
    public function setQuantityMax($quantityMax)
    {
        $this->quantityMax = $quantityMax;

        return $this;
    }

    /**
     * Get quantityMax
     *
     * @return string
     */
    public function getQuantityMax()
    {
        return $this->quantityMax;
    }

    /**
     * Set class
     *
     * @param string $class
     *
     * @return Plu
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set merchandiseOrigin
     *
     * @param integer $merchandiseOrigin
     *
     * @return Plu
     */
    public function setMerchandiseOrigin($merchandiseOrigin)
    {
        $this->merchandiseOrigin = $merchandiseOrigin;

        return $this;
    }

    /**
     * Get merchandiseOrigin
     *
     * @return integer
     */
    public function getMerchandiseOrigin()
    {
        return $this->merchandiseOrigin;
    }

    /**
     * Set merchandiseGroup
     *
     * @param integer $merchandiseGroup
     *
     * @return Plu
     */
    public function setMerchandiseGroup($merchandiseGroup)
    {
        $this->merchandiseGroup = $merchandiseGroup;

        return $this;
    }

    /**
     * Get merchandiseGroup
     *
     * @return integer
     */
    public function getMerchandiseGroup()
    {
        return $this->merchandiseGroup;
    }

    /**
     * Set package
     *
     * @param string $package
     *
     * @return Plu
     */
    public function setPackage($package)
    {
        $this->package = $package;

        return $this;
    }

    /**
     * Get package
     *
     * @return string
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Set wholesaleQuantity
     *
     * @param string $wholesaleQuantity
     *
     * @return Plu
     */
    public function setWholesaleQuantity($wholesaleQuantity)
    {
        $this->wholesaleQuantity = $wholesaleQuantity;

        return $this;
    }

    /**
     * Get wholesaleQuantity
     *
     * @return string
     */
    public function getWholesaleQuantity()
    {
        return $this->wholesaleQuantity;
    }

    /**
     * Set conectoFlag32
     *
     * @param boolean $conectoFlag32
     *
     * @return Plu
     */
    public function setConectoFlag32($conectoFlag32)
    {
        $this->conectoFlag32 = $conectoFlag32;

        return $this;
    }

    /**
     * Get conectoFlag32
     *
     * @return boolean
     */
    public function getConectoFlag32()
    {
        return $this->conectoFlag32;
    }

    /**
     * Set conectoFlag33
     *
     * @param boolean $conectoFlag33
     *
     * @return Plu
     */
    public function setConectoFlag33($conectoFlag33)
    {
        $this->conectoFlag33 = $conectoFlag33;

        return $this;
    }

    /**
     * Get conectoFlag33
     *
     * @return boolean
     */
    public function getConectoFlag33()
    {
        return $this->conectoFlag33;
    }

    /**
     * Set conectoFlag34
     *
     * @param boolean $conectoFlag34
     *
     * @return Plu
     */
    public function setConectoFlag34($conectoFlag34)
    {
        $this->conectoFlag34 = $conectoFlag34;

        return $this;
    }

    /**
     * Get conectoFlag34
     *
     * @return boolean
     */
    public function getConectoFlag34()
    {
        return $this->conectoFlag34;
    }

    /**
     * Set conectoFlag35
     *
     * @param boolean $conectoFlag35
     *
     * @return Plu
     */
    public function setConectoFlag35($conectoFlag35)
    {
        $this->conectoFlag35 = $conectoFlag35;

        return $this;
    }

    /**
     * Get conectoFlag35
     *
     * @return boolean
     */
    public function getConectoFlag35()
    {
        return $this->conectoFlag35;
    }

    /**
     * Set conectoFlag36
     *
     * @param boolean $conectoFlag36
     *
     * @return Plu
     */
    public function setConectoFlag36($conectoFlag36)
    {
        $this->conectoFlag36 = $conectoFlag36;

        return $this;
    }

    /**
     * Get conectoFlag36
     *
     * @return boolean
     */
    public function getConectoFlag36()
    {
        return $this->conectoFlag36;
    }

    /**
     * Set conectoFlag37
     *
     * @param boolean $conectoFlag37
     *
     * @return Plu
     */
    public function setConectoFlag37($conectoFlag37)
    {
        $this->conectoFlag37 = $conectoFlag37;

        return $this;
    }

    /**
     * Get conectoFlag37
     *
     * @return boolean
     */
    public function getConectoFlag37()
    {
        return $this->conectoFlag37;
    }

    /**
     * Set conectoFlag38
     *
     * @param boolean $conectoFlag38
     *
     * @return Plu
     */
    public function setConectoFlag38($conectoFlag38)
    {
        $this->conectoFlag38 = $conectoFlag38;

        return $this;
    }

    /**
     * Get conectoFlag38
     *
     * @return boolean
     */
    public function getConectoFlag38()
    {
        return $this->conectoFlag38;
    }

    /**
     * Set conectoFlag39
     *
     * @param boolean $conectoFlag39
     *
     * @return Plu
     */
    public function setConectoFlag39($conectoFlag39)
    {
        $this->conectoFlag39 = $conectoFlag39;

        return $this;
    }

    /**
     * Get conectoFlag39
     *
     * @return boolean
     */
    public function getConectoFlag39()
    {
        return $this->conectoFlag39;
    }

    /**
     * Set conectoFlag40
     *
     * @param boolean $conectoFlag40
     *
     * @return Plu
     */
    public function setConectoFlag40($conectoFlag40)
    {
        $this->conectoFlag40 = $conectoFlag40;

        return $this;
    }

    /**
     * Get conectoFlag40
     *
     * @return boolean
     */
    public function getConectoFlag40()
    {
        return $this->conectoFlag40;
    }

    /**
     * Set messageSubtotal
     *
     * @param string $messageSubtotal
     *
     * @return Plu
     */
    public function setMessageSubtotal($messageSubtotal)
    {
        $this->messageSubtotal = $messageSubtotal;

        return $this;
    }

    /**
     * Get messageSubtotal
     *
     * @return string
     */
    public function getMessageSubtotal()
    {
        return $this->messageSubtotal;
    }

    /**
     * Set standardUnitKey
     *
     * @param integer $standardUnitKey
     *
     * @return Plu
     */
    public function setStandardUnitKey($standardUnitKey)
    {
        $this->standardUnitKey = $standardUnitKey;

        return $this;
    }

    /**
     * Get standardUnitKey
     *
     * @return integer
     */
    public function getStandardUnitKey()
    {
        return $this->standardUnitKey;
    }

    /**
     * Set quantityStandard
     *
     * @param string $quantityStandard
     *
     * @return Plu
     */
    public function setQuantityStandard($quantityStandard)
    {
        $this->quantityStandard = $quantityStandard;

        return $this;
    }

    /**
     * Get quantityStandard
     *
     * @return string
     */
    public function getQuantityStandard()
    {
        return $this->quantityStandard;
    }

    /**
     * Set grossWeight
     *
     * @param string $grossWeight
     *
     * @return Plu
     */
    public function setGrossWeight($grossWeight)
    {
        $this->grossWeight = $grossWeight;

        return $this;
    }

    /**
     * Get grossWeight
     *
     * @return string
     */
    public function getGrossWeight()
    {
        return $this->grossWeight;
    }

    /**
     * Set netWeight
     *
     * @param string $netWeight
     *
     * @return Plu
     */
    public function setNetWeight($netWeight)
    {
        $this->netWeight = $netWeight;

        return $this;
    }

    /**
     * Get netWeight
     *
     * @return string
     */
    public function getNetWeight()
    {
        return $this->netWeight;
    }

    /**
     * Set totalTax
     *
     * @param string $totalTax
     *
     * @return Plu
     */
    public function setTotalTax($totalTax)
    {
        $this->totalTax = $totalTax;

        return $this;
    }

    /**
     * Get totalTax
     *
     * @return string
     */
    public function getTotalTax()
    {
        return $this->totalTax;
    }

    /**
     * Set sefazId
     *
     * @param string $sefazId
     *
     * @return Plu
     */
    public function setSefazId($sefazId)
    {
        $this->sefazId = $sefazId;

        return $this;
    }

    /**
     * Get sefazId
     *
     * @return string
     */
    public function getSefazId()
    {
        return $this->sefazId;
    }

    /**
     * Set selfCheckoutWeight
     *
     * @param string $selfCheckoutWeight
     *
     * @return Plu
     */
    public function setSelfCheckoutWeight($selfCheckoutWeight)
    {
        $this->selfCheckoutWeight = $selfCheckoutWeight;

        return $this;
    }

    /**
     * Get selfCheckoutWeight
     *
     * @return string
     */
    public function getSelfCheckoutWeight()
    {
        return $this->selfCheckoutWeight;
    }

    /**
     * Set anpCode
     *
     * @param string $anpCode
     *
     * @return Plu
     */
    public function setAnpCode($anpCode)
    {
        $this->anpCode = $anpCode;

        return $this;
    }

    /**
     * Get anpCode
     *
     * @return string
     */
    public function getAnpCode()
    {
        return $this->anpCode;
    }

    /**
     * Set pisTaxTypeKey
     *
     * @param integer $pisTaxTypeKey
     *
     * @return Plu
     */
    public function setPisTaxTypeKey($pisTaxTypeKey)
    {
        $this->pisTaxTypeKey = $pisTaxTypeKey;

        return $this;
    }

    /**
     * Get pisTaxTypeKey
     *
     * @return integer
     */
    public function getPisTaxTypeKey()
    {
        return $this->pisTaxTypeKey;
    }

    /**
     * Set cofinsTaxTypeKey
     *
     * @param integer $cofinsTaxTypeKey
     *
     * @return Plu
     */
    public function setCofinsTaxTypeKey($cofinsTaxTypeKey)
    {
        $this->cofinsTaxTypeKey = $cofinsTaxTypeKey;

        return $this;
    }

    /**
     * Get cofinsTaxTypeKey
     *
     * @return integer
     */
    public function getCofinsTaxTypeKey()
    {
        return $this->cofinsTaxTypeKey;
    }

    /**
     * Set totalTax1
     *
     * @param string $totalTax1
     *
     * @return Plu
     */
    public function setTotalTax1($totalTax1)
    {
        $this->totalTax1 = $totalTax1;

        return $this;
    }

    /**
     * Get totalTax1
     *
     * @return string
     */
    public function getTotalTax1()
    {
        return $this->totalTax1;
    }

    /**
     * Set totalTax2
     *
     * @param string $totalTax2
     *
     * @return Plu
     */
    public function setTotalTax2($totalTax2)
    {
        $this->totalTax2 = $totalTax2;

        return $this;
    }

    /**
     * Get totalTax2
     *
     * @return string
     */
    public function getTotalTax2()
    {
        return $this->totalTax2;
    }

    /**
     * Set cestCode
     *
     * @param string $cestCode
     *
     * @return Plu
     */
    public function setCestCode($cestCode)
    {
        $this->cestCode = $cestCode;

        return $this;
    }

    /**
     * Get cestCode
     *
     * @return string
     */
    public function getCestCode()
    {
        return $this->cestCode;
    }
}
