<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * City
 *
 * @ORM\Table(name="city", indexes={@ORM\Index(name="index_city_name_sound", columns={"city_name_sound"})})
 * @ORM\Entity
 */
class City
{
    /**
     * @var string
     *
     * @ORM\Column(name="country_code", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $countryCode;

    /**
     * @var string
     *
     * @ORM\Column(name="city_code", type="string", length=16, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cityCode;

    /**
     * @var string
     *
     * @ORM\Column(name="state_code", type="string", length=10, nullable=false)
     */
    private $stateCode;

    /**
     * @var string
     *
     * @ORM\Column(name="city_name", type="string", length=255, nullable=true)
     */
    private $cityName;

    /**
     * @var string
     *
     * @ORM\Column(name="city_name_sound", type="string", length=255, nullable=true)
     */
    private $cityNameSound;



    /**
     * Set countryCode
     *
     * @param string $countryCode
     *
     * @return City
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Set cityCode
     *
     * @param string $cityCode
     *
     * @return City
     */
    public function setCityCode($cityCode)
    {
        $this->cityCode = $cityCode;

        return $this;
    }

    /**
     * Get cityCode
     *
     * @return string
     */
    public function getCityCode()
    {
        return $this->cityCode;
    }

    /**
     * Set stateCode
     *
     * @param string $stateCode
     *
     * @return City
     */
    public function setStateCode($stateCode)
    {
        $this->stateCode = $stateCode;

        return $this;
    }

    /**
     * Get stateCode
     *
     * @return string
     */
    public function getStateCode()
    {
        return $this->stateCode;
    }

    /**
     * Set cityName
     *
     * @param string $cityName
     *
     * @return City
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;

        return $this;
    }

    /**
     * Get cityName
     *
     * @return string
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * Set cityNameSound
     *
     * @param string $cityNameSound
     *
     * @return City
     */
    public function setCityNameSound($cityNameSound)
    {
        $this->cityNameSound = $cityNameSound;

        return $this;
    }

    /**
     * Get cityNameSound
     *
     * @return string
     */
    public function getCityNameSound()
    {
        return $this->cityNameSound;
    }
}
