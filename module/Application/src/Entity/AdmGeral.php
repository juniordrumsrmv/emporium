<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdmGeral
 *
 * @ORM\Table(name="adm_geral", indexes={@ORM\Index(name="index_adm_geral_01", columns={"cnpj_loja", "cod_solicitacao"}), @ORM\Index(name="index_adm_geral_02", columns={"num_adm", "store_key"})})
 * @ORM\Entity
 */
class AdmGeral
{
    /**
     * @var integer
     *
     * @ORM\Column(name="transaction", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $transaction;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj_loja", type="string", length=17, nullable=false)
     */
    private $cnpjLoja;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_solicitacao", type="integer", nullable=false)
     */
    private $codSolicitacao;

    /**
     * @var string
     *
     * @ORM\Column(name="num_adm", type="string", length=30, nullable=true)
     */
    private $numAdm;

    /**
     * @var string
     *
     * @ORM\Column(name="crm", type="string", length=17, nullable=true)
     */
    private $crm;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf", type="string", length=17, nullable=true)
     */
    private $cpf;

    /**
     * @var integer
     *
     * @ORM\Column(name="ticket_number", type="integer", nullable=true)
     */
    private $ticketNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="uni_federal", type="string", length=2, nullable=true)
     */
    private $uniFederal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_prescricao", type="date", nullable=true)
     */
    private $dataPrescricao;

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
     * @var integer
     *
     * @ORM\Column(name="status_emporium", type="integer", nullable=true)
     */
    private $statusEmporium;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=true)
     */
    private $startTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_number", type="smallint", nullable=true)
     */
    private $posNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="integer", nullable=false)
     */
    private $storeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=60, nullable=true)
     */
    private $nome;

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
     * Get transaction
     *
     * @return integer
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Set cnpjLoja
     *
     * @param string $cnpjLoja
     *
     * @return AdmGeral
     */
    public function setCnpjLoja($cnpjLoja)
    {
        $this->cnpjLoja = $cnpjLoja;

        return $this;
    }

    /**
     * Get cnpjLoja
     *
     * @return string
     */
    public function getCnpjLoja()
    {
        return $this->cnpjLoja;
    }

    /**
     * Set codSolicitacao
     *
     * @param integer $codSolicitacao
     *
     * @return AdmGeral
     */
    public function setCodSolicitacao($codSolicitacao)
    {
        $this->codSolicitacao = $codSolicitacao;

        return $this;
    }

    /**
     * Get codSolicitacao
     *
     * @return integer
     */
    public function getCodSolicitacao()
    {
        return $this->codSolicitacao;
    }

    /**
     * Set numAdm
     *
     * @param string $numAdm
     *
     * @return AdmGeral
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
     * Set crm
     *
     * @param string $crm
     *
     * @return AdmGeral
     */
    public function setCrm($crm)
    {
        $this->crm = $crm;

        return $this;
    }

    /**
     * Get crm
     *
     * @return string
     */
    public function getCrm()
    {
        return $this->crm;
    }

    /**
     * Set cpf
     *
     * @param string $cpf
     *
     * @return AdmGeral
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get cpf
     *
     * @return string
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set ticketNumber
     *
     * @param integer $ticketNumber
     *
     * @return AdmGeral
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
     * Set uniFederal
     *
     * @param string $uniFederal
     *
     * @return AdmGeral
     */
    public function setUniFederal($uniFederal)
    {
        $this->uniFederal = $uniFederal;

        return $this;
    }

    /**
     * Get uniFederal
     *
     * @return string
     */
    public function getUniFederal()
    {
        return $this->uniFederal;
    }

    /**
     * Set dataPrescricao
     *
     * @param \DateTime $dataPrescricao
     *
     * @return AdmGeral
     */
    public function setDataPrescricao($dataPrescricao)
    {
        $this->dataPrescricao = $dataPrescricao;

        return $this;
    }

    /**
     * Get dataPrescricao
     *
     * @return \DateTime
     */
    public function getDataPrescricao()
    {
        return $this->dataPrescricao;
    }

    /**
     * Set codIndicador
     *
     * @param integer $codIndicador
     *
     * @return AdmGeral
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
     * @return AdmGeral
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

    /**
     * Set statusEmporium
     *
     * @param integer $statusEmporium
     *
     * @return AdmGeral
     */
    public function setStatusEmporium($statusEmporium)
    {
        $this->statusEmporium = $statusEmporium;

        return $this;
    }

    /**
     * Get statusEmporium
     *
     * @return integer
     */
    public function getStatusEmporium()
    {
        return $this->statusEmporium;
    }

    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return AdmGeral
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
     * Set posNumber
     *
     * @param integer $posNumber
     *
     * @return AdmGeral
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
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return AdmGeral
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
     * Set nome
     *
     * @param string $nome
     *
     * @return AdmGeral
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set valorTotal
     *
     * @param string $valorTotal
     *
     * @return AdmGeral
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
     * @return AdmGeral
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
     * @return AdmGeral
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
     * @return AdmGeral
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
}
