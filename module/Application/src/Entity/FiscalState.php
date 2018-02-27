<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FiscalState
 *
 * @ORM\Table(name="fiscal_state")
 * @ORM\Entity
 */
class FiscalState
{
    /**
     * @var string
     *
     * @ORM\Column(name="fiscal_state_acronym", type="string", length=4, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fiscalStateAcronym;

    /**
     * @var integer
     *
     * @ORM\Column(name="fiscal_state_type", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fiscalStateType;

    /**
     * @var string
     *
     * @ORM\Column(name="fiscal_state_url", type="string", length=255, nullable=true)
     */
    private $fiscalStateUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="fiscal_state_name_space", type="string", length=255, nullable=true)
     */
    private $fiscalStateNameSpace;

    /**
     * @var string
     *
     * @ORM\Column(name="fiscal_state_ws_submit_format", type="text", length=65535, nullable=true)
     */
    private $fiscalStateWsSubmitFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="fiscal_state_ws_query_format", type="text", length=65535, nullable=true)
     */
    private $fiscalStateWsQueryFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="fiscal_state_ws_submit_header", type="text", length=65535, nullable=true)
     */
    private $fiscalStateWsSubmitHeader;

    /**
     * @var string
     *
     * @ORM\Column(name="fiscal_state_ws_query_header", type="text", length=65535, nullable=true)
     */
    private $fiscalStateWsQueryHeader;



    /**
     * Set fiscalStateAcronym
     *
     * @param string $fiscalStateAcronym
     *
     * @return FiscalState
     */
    public function setFiscalStateAcronym($fiscalStateAcronym)
    {
        $this->fiscalStateAcronym = $fiscalStateAcronym;

        return $this;
    }

    /**
     * Get fiscalStateAcronym
     *
     * @return string
     */
    public function getFiscalStateAcronym()
    {
        return $this->fiscalStateAcronym;
    }

    /**
     * Set fiscalStateType
     *
     * @param integer $fiscalStateType
     *
     * @return FiscalState
     */
    public function setFiscalStateType($fiscalStateType)
    {
        $this->fiscalStateType = $fiscalStateType;

        return $this;
    }

    /**
     * Get fiscalStateType
     *
     * @return integer
     */
    public function getFiscalStateType()
    {
        return $this->fiscalStateType;
    }

    /**
     * Set fiscalStateUrl
     *
     * @param string $fiscalStateUrl
     *
     * @return FiscalState
     */
    public function setFiscalStateUrl($fiscalStateUrl)
    {
        $this->fiscalStateUrl = $fiscalStateUrl;

        return $this;
    }

    /**
     * Get fiscalStateUrl
     *
     * @return string
     */
    public function getFiscalStateUrl()
    {
        return $this->fiscalStateUrl;
    }

    /**
     * Set fiscalStateNameSpace
     *
     * @param string $fiscalStateNameSpace
     *
     * @return FiscalState
     */
    public function setFiscalStateNameSpace($fiscalStateNameSpace)
    {
        $this->fiscalStateNameSpace = $fiscalStateNameSpace;

        return $this;
    }

    /**
     * Get fiscalStateNameSpace
     *
     * @return string
     */
    public function getFiscalStateNameSpace()
    {
        return $this->fiscalStateNameSpace;
    }

    /**
     * Set fiscalStateWsSubmitFormat
     *
     * @param string $fiscalStateWsSubmitFormat
     *
     * @return FiscalState
     */
    public function setFiscalStateWsSubmitFormat($fiscalStateWsSubmitFormat)
    {
        $this->fiscalStateWsSubmitFormat = $fiscalStateWsSubmitFormat;

        return $this;
    }

    /**
     * Get fiscalStateWsSubmitFormat
     *
     * @return string
     */
    public function getFiscalStateWsSubmitFormat()
    {
        return $this->fiscalStateWsSubmitFormat;
    }

    /**
     * Set fiscalStateWsQueryFormat
     *
     * @param string $fiscalStateWsQueryFormat
     *
     * @return FiscalState
     */
    public function setFiscalStateWsQueryFormat($fiscalStateWsQueryFormat)
    {
        $this->fiscalStateWsQueryFormat = $fiscalStateWsQueryFormat;

        return $this;
    }

    /**
     * Get fiscalStateWsQueryFormat
     *
     * @return string
     */
    public function getFiscalStateWsQueryFormat()
    {
        return $this->fiscalStateWsQueryFormat;
    }

    /**
     * Set fiscalStateWsSubmitHeader
     *
     * @param string $fiscalStateWsSubmitHeader
     *
     * @return FiscalState
     */
    public function setFiscalStateWsSubmitHeader($fiscalStateWsSubmitHeader)
    {
        $this->fiscalStateWsSubmitHeader = $fiscalStateWsSubmitHeader;

        return $this;
    }

    /**
     * Get fiscalStateWsSubmitHeader
     *
     * @return string
     */
    public function getFiscalStateWsSubmitHeader()
    {
        return $this->fiscalStateWsSubmitHeader;
    }

    /**
     * Set fiscalStateWsQueryHeader
     *
     * @param string $fiscalStateWsQueryHeader
     *
     * @return FiscalState
     */
    public function setFiscalStateWsQueryHeader($fiscalStateWsQueryHeader)
    {
        $this->fiscalStateWsQueryHeader = $fiscalStateWsQueryHeader;

        return $this;
    }

    /**
     * Get fiscalStateWsQueryHeader
     *
     * @return string
     */
    public function getFiscalStateWsQueryHeader()
    {
        return $this->fiscalStateWsQueryHeader;
    }
}
