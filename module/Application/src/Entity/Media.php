<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Media
 *
 * @ORM\Table(name="media")
 * @ORM\Entity
 */
class Media
{
    /**
     * @var string
     *
     * @ORM\Column(name="media_id", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mediaId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_check", type="boolean", nullable=true)
     */
    private $isCheck;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_document", type="boolean", nullable=true)
     */
    private $isDocument;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_credit_card", type="boolean", nullable=true)
     */
    private $isCreditCard;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_debit_card", type="boolean", nullable=true)
     */
    private $isDebitCard;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_extended", type="boolean", nullable=true)
     */
    private $isExtended;

    /**
     * @var integer
     *
     * @ORM\Column(name="base_card_media_id", type="smallint", nullable=true)
     */
    private $baseCardMediaId;



    /**
     * Get mediaId
     *
     * @return string
     */
    public function getMediaId()
    {
        return $this->mediaId;
    }

    /**
     * Set isCheck
     *
     * @param boolean $isCheck
     *
     * @return Media
     */
    public function setIsCheck($isCheck)
    {
        $this->isCheck = $isCheck;

        return $this;
    }

    /**
     * Get isCheck
     *
     * @return boolean
     */
    public function getIsCheck()
    {
        return $this->isCheck;
    }

    /**
     * Set isDocument
     *
     * @param boolean $isDocument
     *
     * @return Media
     */
    public function setIsDocument($isDocument)
    {
        $this->isDocument = $isDocument;

        return $this;
    }

    /**
     * Get isDocument
     *
     * @return boolean
     */
    public function getIsDocument()
    {
        return $this->isDocument;
    }

    /**
     * Set isCreditCard
     *
     * @param boolean $isCreditCard
     *
     * @return Media
     */
    public function setIsCreditCard($isCreditCard)
    {
        $this->isCreditCard = $isCreditCard;

        return $this;
    }

    /**
     * Get isCreditCard
     *
     * @return boolean
     */
    public function getIsCreditCard()
    {
        return $this->isCreditCard;
    }

    /**
     * Set isDebitCard
     *
     * @param boolean $isDebitCard
     *
     * @return Media
     */
    public function setIsDebitCard($isDebitCard)
    {
        $this->isDebitCard = $isDebitCard;

        return $this;
    }

    /**
     * Get isDebitCard
     *
     * @return boolean
     */
    public function getIsDebitCard()
    {
        return $this->isDebitCard;
    }

    /**
     * Set isExtended
     *
     * @param boolean $isExtended
     *
     * @return Media
     */
    public function setIsExtended($isExtended)
    {
        $this->isExtended = $isExtended;

        return $this;
    }

    /**
     * Get isExtended
     *
     * @return boolean
     */
    public function getIsExtended()
    {
        return $this->isExtended;
    }

    /**
     * Set baseCardMediaId
     *
     * @param integer $baseCardMediaId
     *
     * @return Media
     */
    public function setBaseCardMediaId($baseCardMediaId)
    {
        $this->baseCardMediaId = $baseCardMediaId;

        return $this;
    }

    /**
     * Get baseCardMediaId
     *
     * @return integer
     */
    public function getBaseCardMediaId()
    {
        return $this->baseCardMediaId;
    }
}
