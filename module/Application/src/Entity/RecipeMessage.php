<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RecipeMessage
 *
 * @ORM\Table(name="recipe_message")
 * @ORM\Entity
 */
class RecipeMessage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pluKey;

    /**
     * @var string
     *
     * @ORM\Column(name="observation", type="string", length=255, nullable=true)
     */
    private $observation;

    /**
     * @var string
     *
     * @ORM\Column(name="information", type="string", length=255, nullable=true)
     */
    private $information;

    /**
     * @var string
     *
     * @ORM\Column(name="extra_information", type="blob", length=65535, nullable=true)
     */
    private $extraInformation;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return RecipeMessage
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
     * Set pluKey
     *
     * @param integer $pluKey
     *
     * @return RecipeMessage
     */
    public function setPluKey($pluKey)
    {
        $this->pluKey = $pluKey;

        return $this;
    }

    /**
     * Get pluKey
     *
     * @return integer
     */
    public function getPluKey()
    {
        return $this->pluKey;
    }

    /**
     * Set observation
     *
     * @param string $observation
     *
     * @return RecipeMessage
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;

        return $this;
    }

    /**
     * Get observation
     *
     * @return string
     */
    public function getObservation()
    {
        return $this->observation;
    }

    /**
     * Set information
     *
     * @param string $information
     *
     * @return RecipeMessage
     */
    public function setInformation($information)
    {
        $this->information = $information;

        return $this;
    }

    /**
     * Get information
     *
     * @return string
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Set extraInformation
     *
     * @param string $extraInformation
     *
     * @return RecipeMessage
     */
    public function setExtraInformation($extraInformation)
    {
        $this->extraInformation = $extraInformation;

        return $this;
    }

    /**
     * Get extraInformation
     *
     * @return string
     */
    public function getExtraInformation()
    {
        return $this->extraInformation;
    }
}
