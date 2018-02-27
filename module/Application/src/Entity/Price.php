<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Price
 *
 * @ORM\Table(name="price")
 * @ORM\Entity
 */
class Price
{
    /**
     * @var integer
     *
     * @ORM\Column(name="price_key", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $priceKey;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="adm_price", type="boolean", nullable=false)
     */
    private $admPrice = '0';



    /**
     * Get priceKey
     *
     * @return integer
     */
    public function getPriceKey()
    {
        return $this->priceKey;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Price
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
     * Set lastChangeTime
     *
     * @param \DateTime $lastChangeTime
     *
     * @return Price
     */
    public function setLastChangeTime($lastChangeTime)
    {
        $this->lastChangeTime = $lastChangeTime;

        return $this;
    }

    /**
     * Get lastChangeTime
     *
     * @return \DateTime
     */
    public function getLastChangeTime()
    {
        return $this->lastChangeTime;
    }

    /**
     * Set admPrice
     *
     * @param boolean $admPrice
     *
     * @return Price
     */
    public function setAdmPrice($admPrice)
    {
        $this->admPrice = $admPrice;

        return $this;
    }

    /**
     * Get admPrice
     *
     * @return boolean
     */
    public function getAdmPrice()
    {
        return $this->admPrice;
    }
}
