<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfoNutrition
 *
 * @ORM\Table(name="info_nutrition")
 * @ORM\Entity
 */
class InfoNutrition
{
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
     * @ORM\Column(name="quantity_portion", type="decimal", precision=8, scale=3, nullable=true)
     */
    private $quantityPortion = '0.000';

    /**
     * @var integer
     *
     * @ORM\Column(name="unit_portion", type="smallint", nullable=true)
     */
    private $unitPortion = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="full_part", type="decimal", precision=8, scale=3, nullable=true)
     */
    private $fullPart = '0.000';

    /**
     * @var integer
     *
     * @ORM\Column(name="decimal_household_measure", type="smallint", nullable=true)
     */
    private $decimalHouseholdMeasure = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="household_measure", type="smallint", nullable=true)
     */
    private $householdMeasure = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="smallint", nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="caloric_value", type="smallint", nullable=true)
     */
    private $caloricValue = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="carbohydrates", type="decimal", precision=4, scale=1, nullable=true)
     */
    private $carbohydrates = '0.0';

    /**
     * @var string
     *
     * @ORM\Column(name="protein", type="decimal", precision=3, scale=1, nullable=true)
     */
    private $protein = '0.0';

    /**
     * @var string
     *
     * @ORM\Column(name="total_fat", type="decimal", precision=3, scale=1, nullable=true)
     */
    private $totalFat = '0.0';

    /**
     * @var string
     *
     * @ORM\Column(name="saturated_fat", type="decimal", precision=3, scale=1, nullable=true)
     */
    private $saturatedFat = '0.0';

    /**
     * @var string
     *
     * @ORM\Column(name="trans_fat", type="decimal", precision=3, scale=1, nullable=true)
     */
    private $transFat = '0.0';

    /**
     * @var string
     *
     * @ORM\Column(name="dietary_fiber", type="decimal", precision=3, scale=1, nullable=true)
     */
    private $dietaryFiber = '0.0';

    /**
     * @var string
     *
     * @ORM\Column(name="sodium", type="decimal", precision=5, scale=1, nullable=true)
     */
    private $sodium = '0.0';



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
     * Set quantityPortion
     *
     * @param string $quantityPortion
     *
     * @return InfoNutrition
     */
    public function setQuantityPortion($quantityPortion)
    {
        $this->quantityPortion = $quantityPortion;

        return $this;
    }

    /**
     * Get quantityPortion
     *
     * @return string
     */
    public function getQuantityPortion()
    {
        return $this->quantityPortion;
    }

    /**
     * Set unitPortion
     *
     * @param integer $unitPortion
     *
     * @return InfoNutrition
     */
    public function setUnitPortion($unitPortion)
    {
        $this->unitPortion = $unitPortion;

        return $this;
    }

    /**
     * Get unitPortion
     *
     * @return integer
     */
    public function getUnitPortion()
    {
        return $this->unitPortion;
    }

    /**
     * Set fullPart
     *
     * @param string $fullPart
     *
     * @return InfoNutrition
     */
    public function setFullPart($fullPart)
    {
        $this->fullPart = $fullPart;

        return $this;
    }

    /**
     * Get fullPart
     *
     * @return string
     */
    public function getFullPart()
    {
        return $this->fullPart;
    }

    /**
     * Set decimalHouseholdMeasure
     *
     * @param integer $decimalHouseholdMeasure
     *
     * @return InfoNutrition
     */
    public function setDecimalHouseholdMeasure($decimalHouseholdMeasure)
    {
        $this->decimalHouseholdMeasure = $decimalHouseholdMeasure;

        return $this;
    }

    /**
     * Get decimalHouseholdMeasure
     *
     * @return integer
     */
    public function getDecimalHouseholdMeasure()
    {
        return $this->decimalHouseholdMeasure;
    }

    /**
     * Set householdMeasure
     *
     * @param integer $householdMeasure
     *
     * @return InfoNutrition
     */
    public function setHouseholdMeasure($householdMeasure)
    {
        $this->householdMeasure = $householdMeasure;

        return $this;
    }

    /**
     * Get householdMeasure
     *
     * @return integer
     */
    public function getHouseholdMeasure()
    {
        return $this->householdMeasure;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return InfoNutrition
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set caloricValue
     *
     * @param integer $caloricValue
     *
     * @return InfoNutrition
     */
    public function setCaloricValue($caloricValue)
    {
        $this->caloricValue = $caloricValue;

        return $this;
    }

    /**
     * Get caloricValue
     *
     * @return integer
     */
    public function getCaloricValue()
    {
        return $this->caloricValue;
    }

    /**
     * Set carbohydrates
     *
     * @param string $carbohydrates
     *
     * @return InfoNutrition
     */
    public function setCarbohydrates($carbohydrates)
    {
        $this->carbohydrates = $carbohydrates;

        return $this;
    }

    /**
     * Get carbohydrates
     *
     * @return string
     */
    public function getCarbohydrates()
    {
        return $this->carbohydrates;
    }

    /**
     * Set protein
     *
     * @param string $protein
     *
     * @return InfoNutrition
     */
    public function setProtein($protein)
    {
        $this->protein = $protein;

        return $this;
    }

    /**
     * Get protein
     *
     * @return string
     */
    public function getProtein()
    {
        return $this->protein;
    }

    /**
     * Set totalFat
     *
     * @param string $totalFat
     *
     * @return InfoNutrition
     */
    public function setTotalFat($totalFat)
    {
        $this->totalFat = $totalFat;

        return $this;
    }

    /**
     * Get totalFat
     *
     * @return string
     */
    public function getTotalFat()
    {
        return $this->totalFat;
    }

    /**
     * Set saturatedFat
     *
     * @param string $saturatedFat
     *
     * @return InfoNutrition
     */
    public function setSaturatedFat($saturatedFat)
    {
        $this->saturatedFat = $saturatedFat;

        return $this;
    }

    /**
     * Get saturatedFat
     *
     * @return string
     */
    public function getSaturatedFat()
    {
        return $this->saturatedFat;
    }

    /**
     * Set transFat
     *
     * @param string $transFat
     *
     * @return InfoNutrition
     */
    public function setTransFat($transFat)
    {
        $this->transFat = $transFat;

        return $this;
    }

    /**
     * Get transFat
     *
     * @return string
     */
    public function getTransFat()
    {
        return $this->transFat;
    }

    /**
     * Set dietaryFiber
     *
     * @param string $dietaryFiber
     *
     * @return InfoNutrition
     */
    public function setDietaryFiber($dietaryFiber)
    {
        $this->dietaryFiber = $dietaryFiber;

        return $this;
    }

    /**
     * Get dietaryFiber
     *
     * @return string
     */
    public function getDietaryFiber()
    {
        return $this->dietaryFiber;
    }

    /**
     * Set sodium
     *
     * @param string $sodium
     *
     * @return InfoNutrition
     */
    public function setSodium($sodium)
    {
        $this->sodium = $sodium;

        return $this;
    }

    /**
     * Get sodium
     *
     * @return string
     */
    public function getSodium()
    {
        return $this->sodium;
    }
}
