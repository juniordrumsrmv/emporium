<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerAnswer
 *
 * @ORM\Table(name="customer_answer", indexes={@ORM\Index(name="index_customer_answer_ticket", columns={"store_key", "pos_number", "ticket_number", "start_time", "poll_type", "poll_key", "question_number"}), @ORM\Index(name="index_customer_answer_poll", columns={"poll_type", "poll_key", "question_number"}), @ORM\Index(name="index_customer_answer_customer", columns={"customer_key", "poll_type", "poll_key"})})
 * @ORM\Entity
 */
class CustomerAnswer
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
     * @var boolean
     *
     * @ORM\Column(name="poll_type", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pollType;

    /**
     * @var integer
     *
     * @ORM\Column(name="poll_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pollKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="question_number", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $questionNumber;

    /**
     * @var boolean
     *
     * @ORM\Column(name="question_type", type="boolean", nullable=true)
     */
    private $questionType;

    /**
     * @var integer
     *
     * @ORM\Column(name="answer_number", type="smallint", nullable=true)
     */
    private $answerNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="answer_text", type="string", length=255, nullable=true)
     */
    private $answerText;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_key", type="bigint", nullable=true)
     */
    private $customerKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="cst_type_key", type="smallint", nullable=true)
     */
    private $cstTypeKey;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return CustomerAnswer
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
     * @return CustomerAnswer
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
     * @return CustomerAnswer
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
     * @return CustomerAnswer
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
     * Set pollType
     *
     * @param boolean $pollType
     *
     * @return CustomerAnswer
     */
    public function setPollType($pollType)
    {
        $this->pollType = $pollType;

        return $this;
    }

    /**
     * Get pollType
     *
     * @return boolean
     */
    public function getPollType()
    {
        return $this->pollType;
    }

    /**
     * Set pollKey
     *
     * @param integer $pollKey
     *
     * @return CustomerAnswer
     */
    public function setPollKey($pollKey)
    {
        $this->pollKey = $pollKey;

        return $this;
    }

    /**
     * Get pollKey
     *
     * @return integer
     */
    public function getPollKey()
    {
        return $this->pollKey;
    }

    /**
     * Set questionNumber
     *
     * @param integer $questionNumber
     *
     * @return CustomerAnswer
     */
    public function setQuestionNumber($questionNumber)
    {
        $this->questionNumber = $questionNumber;

        return $this;
    }

    /**
     * Get questionNumber
     *
     * @return integer
     */
    public function getQuestionNumber()
    {
        return $this->questionNumber;
    }

    /**
     * Set questionType
     *
     * @param boolean $questionType
     *
     * @return CustomerAnswer
     */
    public function setQuestionType($questionType)
    {
        $this->questionType = $questionType;

        return $this;
    }

    /**
     * Get questionType
     *
     * @return boolean
     */
    public function getQuestionType()
    {
        return $this->questionType;
    }

    /**
     * Set answerNumber
     *
     * @param integer $answerNumber
     *
     * @return CustomerAnswer
     */
    public function setAnswerNumber($answerNumber)
    {
        $this->answerNumber = $answerNumber;

        return $this;
    }

    /**
     * Get answerNumber
     *
     * @return integer
     */
    public function getAnswerNumber()
    {
        return $this->answerNumber;
    }

    /**
     * Set answerText
     *
     * @param string $answerText
     *
     * @return CustomerAnswer
     */
    public function setAnswerText($answerText)
    {
        $this->answerText = $answerText;

        return $this;
    }

    /**
     * Get answerText
     *
     * @return string
     */
    public function getAnswerText()
    {
        return $this->answerText;
    }

    /**
     * Set customerKey
     *
     * @param integer $customerKey
     *
     * @return CustomerAnswer
     */
    public function setCustomerKey($customerKey)
    {
        $this->customerKey = $customerKey;

        return $this;
    }

    /**
     * Get customerKey
     *
     * @return integer
     */
    public function getCustomerKey()
    {
        return $this->customerKey;
    }

    /**
     * Set cstTypeKey
     *
     * @param integer $cstTypeKey
     *
     * @return CustomerAnswer
     */
    public function setCstTypeKey($cstTypeKey)
    {
        $this->cstTypeKey = $cstTypeKey;

        return $this;
    }

    /**
     * Get cstTypeKey
     *
     * @return integer
     */
    public function getCstTypeKey()
    {
        return $this->cstTypeKey;
    }
}
