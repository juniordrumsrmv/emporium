<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DashboardConcItem
 *
 * @ORM\Table(name="dashboard_conc_item")
 * @ORM\Entity
 */
class DashboardConcItem
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
     * @ORM\Column(name="chave", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $chave;

    /**
     * @var integer
     *
     * @ORM\Column(name="ncupom", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ncupom;

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
     * @var string
     *
     * @ORM\Column(name="nrec", type="string", length=128, nullable=true)
     */
    private $nrec;

    /**
     * @var string
     *
     * @ORM\Column(name="situacao", type="string", length=256, nullable=true)
     */
    private $situacao;

    /**
     * @var string
     *
     * @ORM\Column(name="cfeerros", type="string", length=256, nullable=true)
     */
    private $cfeerros;

    /**
     * @var integer
     *
     * @ORM\Column(name="conciliare", type="bigint", nullable=true)
     */
    private $conciliare;



    /**
     * Set nseriesat
     *
     * @param integer $nseriesat
     *
     * @return DashboardConcItem
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
     * Set chave
     *
     * @param string $chave
     *
     * @return DashboardConcItem
     */
    public function setChave($chave)
    {
        $this->chave = $chave;

        return $this;
    }

    /**
     * Get chave
     *
     * @return string
     */
    public function getChave()
    {
        return $this->chave;
    }

    /**
     * Set ncupom
     *
     * @param integer $ncupom
     *
     * @return DashboardConcItem
     */
    public function setNcupom($ncupom)
    {
        $this->ncupom = $ncupom;

        return $this;
    }

    /**
     * Get ncupom
     *
     * @return integer
     */
    public function getNcupom()
    {
        return $this->ncupom;
    }

    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return DashboardConcItem
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
     * @return DashboardConcItem
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
     * Set nrec
     *
     * @param string $nrec
     *
     * @return DashboardConcItem
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
     * Set situacao
     *
     * @param string $situacao
     *
     * @return DashboardConcItem
     */
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;

        return $this;
    }

    /**
     * Get situacao
     *
     * @return string
     */
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * Set cfeerros
     *
     * @param string $cfeerros
     *
     * @return DashboardConcItem
     */
    public function setCfeerros($cfeerros)
    {
        $this->cfeerros = $cfeerros;

        return $this;
    }

    /**
     * Get cfeerros
     *
     * @return string
     */
    public function getCfeerros()
    {
        return $this->cfeerros;
    }

    /**
     * Set conciliare
     *
     * @param integer $conciliare
     *
     * @return DashboardConcItem
     */
    public function setConciliare($conciliare)
    {
        $this->conciliare = $conciliare;

        return $this;
    }

    /**
     * Get conciliare
     *
     * @return integer
     */
    public function getConciliare()
    {
        return $this->conciliare;
    }
}
