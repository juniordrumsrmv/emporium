<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BacenCountry
 *
 * @ORM\Table(name="bacen_country")
 * @ORM\Entity
 */
class BacenCountry
{
    /**
     * @var integer
     *
     * @ORM\Column(name="country_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $countryId;

    /**
     * @var string
     *
     * @ORM\Column(name="country_name", type="string", length=60, nullable=false)
     */
    private $countryName;



    /**
     * Get countryId
     *
     * @return integer
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * Set countryName
     *
     * @param string $countryName
     *
     * @return BacenCountry
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;

        return $this;
    }

    /**
     * Get countryName
     *
     * @return string
     */
    public function getCountryName()
    {
        return $this->countryName;
    }
}
