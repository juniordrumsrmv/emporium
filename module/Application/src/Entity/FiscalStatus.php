<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FiscalStatus
 *
 * @ORM\Table(name="fiscal_status", indexes={@ORM\Index(name="index_ecf_status", columns={"store_key", "ecf_number", "ticket_number", "start_time"}), @ORM\Index(name="index_ecf_status_1", columns={"store_key", "ecf_number", "fiscal_date", "start_time", "ticket_number"})})
 * @ORM\Entity
 */
class FiscalStatus
{
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
     * @ORM\Column(name="pos_number", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $posNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="ticket_number", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ticketNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $startTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=false)
     */
    private $fiscalDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="transaction_type", type="boolean", nullable=false)
     */
    private $transactionType;

    /**
     * @var integer
     *
     * @ORM\Column(name="Z_number", type="integer", nullable=false)
     */
    private $zNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="initial_GT", type="decimal", precision=19, scale=3, nullable=false)
     */
    private $initialGt;

    /**
     * @var string
     *
     * @ORM\Column(name="final_GT", type="decimal", precision=19, scale=3, nullable=false)
     */
    private $finalGt;

    /**
     * @var string
     *
     * @ORM\Column(name="void", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $void;

    /**
     * @var string
     *
     * @ORM\Column(name="discount", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $discount;

    /**
     * @var string
     *
     * @ORM\Column(name="increase", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $increase;

    /**
     * @var integer
     *
     * @ORM\Column(name="cashier_key", type="bigint", nullable=true)
     */
    private $cashierKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="authorizer_key", type="bigint", nullable=true)
     */
    private $authorizerKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="ecf_number", type="smallint", nullable=false)
     */
    private $ecfNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="initial_ticket", type="integer", nullable=false)
     */
    private $initialTicket;

    /**
     * @var integer
     *
     * @ORM\Column(name="restart_count", type="integer", nullable=false)
     */
    private $restartCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_void", type="integer", nullable=true)
     */
    private $quantityVoid;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_discount", type="integer", nullable=true)
     */
    private $quantityDiscount;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_sale", type="integer", nullable=true)
     */
    private $quantitySale;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_void_life", type="integer", nullable=true)
     */
    private $quantityVoidLife;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_nfnv", type="integer", nullable=true)
     */
    private $quantityNfnv;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_void_nfnv", type="integer", nullable=true)
     */
    private $quantityVoidNfnv;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_report", type="integer", nullable=true)
     */
    private $quantityReport;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_ribbon_detail", type="integer", nullable=true)
     */
    private $quantityRibbonDetail;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_nfv_tef", type="integer", nullable=true)
     */
    private $quantityNfvTef;

    /**
     * @var integer
     *
     * @ORM\Column(name="initial_ticket_fiscal", type="integer", nullable=true)
     */
    private $initialTicketFiscal;

    /**
     * @var integer
     *
     * @ORM\Column(name="finish_ticket_fiscal", type="integer", nullable=true)
     */
    private $finishTicketFiscal;

    /**
     * @var string
     *
     * @ORM\Column(name="time_printing_cupons", type="string", length=20, nullable=true)
     */
    private $timePrintingCupons;

    /**
     * @var string
     *
     * @ORM\Column(name="total_time", type="string", length=20, nullable=true)
     */
    private $totalTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_report_x", type="integer", nullable=true)
     */
    private $quantityReportX;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_left_z", type="integer", nullable=true)
     */
    private $quantityLeftZ;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_mfd", type="string", length=30, nullable=true)
     */
    private $ecfMfd;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_serial", type="string", length=30, nullable=true)
     */
    private $ecfSerial;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_version", type="string", length=20, nullable=true)
     */
    private $ecfVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_model", type="string", length=40, nullable=true)
     */
    private $ecfModel;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_manufacturer", type="string", length=40, nullable=true)
     */
    private $ecfManufacturer;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_alter", type="datetime", nullable=true)
     */
    private $dateAlter;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_key", type="bigint", nullable=true)
     */
    private $userKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status_inc", type="boolean", nullable=true)
     */
    private $statusInc = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_mfd_bytes", type="bigint", nullable=true)
     */
    private $quantityMfdBytes = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_mfd_left_bytes", type="bigint", nullable=true)
     */
    private $quantityMfdLeftBytes = '0';



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return FiscalStatus
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
     * Set posNumber
     *
     * @param integer $posNumber
     *
     * @return FiscalStatus
     */
    public function setPosNumber($posNumber)
    {
        $this->posNumber = $posNumber;

        return $this;
    }

    /**
     * Get posNumber
     *
     * @return integer
     */
    public function getPosNumber()
    {
        return $this->posNumber;
    }

    /**
     * Set ticketNumber
     *
     * @param integer $ticketNumber
     *
     * @return FiscalStatus
     */
    public function setTicketNumber($ticketNumber)
    {
        $this->ticketNumber = $ticketNumber;

        return $this;
    }

    /**
     * Get ticketNumber
     *
     * @return integer
     */
    public function getTicketNumber()
    {
        return $this->ticketNumber;
    }

    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return FiscalStatus
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set fiscalDate
     *
     * @param \DateTime $fiscalDate
     *
     * @return FiscalStatus
     */
    public function setFiscalDate($fiscalDate)
    {
        $this->fiscalDate = $fiscalDate;

        return $this;
    }

    /**
     * Get fiscalDate
     *
     * @return \DateTime
     */
    public function getFiscalDate()
    {
        return $this->fiscalDate;
    }

    /**
     * Set transactionType
     *
     * @param boolean $transactionType
     *
     * @return FiscalStatus
     */
    public function setTransactionType($transactionType)
    {
        $this->transactionType = $transactionType;

        return $this;
    }

    /**
     * Get transactionType
     *
     * @return boolean
     */
    public function getTransactionType()
    {
        return $this->transactionType;
    }

    /**
     * Set zNumber
     *
     * @param integer $zNumber
     *
     * @return FiscalStatus
     */
    public function setZNumber($zNumber)
    {
        $this->zNumber = $zNumber;

        return $this;
    }

    /**
     * Get zNumber
     *
     * @return integer
     */
    public function getZNumber()
    {
        return $this->zNumber;
    }

    /**
     * Set initialGt
     *
     * @param string $initialGt
     *
     * @return FiscalStatus
     */
    public function setInitialGt($initialGt)
    {
        $this->initialGt = $initialGt;

        return $this;
    }

    /**
     * Get initialGt
     *
     * @return string
     */
    public function getInitialGt()
    {
        return $this->initialGt;
    }

    /**
     * Set finalGt
     *
     * @param string $finalGt
     *
     * @return FiscalStatus
     */
    public function setFinalGt($finalGt)
    {
        $this->finalGt = $finalGt;

        return $this;
    }

    /**
     * Get finalGt
     *
     * @return string
     */
    public function getFinalGt()
    {
        return $this->finalGt;
    }

    /**
     * Set void
     *
     * @param string $void
     *
     * @return FiscalStatus
     */
    public function setVoid($void)
    {
        $this->void = $void;

        return $this;
    }

    /**
     * Get void
     *
     * @return string
     */
    public function getVoid()
    {
        return $this->void;
    }

    /**
     * Set discount
     *
     * @param string $discount
     *
     * @return FiscalStatus
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
     * Set increase
     *
     * @param string $increase
     *
     * @return FiscalStatus
     */
    public function setIncrease($increase)
    {
        $this->increase = $increase;

        return $this;
    }

    /**
     * Get increase
     *
     * @return string
     */
    public function getIncrease()
    {
        return $this->increase;
    }

    /**
     * Set cashierKey
     *
     * @param integer $cashierKey
     *
     * @return FiscalStatus
     */
    public function setCashierKey($cashierKey)
    {
        $this->cashierKey = $cashierKey;

        return $this;
    }

    /**
     * Get cashierKey
     *
     * @return integer
     */
    public function getCashierKey()
    {
        return $this->cashierKey;
    }

    /**
     * Set authorizerKey
     *
     * @param integer $authorizerKey
     *
     * @return FiscalStatus
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
     * Set ecfNumber
     *
     * @param integer $ecfNumber
     *
     * @return FiscalStatus
     */
    public function setEcfNumber($ecfNumber)
    {
        $this->ecfNumber = $ecfNumber;

        return $this;
    }

    /**
     * Get ecfNumber
     *
     * @return integer
     */
    public function getEcfNumber()
    {
        return $this->ecfNumber;
    }

    /**
     * Set initialTicket
     *
     * @param integer $initialTicket
     *
     * @return FiscalStatus
     */
    public function setInitialTicket($initialTicket)
    {
        $this->initialTicket = $initialTicket;

        return $this;
    }

    /**
     * Get initialTicket
     *
     * @return integer
     */
    public function getInitialTicket()
    {
        return $this->initialTicket;
    }

    /**
     * Set restartCount
     *
     * @param integer $restartCount
     *
     * @return FiscalStatus
     */
    public function setRestartCount($restartCount)
    {
        $this->restartCount = $restartCount;

        return $this;
    }

    /**
     * Get restartCount
     *
     * @return integer
     */
    public function getRestartCount()
    {
        return $this->restartCount;
    }

    /**
     * Set quantityVoid
     *
     * @param integer $quantityVoid
     *
     * @return FiscalStatus
     */
    public function setQuantityVoid($quantityVoid)
    {
        $this->quantityVoid = $quantityVoid;

        return $this;
    }

    /**
     * Get quantityVoid
     *
     * @return integer
     */
    public function getQuantityVoid()
    {
        return $this->quantityVoid;
    }

    /**
     * Set quantityDiscount
     *
     * @param integer $quantityDiscount
     *
     * @return FiscalStatus
     */
    public function setQuantityDiscount($quantityDiscount)
    {
        $this->quantityDiscount = $quantityDiscount;

        return $this;
    }

    /**
     * Get quantityDiscount
     *
     * @return integer
     */
    public function getQuantityDiscount()
    {
        return $this->quantityDiscount;
    }

    /**
     * Set quantitySale
     *
     * @param integer $quantitySale
     *
     * @return FiscalStatus
     */
    public function setQuantitySale($quantitySale)
    {
        $this->quantitySale = $quantitySale;

        return $this;
    }

    /**
     * Get quantitySale
     *
     * @return integer
     */
    public function getQuantitySale()
    {
        return $this->quantitySale;
    }

    /**
     * Set quantityVoidLife
     *
     * @param integer $quantityVoidLife
     *
     * @return FiscalStatus
     */
    public function setQuantityVoidLife($quantityVoidLife)
    {
        $this->quantityVoidLife = $quantityVoidLife;

        return $this;
    }

    /**
     * Get quantityVoidLife
     *
     * @return integer
     */
    public function getQuantityVoidLife()
    {
        return $this->quantityVoidLife;
    }

    /**
     * Set quantityNfnv
     *
     * @param integer $quantityNfnv
     *
     * @return FiscalStatus
     */
    public function setQuantityNfnv($quantityNfnv)
    {
        $this->quantityNfnv = $quantityNfnv;

        return $this;
    }

    /**
     * Get quantityNfnv
     *
     * @return integer
     */
    public function getQuantityNfnv()
    {
        return $this->quantityNfnv;
    }

    /**
     * Set quantityVoidNfnv
     *
     * @param integer $quantityVoidNfnv
     *
     * @return FiscalStatus
     */
    public function setQuantityVoidNfnv($quantityVoidNfnv)
    {
        $this->quantityVoidNfnv = $quantityVoidNfnv;

        return $this;
    }

    /**
     * Get quantityVoidNfnv
     *
     * @return integer
     */
    public function getQuantityVoidNfnv()
    {
        return $this->quantityVoidNfnv;
    }

    /**
     * Set quantityReport
     *
     * @param integer $quantityReport
     *
     * @return FiscalStatus
     */
    public function setQuantityReport($quantityReport)
    {
        $this->quantityReport = $quantityReport;

        return $this;
    }

    /**
     * Get quantityReport
     *
     * @return integer
     */
    public function getQuantityReport()
    {
        return $this->quantityReport;
    }

    /**
     * Set quantityRibbonDetail
     *
     * @param integer $quantityRibbonDetail
     *
     * @return FiscalStatus
     */
    public function setQuantityRibbonDetail($quantityRibbonDetail)
    {
        $this->quantityRibbonDetail = $quantityRibbonDetail;

        return $this;
    }

    /**
     * Get quantityRibbonDetail
     *
     * @return integer
     */
    public function getQuantityRibbonDetail()
    {
        return $this->quantityRibbonDetail;
    }

    /**
     * Set quantityNfvTef
     *
     * @param integer $quantityNfvTef
     *
     * @return FiscalStatus
     */
    public function setQuantityNfvTef($quantityNfvTef)
    {
        $this->quantityNfvTef = $quantityNfvTef;

        return $this;
    }

    /**
     * Get quantityNfvTef
     *
     * @return integer
     */
    public function getQuantityNfvTef()
    {
        return $this->quantityNfvTef;
    }

    /**
     * Set initialTicketFiscal
     *
     * @param integer $initialTicketFiscal
     *
     * @return FiscalStatus
     */
    public function setInitialTicketFiscal($initialTicketFiscal)
    {
        $this->initialTicketFiscal = $initialTicketFiscal;

        return $this;
    }

    /**
     * Get initialTicketFiscal
     *
     * @return integer
     */
    public function getInitialTicketFiscal()
    {
        return $this->initialTicketFiscal;
    }

    /**
     * Set finishTicketFiscal
     *
     * @param integer $finishTicketFiscal
     *
     * @return FiscalStatus
     */
    public function setFinishTicketFiscal($finishTicketFiscal)
    {
        $this->finishTicketFiscal = $finishTicketFiscal;

        return $this;
    }

    /**
     * Get finishTicketFiscal
     *
     * @return integer
     */
    public function getFinishTicketFiscal()
    {
        return $this->finishTicketFiscal;
    }

    /**
     * Set timePrintingCupons
     *
     * @param string $timePrintingCupons
     *
     * @return FiscalStatus
     */
    public function setTimePrintingCupons($timePrintingCupons)
    {
        $this->timePrintingCupons = $timePrintingCupons;

        return $this;
    }

    /**
     * Get timePrintingCupons
     *
     * @return string
     */
    public function getTimePrintingCupons()
    {
        return $this->timePrintingCupons;
    }

    /**
     * Set totalTime
     *
     * @param string $totalTime
     *
     * @return FiscalStatus
     */
    public function setTotalTime($totalTime)
    {
        $this->totalTime = $totalTime;

        return $this;
    }

    /**
     * Get totalTime
     *
     * @return string
     */
    public function getTotalTime()
    {
        return $this->totalTime;
    }

    /**
     * Set quantityReportX
     *
     * @param integer $quantityReportX
     *
     * @return FiscalStatus
     */
    public function setQuantityReportX($quantityReportX)
    {
        $this->quantityReportX = $quantityReportX;

        return $this;
    }

    /**
     * Get quantityReportX
     *
     * @return integer
     */
    public function getQuantityReportX()
    {
        return $this->quantityReportX;
    }

    /**
     * Set quantityLeftZ
     *
     * @param integer $quantityLeftZ
     *
     * @return FiscalStatus
     */
    public function setQuantityLeftZ($quantityLeftZ)
    {
        $this->quantityLeftZ = $quantityLeftZ;

        return $this;
    }

    /**
     * Get quantityLeftZ
     *
     * @return integer
     */
    public function getQuantityLeftZ()
    {
        return $this->quantityLeftZ;
    }

    /**
     * Set ecfMfd
     *
     * @param string $ecfMfd
     *
     * @return FiscalStatus
     */
    public function setEcfMfd($ecfMfd)
    {
        $this->ecfMfd = $ecfMfd;

        return $this;
    }

    /**
     * Get ecfMfd
     *
     * @return string
     */
    public function getEcfMfd()
    {
        return $this->ecfMfd;
    }

    /**
     * Set ecfSerial
     *
     * @param string $ecfSerial
     *
     * @return FiscalStatus
     */
    public function setEcfSerial($ecfSerial)
    {
        $this->ecfSerial = $ecfSerial;

        return $this;
    }

    /**
     * Get ecfSerial
     *
     * @return string
     */
    public function getEcfSerial()
    {
        return $this->ecfSerial;
    }

    /**
     * Set ecfVersion
     *
     * @param string $ecfVersion
     *
     * @return FiscalStatus
     */
    public function setEcfVersion($ecfVersion)
    {
        $this->ecfVersion = $ecfVersion;

        return $this;
    }

    /**
     * Get ecfVersion
     *
     * @return string
     */
    public function getEcfVersion()
    {
        return $this->ecfVersion;
    }

    /**
     * Set ecfModel
     *
     * @param string $ecfModel
     *
     * @return FiscalStatus
     */
    public function setEcfModel($ecfModel)
    {
        $this->ecfModel = $ecfModel;

        return $this;
    }

    /**
     * Get ecfModel
     *
     * @return string
     */
    public function getEcfModel()
    {
        return $this->ecfModel;
    }

    /**
     * Set ecfManufacturer
     *
     * @param string $ecfManufacturer
     *
     * @return FiscalStatus
     */
    public function setEcfManufacturer($ecfManufacturer)
    {
        $this->ecfManufacturer = $ecfManufacturer;

        return $this;
    }

    /**
     * Get ecfManufacturer
     *
     * @return string
     */
    public function getEcfManufacturer()
    {
        return $this->ecfManufacturer;
    }

    /**
     * Set dateAlter
     *
     * @param \DateTime $dateAlter
     *
     * @return FiscalStatus
     */
    public function setDateAlter($dateAlter)
    {
        $this->dateAlter = $dateAlter;

        return $this;
    }

    /**
     * Get dateAlter
     *
     * @return \DateTime
     */
    public function getDateAlter()
    {
        return $this->dateAlter;
    }

    /**
     * Set userKey
     *
     * @param integer $userKey
     *
     * @return FiscalStatus
     */
    public function setUserKey($userKey)
    {
        $this->userKey = $userKey;

        return $this;
    }

    /**
     * Get userKey
     *
     * @return integer
     */
    public function getUserKey()
    {
        return $this->userKey;
    }

    /**
     * Set statusInc
     *
     * @param boolean $statusInc
     *
     * @return FiscalStatus
     */
    public function setStatusInc($statusInc)
    {
        $this->statusInc = $statusInc;

        return $this;
    }

    /**
     * Get statusInc
     *
     * @return boolean
     */
    public function getStatusInc()
    {
        return $this->statusInc;
    }

    /**
     * Set quantityMfdBytes
     *
     * @param integer $quantityMfdBytes
     *
     * @return FiscalStatus
     */
    public function setQuantityMfdBytes($quantityMfdBytes)
    {
        $this->quantityMfdBytes = $quantityMfdBytes;

        return $this;
    }

    /**
     * Get quantityMfdBytes
     *
     * @return integer
     */
    public function getQuantityMfdBytes()
    {
        return $this->quantityMfdBytes;
    }

    /**
     * Set quantityMfdLeftBytes
     *
     * @param integer $quantityMfdLeftBytes
     *
     * @return FiscalStatus
     */
    public function setQuantityMfdLeftBytes($quantityMfdLeftBytes)
    {
        $this->quantityMfdLeftBytes = $quantityMfdLeftBytes;

        return $this;
    }

    /**
     * Get quantityMfdLeftBytes
     *
     * @return integer
     */
    public function getQuantityMfdLeftBytes()
    {
        return $this->quantityMfdLeftBytes;
    }
}
