<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProducedList
 *
 * @ORM\Table(name="produced_list")
 * @ORM\Entity
 */
class ProducedList
{
    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key_prod", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pluKeyProd;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key_input", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pluKeyInput;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=6, scale=3, nullable=false)
     */
    private $quantity;



    /**
     * Set pluKeyProd
     *
     * @param integer $pluKeyProd
     *
     * @return ProducedList
     */
    public function setPluKeyProd($pluKeyProd)
    {
        $this->pluKeyProd = $pluKeyProd;

        return $this;
    }

    /**
     * Get pluKeyProd
     *
     * @return integer
     */
    public function getPluKeyProd()
    {
        return $this->pluKeyProd;
    }

    /**
     * Set pluKeyInput
     *
     * @param integer $pluKeyInput
     *
     * @return ProducedList
     */
    public function setPluKeyInput($pluKeyInput)
    {
        $this->pluKeyInput = $pluKeyInput;

        return $this;
    }

    /**
     * Get pluKeyInput
     *
     * @return integer
     */
    public function getPluKeyInput()
    {
        return $this->pluKeyInput;
    }

    /**
     * Set quantity
     *
     * @param string $quantity
     *
     * @return ProducedList
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
}
