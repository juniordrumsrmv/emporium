<?php

namespace Emporium;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityCustodiamUser
 *
 * @ORM\Table(name="custodiam_user")
 * @ORM\Entity
 */
class CustodiamUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="custodiam_store", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $custodiamStore;

    /**
     * @var string
     *
     * @ORM\Column(name="custodiam_user_email", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $custodiamUserEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="custodiam_user_password", type="string", length=64, nullable=true)
     */
    private $custodiamUserPassword;

    /**
     * @var integer
     *
     * @ORM\Column(name="custodiam_user_type", type="smallint", nullable=true)
     */
    private $custodiamUserType;

    /**
     * @var integer
     *
     * @ORM\Column(name="custodiam_flag", type="smallint", nullable=true)
     */
    private $custodiamFlag;



    /**
     * Set custodiamStore
     *
     * @param integer $custodiamStore
     *
     * @return CustodiamUser
     */
    public function setCustodiamStore($custodiamStore)
    {
        $this->custodiamStore = $custodiamStore;

        return $this;
    }

    /**
     * Get custodiamStore
     *
     * @return integer
     */
    public function getCustodiamStore()
    {
        return $this->custodiamStore;
    }

    /**
     * Set custodiamUserEmail
     *
     * @param string $custodiamUserEmail
     *
     * @return CustodiamUser
     */
    public function setCustodiamUserEmail($custodiamUserEmail)
    {
        $this->custodiamUserEmail = $custodiamUserEmail;

        return $this;
    }

    /**
     * Get custodiamUserEmail
     *
     * @return string
     */
    public function getCustodiamUserEmail()
    {
        return $this->custodiamUserEmail;
    }

    /**
     * Set custodiamUserPassword
     *
     * @param string $custodiamUserPassword
     *
     * @return CustodiamUser
     */
    public function setCustodiamUserPassword($custodiamUserPassword)
    {
        $this->custodiamUserPassword = $custodiamUserPassword;

        return $this;
    }

    /**
     * Get custodiamUserPassword
     *
     * @return string
     */
    public function getCustodiamUserPassword()
    {
        return $this->custodiamUserPassword;
    }

    /**
     * Set custodiamUserType
     *
     * @param integer $custodiamUserType
     *
     * @return CustodiamUser
     */
    public function setCustodiamUserType($custodiamUserType)
    {
        $this->custodiamUserType = $custodiamUserType;

        return $this;
    }

    /**
     * Get custodiamUserType
     *
     * @return integer
     */
    public function getCustodiamUserType()
    {
        return $this->custodiamUserType;
    }

    /**
     * Set custodiamFlag
     *
     * @param integer $custodiamFlag
     *
     * @return CustodiamUser
     */
    public function setCustodiamFlag($custodiamFlag)
    {
        $this->custodiamFlag = $custodiamFlag;

        return $this;
    }

    /**
     * Get custodiamFlag
     *
     * @return integer
     */
    public function getCustodiamFlag()
    {
        return $this->custodiamFlag;
    }
}
