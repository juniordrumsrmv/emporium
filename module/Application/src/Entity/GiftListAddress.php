<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GiftListAddress
 *
 * @ORM\Table(name="gift_list_address")
 * @ORM\Entity
 */
class GiftListAddress
{
    /**
     * @var integer
     *
     * @ORM\Column(name="gift_list_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $giftListKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $customerKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="custaddr_type", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $custaddrType;



    /**
     * Set giftListKey
     *
     * @param integer $giftListKey
     *
     * @return GiftListAddress
     */
    public function setGiftListKey($giftListKey)
    {
        $this->giftListKey = $giftListKey;

        return $this;
    }

    /**
     * Get giftListKey
     *
     * @return integer
     */
    public function getGiftListKey()
    {
        return $this->giftListKey;
    }

    /**
     * Set customerKey
     *
     * @param integer $customerKey
     *
     * @return GiftListAddress
     */
    public function setCustomerKey($customerKey)
    {
        $this->customerKey = $customerKey;

        return $this;
    }

    /**
     * Get customerKey
     *
     * @return integer
     */
    public function getCustomerKey()
    {
        return $this->customerKey;
    }

    /**
     * Set custaddrType
     *
     * @param integer $custaddrType
     *
     * @return GiftListAddress
     */
    public function setCustaddrType($custaddrType)
    {
        $this->custaddrType = $custaddrType;

        return $this;
    }

    /**
     * Get custaddrType
     *
     * @return integer
     */
    public function getCustaddrType()
    {
        return $this->custaddrType;
    }
}
