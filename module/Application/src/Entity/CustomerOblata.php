<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerOblata
 *
 * @ORM\Table(name="customer_oblata", indexes={@ORM\Index(name="promokey_custkey", columns={"customer_key", "promotion_key"})})
 * @ORM\Entity
 */
class CustomerOblata
{
    /**
     * @var integer
     *
     * @ORM\Column(name="promotion_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $promotionKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $customerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="promotion_points", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $promotionPoints;

    /**
     * @var string
     *
     * @ORM\Column(name="promotion_points_left", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $promotionPointsLeft;



    /**
     * Set promotionKey
     *
     * @param integer $promotionKey
     *
     * @return CustomerOblata
     */
    public function setPromotionKey($promotionKey)
    {
        $this->promotionKey = $promotionKey;

        return $this;
    }

    /**
     * Get promotionKey
     *
     * @return integer
     */
    public function getPromotionKey()
    {
        return $this->promotionKey;
    }

    /**
     * Set customerKey
     *
     * @param integer $customerKey
     *
     * @return CustomerOblata
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
     * Set promotionPoints
     *
     * @param string $promotionPoints
     *
     * @return CustomerOblata
     */
    public function setPromotionPoints($promotionPoints)
    {
        $this->promotionPoints = $promotionPoints;

        return $this;
    }

    /**
     * Get promotionPoints
     *
     * @return string
     */
    public function getPromotionPoints()
    {
        return $this->promotionPoints;
    }

    /**
     * Set promotionPointsLeft
     *
     * @param string $promotionPointsLeft
     *
     * @return CustomerOblata
     */
    public function setPromotionPointsLeft($promotionPointsLeft)
    {
        $this->promotionPointsLeft = $promotionPointsLeft;

        return $this;
    }

    /**
     * Get promotionPointsLeft
     *
     * @return string
     */
    public function getPromotionPointsLeft()
    {
        return $this->promotionPointsLeft;
    }
}
