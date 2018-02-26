<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustodiamTicket
 *
 * @ORM\Table(name="custodiam_ticket", indexes={@ORM\Index(name="Index1", columns={"store_key", "pos_number", "nfce_number", "fiscal_date"}), @ORM\Index(name="Index2", columns={"store_key", "pos_number", "nfce_number", "fiscal_date", "sale_type"})})
 * @ORM\Entity
 */
class CustodiamTicket
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
     * @ORM\Column(name="nfce_number", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nfceNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fiscalDate = '0000-00-00';

    /**
     * @var integer
     *
     * @ORM\Column(name="sale_type", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $saleType = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="file_path", type="string", length=255, nullable=false)
     */
    private $filePath;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="smallint", nullable=false)
     */
    private $status = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="erro", type="smallint", nullable=false)
     */
    private $erro = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="rsl_mensagens", type="text", nullable=true)
     */
    private $rslMensagens;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="blob", length=65535, nullable=true)
     */
    private $data;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_time", type="datetime", nullable=true)
     */
    private $lastTime;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return CustodiamTicket
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
     * @return CustodiamTicket
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
     * Set nfceNumber
     *
     * @param integer $nfceNumber
     *
     * @return CustodiamTicket
     */
    public function setNfceNumber($nfceNumber)
    {
        $this->nfceNumber = $nfceNumber;

        return $this;
    }

    /**
     * Get nfceNumber
     *
     * @return integer
     */
    public function getNfceNumber()
    {
        return $this->nfceNumber;
    }

    /**
     * Set fiscalDate
     *
     * @param \DateTime $fiscalDate
     *
     * @return CustodiamTicket
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
     * Set saleType
     *
     * @param integer $saleType
     *
     * @return CustodiamTicket
     */
    public function setSaleType($saleType)
    {
        $this->saleType = $saleType;

        return $this;
    }

    /**
     * Get saleType
     *
     * @return integer
     */
    public function getSaleType()
    {
        return $this->saleType;
    }

    /**
     * Set filePath
     *
     * @param string $filePath
     *
     * @return CustodiamTicket
     */
    public function setFilePath($filePath)
    {
        $this->filePath = $filePath;

        return $this;
    }

    /**
     * Get filePath
     *
     * @return string
     */
    public function getFilePath()
    {
        return $this->filePath;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return CustodiamTicket
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set erro
     *
     * @param integer $erro
     *
     * @return CustodiamTicket
     */
    public function setErro($erro)
    {
        $this->erro = $erro;

        return $this;
    }

    /**
     * Get erro
     *
     * @return integer
     */
    public function getErro()
    {
        return $this->erro;
    }

    /**
     * Set rslMensagens
     *
     * @param string $rslMensagens
     *
     * @return CustodiamTicket
     */
    public function setRslMensagens($rslMensagens)
    {
        $this->rslMensagens = $rslMensagens;

        return $this;
    }

    /**
     * Get rslMensagens
     *
     * @return string
     */
    public function getRslMensagens()
    {
        return $this->rslMensagens;
    }

    /**
     * Set data
     *
     * @param string $data
     *
     * @return CustodiamTicket
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set lastTime
     *
     * @param \DateTime $lastTime
     *
     * @return CustodiamTicket
     */
    public function setLastTime($lastTime)
    {
        $this->lastTime = $lastTime;

        return $this;
    }

    /**
     * Get lastTime
     *
     * @return \DateTime
     */
    public function getLastTime()
    {
        return $this->lastTime;
    }
}
