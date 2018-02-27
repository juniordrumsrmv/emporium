<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NpSkuId
 *
 * @ORM\Table(name="np_sku_id")
 * @ORM\Entity
 */
class NpSkuId
{
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
     * @ORM\Column(name="np_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $npId;



    /**
     * Set skuId
     *
     * @param string $skuId
     *
     * @return NpSkuId
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
     * Set npId
     *
     * @param integer $npId
     *
     * @return NpSkuId
     */
    public function setNpId($npId)
    {
        $this->npId = $npId;

        return $this;
    }

    /**
     * Get npId
     *
     * @return integer
     */
    public function getNpId()
    {
        return $this->npId;
    }
}
