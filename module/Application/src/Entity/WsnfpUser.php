<?php

namespace Emporium;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityWsnfpUser
 *
 * @ORM\Table(name="wsnfp_user")
 * @ORM\Entity
 */
class WsnfpUser
{
    /**
     * @var string
     *
     * @ORM\Column(name="cnpj", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cnpj;

    /**
     * @var string
     *
     * @ORM\Column(name="user_id", type="string", length=64, nullable=true)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_password", type="string", length=64, nullable=true)
     */
    private $userPassword;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_type", type="smallint", nullable=true)
     */
    private $userType;



    /**
     * Get cnpj
     *
     * @return string
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * Set userId
     *
     * @param string $userId
     *
     * @return WsnfpUser
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set userPassword
     *
     * @param string $userPassword
     *
     * @return WsnfpUser
     */
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;

        return $this;
    }

    /**
     * Get userPassword
     *
     * @return string
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * Set userType
     *
     * @param integer $userType
     *
     * @return WsnfpUser
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * Get userType
     *
     * @return integer
     */
    public function getUserType()
    {
        return $this->userType;
    }
}
