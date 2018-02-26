<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventMessage
 *
 * @ORM\Table(name="event_message", indexes={@ORM\Index(name="index_event_message_send", columns={"evmsg_send", "evmsg_sent", "agent_key"}), @ORM\Index(name="index_event_message_popup", columns={"agent_key", "evmsg_popup", "evmsg_popedup"})})
 * @ORM\Entity
 */
class EventMessage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="evmsg_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $evmsgKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="agent_key", type="bigint", nullable=true)
     */
    private $agentKey;

    /**
     * @var string
     *
     * @ORM\Column(name="evctl_id", type="string", length=32, nullable=true)
     */
    private $evctlId;

    /**
     * @var string
     *
     * @ORM\Column(name="evmsg_from", type="string", length=250, nullable=true)
     */
    private $evmsgFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="evmsg_to", type="string", length=250, nullable=true)
     */
    private $evmsgTo;

    /**
     * @var string
     *
     * @ORM\Column(name="evmsg_subject", type="string", length=250, nullable=true)
     */
    private $evmsgSubject;

    /**
     * @var string
     *
     * @ORM\Column(name="evmsg_msg", type="blob", length=65535, nullable=true)
     */
    private $evmsgMsg;

    /**
     * @var string
     *
     * @ORM\Column(name="evmsg_attachment_name", type="string", length=250, nullable=true)
     */
    private $evmsgAttachmentName;

    /**
     * @var string
     *
     * @ORM\Column(name="evmsg_attachment_text", type="blob", length=65535, nullable=true)
     */
    private $evmsgAttachmentText;

    /**
     * @var boolean
     *
     * @ORM\Column(name="evmsg_send", type="boolean", nullable=true)
     */
    private $evmsgSend;

    /**
     * @var boolean
     *
     * @ORM\Column(name="evmsg_popup", type="boolean", nullable=true)
     */
    private $evmsgPopup;

    /**
     * @var boolean
     *
     * @ORM\Column(name="evmsg_sms", type="boolean", nullable=true)
     */
    private $evmsgSms;

    /**
     * @var boolean
     *
     * @ORM\Column(name="evmsg_sent", type="boolean", nullable=true)
     */
    private $evmsgSent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="evmsg_popedup", type="boolean", nullable=true)
     */
    private $evmsgPopedup;

    /**
     * @var boolean
     *
     * @ORM\Column(name="evmsg_sent_sms", type="boolean", nullable=true)
     */
    private $evmsgSentSms;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=true)
     */
    private $startTime;



    /**
     * Get evmsgKey
     *
     * @return integer
     */
    public function getEvmsgKey()
    {
        return $this->evmsgKey;
    }

    /**
     * Set agentKey
     *
     * @param integer $agentKey
     *
     * @return EventMessage
     */
    public function setAgentKey($agentKey)
    {
        $this->agentKey = $agentKey;

        return $this;
    }

    /**
     * Get agentKey
     *
     * @return integer
     */
    public function getAgentKey()
    {
        return $this->agentKey;
    }

    /**
     * Set evctlId
     *
     * @param string $evctlId
     *
     * @return EventMessage
     */
    public function setEvctlId($evctlId)
    {
        $this->evctlId = $evctlId;

        return $this;
    }

    /**
     * Get evctlId
     *
     * @return string
     */
    public function getEvctlId()
    {
        return $this->evctlId;
    }

    /**
     * Set evmsgFrom
     *
     * @param string $evmsgFrom
     *
     * @return EventMessage
     */
    public function setEvmsgFrom($evmsgFrom)
    {
        $this->evmsgFrom = $evmsgFrom;

        return $this;
    }

    /**
     * Get evmsgFrom
     *
     * @return string
     */
    public function getEvmsgFrom()
    {
        return $this->evmsgFrom;
    }

    /**
     * Set evmsgTo
     *
     * @param string $evmsgTo
     *
     * @return EventMessage
     */
    public function setEvmsgTo($evmsgTo)
    {
        $this->evmsgTo = $evmsgTo;

        return $this;
    }

    /**
     * Get evmsgTo
     *
     * @return string
     */
    public function getEvmsgTo()
    {
        return $this->evmsgTo;
    }

    /**
     * Set evmsgSubject
     *
     * @param string $evmsgSubject
     *
     * @return EventMessage
     */
    public function setEvmsgSubject($evmsgSubject)
    {
        $this->evmsgSubject = $evmsgSubject;

        return $this;
    }

    /**
     * Get evmsgSubject
     *
     * @return string
     */
    public function getEvmsgSubject()
    {
        return $this->evmsgSubject;
    }

    /**
     * Set evmsgMsg
     *
     * @param string $evmsgMsg
     *
     * @return EventMessage
     */
    public function setEvmsgMsg($evmsgMsg)
    {
        $this->evmsgMsg = $evmsgMsg;

        return $this;
    }

    /**
     * Get evmsgMsg
     *
     * @return string
     */
    public function getEvmsgMsg()
    {
        return $this->evmsgMsg;
    }

    /**
     * Set evmsgAttachmentName
     *
     * @param string $evmsgAttachmentName
     *
     * @return EventMessage
     */
    public function setEvmsgAttachmentName($evmsgAttachmentName)
    {
        $this->evmsgAttachmentName = $evmsgAttachmentName;

        return $this;
    }

    /**
     * Get evmsgAttachmentName
     *
     * @return string
     */
    public function getEvmsgAttachmentName()
    {
        return $this->evmsgAttachmentName;
    }

    /**
     * Set evmsgAttachmentText
     *
     * @param string $evmsgAttachmentText
     *
     * @return EventMessage
     */
    public function setEvmsgAttachmentText($evmsgAttachmentText)
    {
        $this->evmsgAttachmentText = $evmsgAttachmentText;

        return $this;
    }

    /**
     * Get evmsgAttachmentText
     *
     * @return string
     */
    public function getEvmsgAttachmentText()
    {
        return $this->evmsgAttachmentText;
    }

    /**
     * Set evmsgSend
     *
     * @param boolean $evmsgSend
     *
     * @return EventMessage
     */
    public function setEvmsgSend($evmsgSend)
    {
        $this->evmsgSend = $evmsgSend;

        return $this;
    }

    /**
     * Get evmsgSend
     *
     * @return boolean
     */
    public function getEvmsgSend()
    {
        return $this->evmsgSend;
    }

    /**
     * Set evmsgPopup
     *
     * @param boolean $evmsgPopup
     *
     * @return EventMessage
     */
    public function setEvmsgPopup($evmsgPopup)
    {
        $this->evmsgPopup = $evmsgPopup;

        return $this;
    }

    /**
     * Get evmsgPopup
     *
     * @return boolean
     */
    public function getEvmsgPopup()
    {
        return $this->evmsgPopup;
    }

    /**
     * Set evmsgSms
     *
     * @param boolean $evmsgSms
     *
     * @return EventMessage
     */
    public function setEvmsgSms($evmsgSms)
    {
        $this->evmsgSms = $evmsgSms;

        return $this;
    }

    /**
     * Get evmsgSms
     *
     * @return boolean
     */
    public function getEvmsgSms()
    {
        return $this->evmsgSms;
    }

    /**
     * Set evmsgSent
     *
     * @param boolean $evmsgSent
     *
     * @return EventMessage
     */
    public function setEvmsgSent($evmsgSent)
    {
        $this->evmsgSent = $evmsgSent;

        return $this;
    }

    /**
     * Get evmsgSent
     *
     * @return boolean
     */
    public function getEvmsgSent()
    {
        return $this->evmsgSent;
    }

    /**
     * Set evmsgPopedup
     *
     * @param boolean $evmsgPopedup
     *
     * @return EventMessage
     */
    public function setEvmsgPopedup($evmsgPopedup)
    {
        $this->evmsgPopedup = $evmsgPopedup;

        return $this;
    }

    /**
     * Get evmsgPopedup
     *
     * @return boolean
     */
    public function getEvmsgPopedup()
    {
        return $this->evmsgPopedup;
    }

    /**
     * Set evmsgSentSms
     *
     * @param boolean $evmsgSentSms
     *
     * @return EventMessage
     */
    public function setEvmsgSentSms($evmsgSentSms)
    {
        $this->evmsgSentSms = $evmsgSentSms;

        return $this;
    }

    /**
     * Get evmsgSentSms
     *
     * @return boolean
     */
    public function getEvmsgSentSms()
    {
        return $this->evmsgSentSms;
    }

    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return EventMessage
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
}
