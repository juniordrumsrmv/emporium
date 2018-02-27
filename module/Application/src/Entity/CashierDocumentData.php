<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CashierDocumentData
 *
 * @ORM\Table(name="cashier_document_data")
 * @ORM\Entity
 */
class CashierDocumentData
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cashier_document_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cashierDocumentKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="data_id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dataId;

    /**
     * @var string
     *
     * @ORM\Column(name="data_value", type="string", length=80, nullable=true)
     */
    private $dataValue;

    /**
     * @var string
     *
     * @ORM\Column(name="data_extra", type="string", length=80, nullable=true)
     */
    private $dataExtra;



    /**
     * Set cashierDocumentKey
     *
     * @param integer $cashierDocumentKey
     *
     * @return CashierDocumentData
     */
    public function setCashierDocumentKey($cashierDocumentKey)
    {
        $this->cashierDocumentKey = $cashierDocumentKey;

        return $this;
    }

    /**
     * Get cashierDocumentKey
     *
     * @return integer
     */
    public function getCashierDocumentKey()
    {
        return $this->cashierDocumentKey;
    }

    /**
     * Set dataId
     *
     * @param integer $dataId
     *
     * @return CashierDocumentData
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
     * Set dataValue
     *
     * @param string $dataValue
     *
     * @return CashierDocumentData
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

    /**
     * Set dataExtra
     *
     * @param string $dataExtra
     *
     * @return CashierDocumentData
     */
    public function setDataExtra($dataExtra)
    {
        $this->dataExtra = $dataExtra;

        return $this;
    }

    /**
     * Get dataExtra
     *
     * @return string
     */
    public function getDataExtra()
    {
        return $this->dataExtra;
    }
}
