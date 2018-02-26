<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accountant
 *
 * @ORM\Table(name="accountant")
 * @ORM\Entity
 */
class Accountant
{
    /**
     * @var integer
     *
     * @ORM\Column(name="accountant_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $accountantKey;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=60, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj_cpf", type="string", length=25, nullable=false)
     */
    private $cnpjCpf;

    /**
     * @var string
     *
     * @ORM\Column(name="crc", type="string", length=30, nullable=false)
     */
    private $crc;

    /**
     * @var string
     *
     * @ORM\Column(name="cep", type="string", length=12, nullable=false)
     */
    private $cep;

    /**
     * @var string
     *
     * @ORM\Column(name="logradouro", type="string", length=50, nullable=false)
     */
    private $logradouro;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="smallint", nullable=false)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="complemento", type="string", length=20, nullable=false)
     */
    private $complemento;

    /**
     * @var string
     *
     * @ORM\Column(name="bairro", type="string", length=20, nullable=false)
     */
    private $bairro;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone", type="string", length=15, nullable=false)
     */
    private $telefone;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=15, nullable=false)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_city_code", type="integer", nullable=false)
     */
    private $storeCityCode;



    /**
     * Get accountantKey
     *
     * @return integer
     */
    public function getAccountantKey()
    {
        return $this->accountantKey;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Accountant
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set cnpjCpf
     *
     * @param string $cnpjCpf
     *
     * @return Accountant
     */
    public function setCnpjCpf($cnpjCpf)
    {
        $this->cnpjCpf = $cnpjCpf;

        return $this;
    }

    /**
     * Get cnpjCpf
     *
     * @return string
     */
    public function getCnpjCpf()
    {
        return $this->cnpjCpf;
    }

    /**
     * Set crc
     *
     * @param string $crc
     *
     * @return Accountant
     */
    public function setCrc($crc)
    {
        $this->crc = $crc;

        return $this;
    }

    /**
     * Get crc
     *
     * @return string
     */
    public function getCrc()
    {
        return $this->crc;
    }

    /**
     * Set cep
     *
     * @param string $cep
     *
     * @return Accountant
     */
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get cep
     *
     * @return string
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set logradouro
     *
     * @param string $logradouro
     *
     * @return Accountant
     */
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;

        return $this;
    }

    /**
     * Get logradouro
     *
     * @return string
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     *
     * @return Accountant
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set complemento
     *
     * @param string $complemento
     *
     * @return Accountant
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;

        return $this;
    }

    /**
     * Get complemento
     *
     * @return string
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * Set bairro
     *
     * @param string $bairro
     *
     * @return Accountant
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Get bairro
     *
     * @return string
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Set telefone
     *
     * @param string $telefone
     *
     * @return Accountant
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get telefone
     *
     * @return string
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Accountant
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Accountant
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set storeCityCode
     *
     * @param integer $storeCityCode
     *
     * @return Accountant
     */
    public function setStoreCityCode($storeCityCode)
    {
        $this->storeCityCode = $storeCityCode;

        return $this;
    }

    /**
     * Get storeCityCode
     *
     * @return integer
     */
    public function getStoreCityCode()
    {
        return $this->storeCityCode;
    }
}
