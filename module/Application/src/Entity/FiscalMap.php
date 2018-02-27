<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FiscalMap
 *
 * @ORM\Table(name="fiscal_map", uniqueConstraints={@ORM\UniqueConstraint(name="index_ecf_map", columns={"store_key", "fiscal_date", "ecf_number"})}, indexes={@ORM\Index(name="index_ecf_map_1", columns={"store_key", "ecf_number", "fiscal_date", "Z_number", "ticket_number"})})
 * @ORM\Entity
 */
class FiscalMap
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
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fiscalDate;

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
     * @ORM\Column(name="map_number", type="integer", nullable=false)
     */
    private $mapNumber;

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
     * @var string
     *
     * @ORM\Column(name="ecf_serial", type="string", length=30, nullable=false)
     */
    private $ecfSerial;

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
    private $statusInc = '1';



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return FiscalMap
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
     * Set fiscalDate
     *
     * @param \DateTime $fiscalDate
     *
     * @return FiscalMap
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
     * Set posNumber
     *
     * @param integer $posNumber
     *
     * @return FiscalMap
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
     * @return FiscalMap
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
     * Set zNumber
     *
     * @param integer $zNumber
     *
     * @return FiscalMap
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
     * @return FiscalMap
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
     * @return FiscalMap
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
     * @return FiscalMap
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
     * @return FiscalMap
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
     * @return FiscalMap
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
     * Set mapNumber
     *
     * @param integer $mapNumber
     *
     * @return FiscalMap
     */
    public function setMapNumber($mapNumber)
    {
        $this->mapNumber = $mapNumber;

        return $this;
    }

    /**
     * Get mapNumber
     *
     * @return integer
     */
    public function getMapNumber()
    {
        return $this->mapNumber;
    }

    /**
     * Set ecfNumber
     *
     * @param integer $ecfNumber
     *
     * @return FiscalMap
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
     * @return FiscalMap
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
     * @return FiscalMap
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
     * Set ecfSerial
     *
     * @param string $ecfSerial
     *
     * @return FiscalMap
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
     * Set dateAlter
     *
     * @param \DateTime $dateAlter
     *
     * @return FiscalMap
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
     * @return FiscalMap
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
     * @return FiscalMap
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
}
