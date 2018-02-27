<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnswerData
 *
 * @ORM\Table(name="answer_data")
 * @ORM\Entity
 */
class AnswerData
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
     * @var integer
     *
     * @ORM\Column(name="item_sequence", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $itemSequence;

    /**
     * @var integer
     *
     * @ORM\Column(name="sequence", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sequence;

    /**
     * @var integer
     *
     * @ORM\Column(name="data_id", type="smallint", nullable=false)
     */
    private $dataId;

    /**
     * @var string
     *
     * @ORM\Column(name="data_label", type="string", length=64, nullable=true)
     */
    private $dataLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="data_value", type="string", length=80, nullable=true)
     */
    private $dataValue;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return AnswerData
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
     * @return AnswerData
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
     * @return AnswerData
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
     * @return AnswerData
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
     * Set itemSequence
     *
     * @param integer $itemSequence
     *
     * @return AnswerData
     */
    public function setItemSequence($itemSequence)
    {
        $this->itemSequence = $itemSequence;

        return $this;
    }

    /**
     * Get itemSequence
     *
     * @return integer
     */
    public function getItemSequence()
    {
        return $this->itemSequence;
    }

    /**
     * Set sequence
     *
     * @param integer $sequence
     *
     * @return AnswerData
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * Get sequence
     *
     * @return integer
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Set dataId
     *
     * @param integer $dataId
     *
     * @return AnswerData
     */
    public function setDataId($dataId)
    {
        $this->dataId = $dataId;

        return $this;
    }

    /**
     * Get dataId
     *
     * @return integer
     */
    public function getDataId()
    {
        return $this->dataId;
    }

    /**
     * Set dataLabel
     *
     * @param string $dataLabel
     *
     * @return AnswerData
     */
    public function setDataLabel($dataLabel)
    {
        $this->dataLabel = $dataLabel;

        return $this;
    }

    /**
     * Get dataLabel
     *
     * @return string
     */
    public function getDataLabel()
    {
        return $this->dataLabel;
    }

    /**
     * Set dataValue
     *
     * @param string $dataValue
     *
     * @return AnswerData
     */
    public function setDataValue($dataValue)
    {
        $this->dataValue = $dataValue;

        return $this;
    }

    /**
     * Get dataValue
     *
     * @return string
     */
    public function getDataValue()
    {
        return $this->dataValue;
    }
}
