<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustodiamData
 *
 * @ORM\Table(name="custodiam_data")
 * @ORM\Entity
 */
class CustodiamData
{
    /**
     * @var integer
     *
     * @ORM\Column(name="custodiam_service_type", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $custodiamServiceType;

    /**
     * @var integer
     *
     * @ORM\Column(name="custodiam_action_type", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $custodiamActionType;

    /**
     * @var integer
     *
     * @ORM\Column(name="custodiam_partner", type="smallint", nullable=false)
     */
    private $custodiamPartner;

    /**
     * @var string
     *
     * @ORM\Column(name="custodiam_url", type="string", length=255, nullable=true)
     */
    private $custodiamUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="custodiam_name_space", type="string", length=255, nullable=true)
     */
    private $custodiamNameSpace;

    /**
     * @var string
     *
     * @ORM\Column(name="custodiam_ws_submit_format", type="text", length=65535, nullable=true)
     */
    private $custodiamWsSubmitFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="custodiam_ws_query_format", type="text", length=65535, nullable=true)
     */
    private $custodiamWsQueryFormat;



    /**
     * Set custodiamServiceType
     *
     * @param integer $custodiamServiceType
     *
     * @return CustodiamData
     */
    public function setCustodiamServiceType($custodiamServiceType)
    {
        $this->custodiamServiceType = $custodiamServiceType;

        return $this;
    }

    /**
     * Get custodiamServiceType
     *
     * @return integer
     */
    public function getCustodiamServiceType()
    {
        return $this->custodiamServiceType;
    }

    /**
     * Set custodiamActionType
     *
     * @param integer $custodiamActionType
     *
     * @return CustodiamData
     */
    public function setCustodiamActionType($custodiamActionType)
    {
        $this->custodiamActionType = $custodiamActionType;

        return $this;
    }

    /**
     * Get custodiamActionType
     *
     * @return integer
     */
    public function getCustodiamActionType()
    {
        return $this->custodiamActionType;
    }

    /**
     * Set custodiamPartner
     *
     * @param integer $custodiamPartner
     *
     * @return CustodiamData
     */
    public function setCustodiamPartner($custodiamPartner)
    {
        $this->custodiamPartner = $custodiamPartner;

        return $this;
    }

    /**
     * Get custodiamPartner
     *
     * @return integer
     */
    public function getCustodiamPartner()
    {
        return $this->custodiamPartner;
    }

    /**
     * Set custodiamUrl
     *
     * @param string $custodiamUrl
     *
     * @return CustodiamData
     */
    public function setCustodiamUrl($custodiamUrl)
    {
        $this->custodiamUrl = $custodiamUrl;

        return $this;
    }

    /**
     * Get custodiamUrl
     *
     * @return string
     */
    public function getCustodiamUrl()
    {
        return $this->custodiamUrl;
    }

    /**
     * Set custodiamNameSpace
     *
     * @param string $custodiamNameSpace
     *
     * @return CustodiamData
     */
    public function setCustodiamNameSpace($custodiamNameSpace)
    {
        $this->custodiamNameSpace = $custodiamNameSpace;

        return $this;
    }

    /**
     * Get custodiamNameSpace
     *
     * @return string
     */
    public function getCustodiamNameSpace()
    {
        return $this->custodiamNameSpace;
    }

    /**
     * Set custodiamWsSubmitFormat
     *
     * @param string $custodiamWsSubmitFormat
     *
     * @return CustodiamData
     */
    public function setCustodiamWsSubmitFormat($custodiamWsSubmitFormat)
    {
        $this->custodiamWsSubmitFormat = $custodiamWsSubmitFormat;

        return $this;
    }

    /**
     * Get custodiamWsSubmitFormat
     *
     * @return string
     */
    public function getCustodiamWsSubmitFormat()
    {
        return $this->custodiamWsSubmitFormat;
    }

    /**
     * Set custodiamWsQueryFormat
     *
     * @param string $custodiamWsQueryFormat
     *
     * @return CustodiamData
     */
    public function setCustodiamWsQueryFormat($custodiamWsQueryFormat)
    {
        $this->custodiamWsQueryFormat = $custodiamWsQueryFormat;

        return $this;
    }

    /**
     * Get custodiamWsQueryFormat
     *
     * @return string
     */
    public function getCustodiamWsQueryFormat()
    {
        return $this->custodiamWsQueryFormat;
    }
}
