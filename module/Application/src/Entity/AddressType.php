<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddressType
 *
 * @ORM\Table(name="address_type")
 * @ORM\Entity
 */
class AddressType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="address_type_key", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $addressTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="address_type_name", type="string", length=20, nullable=true)
     */
    private $addressTypeName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="address_type_send", type="boolean", nullable=true)
     */
    private $addressTypeSend;



    /**
     * Get addressTypeKey
     *
     * @return integer
     */
    public function getAddressTypeKey()
    {
        return $this->addressTypeKey;
    }

    /**
     * Set addressTypeName
     *
     * @param string $addressTypeName
     *
     * @return AddressType
     */
    public function setAddressTypeName($addressTypeName)
    {
        $this->addressTypeName = $addressTypeName;

        return $this;
    }

    /**
     * Get addressTypeName
     *
     * @return string
     */
    public function getAddressTypeName()
    {
        return $this->addressTypeName;
    }

    /**
     * Set addressTypeSend
     *
     * @param boolean $addressTypeSend
     *
     * @return AddressType
     */
    public function setAddressTypeSend($addressTypeSend)
    {
        $this->addressTypeSend = $addressTypeSend;

        return $this;
    }

    /**
     * Get addressTypeSend
     *
     * @return boolean
     */
    public function getAddressTypeSend()
    {
        return $this->addressTypeSend;
    }
}
