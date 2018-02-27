<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderType
 *
 * @ORM\Table(name="order_type")
 * @ORM\Entity
 */
class OrderType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="order_type", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $orderType;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;



    /**
     * Get orderType
     *
     * @return integer
     */
    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return OrderType
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
}
