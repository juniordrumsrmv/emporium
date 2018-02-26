<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdmDetalhe
 *
 * @ORM\Table(name="adm_detalhe")
 * @ORM\Entity
 */
class AdmDetalhe
{
    /**
     * @var string
     *
     * @ORM\Column(name="num_adm", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numAdm;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $storeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="sku_id", type="string", length=14, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $skuId;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_number", type="smallint", nullable=true)
     */
    private $posNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="ticket_number", type="integer", nullable=true)
     */
    private $ticketNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=true)
     */
    private $startTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=true)
     */
    private $fiscalDate;

    /**
     * @var string
     *
     * @ORM\Column(name="qty_autorizada", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $qtyAutorizada;

    /**
     * @var string
     *
     * @ORM\Column(name="qty_estornada", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $qtyEstornada;

    /**
     * @var string
     *
     * @ORM\Column(name="unidade_apresentacao", type="string", length=10, nullable=true)
     */
    private $unidadeApresentacao;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_total", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $valorTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_ms", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $valorMs;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_paciente", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $valorPaciente;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_estorno", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $valorEstorno;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_indicador", type="integer", nullable=true)
     */
    private $codIndicador;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_indicador_estorno", type="integer", nullable=true)
     */
    private $codIndicadorEstorno;



    /**
     * Set numAdm
     *
     * @param string $numAdm
     *
     * @return AdmDetalhe
     */
    public function setNumAdm($numAdm)
    {
        $this->numAdm = $numAdm;

        return $this;
    }

    /**
     * Get numAdm
     *
     * @return string
     */
    public function getNumAdm()
    {
        return $this->numAdm;
    }

    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return AdmDetalhe
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
     * Set skuId
     *
     * @param string $skuId
     *
     * @return AdmDetalhe
     */
    public function setSkuId($skuId)
    {
        $this->skuId = $skuId;

        return $this;
    }

    /**
     * Get skuId
     *
     * @return string
     */
    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * Set posNumber
     *
     * @param integer $posNumber
     *
     * @return AdmDetalhe
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
     * @return AdmDetalhe
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
     * @return AdmDetalhe
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
     * Set fiscalDate
     *
     * @param \DateTime $fiscalDate
     *
     * @return AdmDetalhe
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
     * Set qtyAutorizada
     *
     * @param string $qtyAutorizada
     *
     * @return AdmDetalhe
     */
    public function setQtyAutorizada($qtyAutorizada)
    {
        $this->qtyAutorizada = $qtyAutorizada;

        return $this;
    }

    /**
     * Get qtyAutorizada
     *
     * @return string
     */
    public function getQtyAutorizada()
    {
        return $this->qtyAutorizada;
    }

    /**
     * Set qtyEstornada
     *
     * @param string $qtyEstornada
     *
     * @return AdmDetalhe
     */
    public function setQtyEstornada($qtyEstornada)
    {
        $this->qtyEstornada = $qtyEstornada;

        return $this;
    }

    /**
     * Get qtyEstornada
     *
     * @return string
     */
    public function getQtyEstornada()
    {
        return $this->qtyEstornada;
    }

    /**
     * Set unidadeApresentacao
     *
     * @param string $unidadeApresentacao
     *
     * @return AdmDetalhe
     */
    public function setUnidadeApresentacao($unidadeApresentacao)
    {
        $this->unidadeApresentacao = $unidadeApresentacao;

        return $this;
    }

    /**
     * Get unidadeApresentacao
     *
     * @return string
     */
    public function getUnidadeApresentacao()
    {
        return $this->unidadeApresentacao;
    }

    /**
     * Set valorTotal
     *
     * @param string $valorTotal
     *
     * @return AdmDetalhe
     */
    public function setValorTotal($valorTotal)
    {
        $this->valorTotal = $valorTotal;

        return $this;
    }

    /**
     * Get valorTotal
     *
     * @return string
     */
    public function getValorTotal()
    {
        return $this->valorTotal;
    }

    /**
     * Set valorMs
     *
     * @param string $valorMs
     *
     * @return AdmDetalhe
     */
    public function setValorMs($valorMs)
    {
        $this->valorMs = $valorMs;

        return $this;
    }

    /**
     * Get valorMs
     *
     * @return string
     */
    public function getValorMs()
    {
        return $this->valorMs;
    }

    /**
     * Set valorPaciente
     *
     * @param string $valorPaciente
     *
     * @return AdmDetalhe
     */
    public function setValorPaciente($valorPaciente)
    {
        $this->valorPaciente = $valorPaciente;

        return $this;
    }

    /**
     * Get valorPaciente
     *
     * @return string
     */
    public function getValorPaciente()
    {
        return $this->valorPaciente;
    }

    /**
     * Set valorEstorno
     *
     * @param string $valorEstorno
     *
     * @return AdmDetalhe
     */
    public function setValorEstorno($valorEstorno)
    {
        $this->valorEstorno = $valorEstorno;

        return $this;
    }

    /**
     * Get valorEstorno
     *
     * @return string
     */
    public function getValorEstorno()
    {
        return $this->valorEstorno;
    }

    /**
     * Set codIndicador
     *
     * @param integer $codIndicador
     *
     * @return AdmDetalhe
     */
    public function setCodIndicador($codIndicador)
    {
        $this->codIndicador = $codIndicador;

        return $this;
    }

    /**
     * Get codIndicador
     *
     * @return integer
     */
    public function getCodIndicador()
    {
        return $this->codIndicador;
    }

    /**
     * Set codIndicadorEstorno
     *
     * @param integer $codIndicadorEstorno
     *
     * @return AdmDetalhe
     */
    public function setCodIndicadorEstorno($codIndicadorEstorno)
    {
        $this->codIndicadorEstorno = $codIndicadorEstorno;

        return $this;
    }

    /**
     * Get codIndicadorEstorno
     *
     * @return integer
     */
    public function getCodIndicadorEstorno()
    {
        return $this->codIndicadorEstorno;
    }
}
