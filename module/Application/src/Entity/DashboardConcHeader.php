<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DashboardConcHeader
 *
 * @ORM\Table(name="dashboard_conc_header")
 * @ORM\Entity
 */
class DashboardConcHeader
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nseriesat", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nseriesat;

    /**
     * @var string
     *
     * @ORM\Column(name="nrec", type="string", length=128, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nrec;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=false)
     */
    private $fiscalDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dhenviolote", type="datetime", nullable=true)
     */
    private $dhenviolote;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dhprocessamento", type="datetime", nullable=true)
     */
    private $dhprocessamento;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoLote", type="string", length=32, nullable=true)
     */
    private $tipolote;

    /**
     * @var string
     *
     * @ORM\Column(name="origem", type="string", length=256, nullable=true)
     */
    private $origem;

    /**
     * @var integer
     *
     * @ORM\Column(name="qtdecupoms", type="bigint", nullable=true)
     */
    private $qtdecupoms;

    /**
     * @var string
     *
     * @ORM\Column(name="situacaolote", type="string", length=64, nullable=true)
     */
    private $situacaolote;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_sent_time", type="datetime", nullable=true)
     */
    private $lastSentTime;



    /**
     * Set nseriesat
     *
     * @param integer $nseriesat
     *
     * @return DashboardConcHeader
     */
    public function setNseriesat($nseriesat)
    {
        $this->nseriesat = $nseriesat;

        return $this;
    }

    /**
     * Get nseriesat
     *
     * @return integer
     */
    public function getNseriesat()
    {
        return $this->nseriesat;
    }

    /**
     * Set nrec
     *
     * @param string $nrec
     *
     * @return DashboardConcHeader
     */
    public function setNrec($nrec)
    {
        $this->nrec = $nrec;

        return $this;
    }

    /**
     * Get nrec
     *
     * @return string
     */
    public function getNrec()
    {
        return $this->nrec;
    }

    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return DashboardConcHeader
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
     * @return DashboardConcHeader
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
     * Set dhenviolote
     *
     * @param \DateTime $dhenviolote
     *
     * @return DashboardConcHeader
     */
    public function setDhenviolote($dhenviolote)
    {
        $this->dhenviolote = $dhenviolote;

        return $this;
    }

    /**
     * Get dhenviolote
     *
     * @return \DateTime
     */
    public function getDhenviolote()
    {
        return $this->dhenviolote;
    }

    /**
     * Set dhprocessamento
     *
     * @param \DateTime $dhprocessamento
     *
     * @return DashboardConcHeader
     */
    public function setDhprocessamento($dhprocessamento)
    {
        $this->dhprocessamento = $dhprocessamento;

        return $this;
    }

    /**
     * Get dhprocessamento
     *
     * @return \DateTime
     */
    public function getDhprocessamento()
    {
        return $this->dhprocessamento;
    }

    /**
     * Set tipolote
     *
     * @param string $tipolote
     *
     * @return DashboardConcHeader
     */
    public function setTipolote($tipolote)
    {
        $this->tipolote = $tipolote;

        return $this;
    }

    /**
     * Get tipolote
     *
     * @return string
     */
    public function getTipolote()
    {
        return $this->tipolote;
    }

    /**
     * Set origem
     *
     * @param string $origem
     *
     * @return DashboardConcHeader
     */
    public function setOrigem($origem)
    {
        $this->origem = $origem;

        return $this;
    }

    /**
     * Get origem
     *
     * @return string
     */
    public function getOrigem()
    {
        return $this->origem;
    }

    /**
     * Set qtdecupoms
     *
     * @param integer $qtdecupoms
     *
     * @return DashboardConcHeader
     */
    public function setQtdecupoms($qtdecupoms)
    {
        $this->qtdecupoms = $qtdecupoms;

        return $this;
    }

    /**
     * Get qtdecupoms
     *
     * @return integer
     */
    public function getQtdecupoms()
    {
        return $this->qtdecupoms;
    }

    /**
     * Set situacaolote
     *
     * @param string $situacaolote
     *
     * @return DashboardConcHeader
     */
    public function setSituacaolote($situacaolote)
    {
        $this->situacaolote = $situacaolote;

        return $this;
    }

    /**
     * Get situacaolote
     *
     * @return string
     */
    public function getSituacaolote()
    {
        return $this->situacaolote;
    }

    /**
     * Set lastSentTime
     *
     * @param \DateTime $lastSentTime
     *
     * @return DashboardConcHeader
     */
    public function setLastSentTime($lastSentTime)
    {
        $this->lastSentTime = $lastSentTime;

        return $this;
    }

    /**
     * Get lastSentTime
     *
     * @return \DateTime
     */
    public function getLastSentTime()
    {
        return $this->lastSentTime;
    }
}
