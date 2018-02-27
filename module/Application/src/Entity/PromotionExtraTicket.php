<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PromotionExtraTicket
 *
 * @ORM\Table(name="promotion_extra_ticket")
 * @ORM\Entity
 */
class PromotionExtraTicket
{
    /**
     * @var integer
     *
     * @ORM\Column(name="extra_ticket_type_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $extraTicketTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="extra_ticket_type_name", type="string", length=50, nullable=true)
     */
    private $extraTicketTypeName;

    /**
     * @var string
     *
     * @ORM\Column(name="extra_ticket_header", type="text", length=65535, nullable=true)
     */
    private $extraTicketHeader;

    /**
     * @var string
     *
     * @ORM\Column(name="extra_ticket_detail", type="text", length=65535, nullable=true)
     */
    private $extraTicketDetail;

    /**
     * @var string
     *
     * @ORM\Column(name="extra_ticket_footer", type="text", length=65535, nullable=true)
     */
    private $extraTicketFooter;



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
     * Set extraTicketTypeName
     *
     * @param string $extraTicketTypeName
     *
     * @return PromotionExtraTicket
     */
    public function setExtraTicketTypeName($extraTicketTypeName)
    {
        $this->extraTicketTypeName = $extraTicketTypeName;

        return $this;
    }

    /**
     * Get extraTicketTypeName
     *
     * @return string
     */
    public function getExtraTicketTypeName()
    {
        return $this->extraTicketTypeName;
    }

    /**
     * Set extraTicketHeader
     *
     * @param string $extraTicketHeader
     *
     * @return PromotionExtraTicket
     */
    public function setExtraTicketHeader($extraTicketHeader)
    {
        $this->extraTicketHeader = $extraTicketHeader;

        return $this;
    }

    /**
     * Get extraTicketHeader
     *
     * @return string
     */
    public function getExtraTicketHeader()
    {
        return $this->extraTicketHeader;
    }

    /**
     * Set extraTicketDetail
     *
     * @param string $extraTicketDetail
     *
     * @return PromotionExtraTicket
     */
    public function setExtraTicketDetail($extraTicketDetail)
    {
        $this->extraTicketDetail = $extraTicketDetail;

        return $this;
    }

    /**
     * Get extraTicketDetail
     *
     * @return string
     */
    public function getExtraTicketDetail()
    {
        return $this->extraTicketDetail;
    }

    /**
     * Set extraTicketFooter
     *
     * @param string $extraTicketFooter
     *
     * @return PromotionExtraTicket
     */
    public function setExtraTicketFooter($extraTicketFooter)
    {
        $this->extraTicketFooter = $extraTicketFooter;

        return $this;
    }

    /**
     * Get extraTicketFooter
     *
     * @return string
     */
    public function getExtraTicketFooter()
    {
        return $this->extraTicketFooter;
    }
}
