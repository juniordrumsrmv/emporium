<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PasswordPolicy
 *
 * @ORM\Table(name="password_policy")
 * @ORM\Entity
 */
class PasswordPolicy
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="security_level", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $securityLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="security_name", type="string", length=30, nullable=true)
     */
    private $securityName;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_size", type="smallint", nullable=true)
     */
    private $maxSize;

    /**
     * @var integer
     *
     * @ORM\Column(name="min_size", type="smallint", nullable=true)
     */
    private $minSize;

    /**
     * @var integer
     *
     * @ORM\Column(name="period", type="smallint", nullable=true)
     */
    private $period;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pass_not_name", type="boolean", nullable=true)
     */
    private $passNotName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pass_not_id", type="boolean", nullable=true)
     */
    private $passNotId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pass_not_seq", type="boolean", nullable=true)
     */
    private $passNotSeq;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pass_not_special", type="boolean", nullable=true)
     */
    private $passNotSpecial;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pass_special", type="boolean", nullable=true)
     */
    private $passSpecial;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pass_numeric", type="boolean", nullable=true)
     */
    private $passNumeric;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pass_letters", type="boolean", nullable=true)
     */
    private $passLetters;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pass_upper_case", type="boolean", nullable=true)
     */
    private $passUpperCase;

    /**
     * @var boolean
     *
     * @ORM\Column(name="open_pass", type="boolean", nullable=true)
     */
    private $openPass;

    /**
     * @var integer
     *
     * @ORM\Column(name="period_warning", type="smallint", nullable=true)
     */
    private $periodWarning = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="option_01", type="boolean", nullable=true)
     */
    private $option01;

    /**
     * @var boolean
     *
     * @ORM\Column(name="option_02", type="boolean", nullable=true)
     */
    private $option02;

    /**
     * @var integer
     *
     * @ORM\Column(name="option_03", type="smallint", nullable=true)
     */
    private $option03;

    /**
     * @var boolean
     *
     * @ORM\Column(name="option_04", type="boolean", nullable=true)
     */
    private $option04;

    /**
     * @var integer
     *
     * @ORM\Column(name="option_05", type="integer", nullable=true)
     */
    private $option05;



    /**
     * Get securityLevel
     *
     * @return boolean
     */
    public function getSecurityLevel()
    {
        return $this->securityLevel;
    }

    /**
     * Set securityName
     *
     * @param string $securityName
     *
     * @return PasswordPolicy
     */
    public function setSecurityName($securityName)
    {
        $this->securityName = $securityName;

        return $this;
    }

    /**
     * Get securityName
     *
     * @return string
     */
    public function getSecurityName()
    {
        return $this->securityName;
    }

    /**
     * Set maxSize
     *
     * @param integer $maxSize
     *
     * @return PasswordPolicy
     */
    public function setMaxSize($maxSize)
    {
        $this->maxSize = $maxSize;

        return $this;
    }

    /**
     * Get maxSize
     *
     * @return integer
     */
    public function getMaxSize()
    {
        return $this->maxSize;
    }

    /**
     * Set minSize
     *
     * @param integer $minSize
     *
     * @return PasswordPolicy
     */
    public function setMinSize($minSize)
    {
        $this->minSize = $minSize;

        return $this;
    }

    /**
     * Get minSize
     *
     * @return integer
     */
    public function getMinSize()
    {
        return $this->minSize;
    }

    /**
     * Set period
     *
     * @param integer $period
     *
     * @return PasswordPolicy
     */
    public function setPeriod($period)
    {
        $this->period = $period;

        return $this;
    }

    /**
     * Get period
     *
     * @return integer
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Set passNotName
     *
     * @param boolean $passNotName
     *
     * @return PasswordPolicy
     */
    public function setPassNotName($passNotName)
    {
        $this->passNotName = $passNotName;

        return $this;
    }

    /**
     * Get passNotName
     *
     * @return boolean
     */
    public function getPassNotName()
    {
        return $this->passNotName;
    }

    /**
     * Set passNotId
     *
     * @param boolean $passNotId
     *
     * @return PasswordPolicy
     */
    public function setPassNotId($passNotId)
    {
        $this->passNotId = $passNotId;

        return $this;
    }

    /**
     * Get passNotId
     *
     * @return boolean
     */
    public function getPassNotId()
    {
        return $this->passNotId;
    }

    /**
     * Set passNotSeq
     *
     * @param boolean $passNotSeq
     *
     * @return PasswordPolicy
     */
    public function setPassNotSeq($passNotSeq)
    {
        $this->passNotSeq = $passNotSeq;

        return $this;
    }

    /**
     * Get passNotSeq
     *
     * @return boolean
     */
    public function getPassNotSeq()
    {
        return $this->passNotSeq;
    }

    /**
     * Set passNotSpecial
     *
     * @param boolean $passNotSpecial
     *
     * @return PasswordPolicy
     */
    public function setPassNotSpecial($passNotSpecial)
    {
        $this->passNotSpecial = $passNotSpecial;

        return $this;
    }

    /**
     * Get passNotSpecial
     *
     * @return boolean
     */
    public function getPassNotSpecial()
    {
        return $this->passNotSpecial;
    }

    /**
     * Set passSpecial
     *
     * @param boolean $passSpecial
     *
     * @return PasswordPolicy
     */
    public function setPassSpecial($passSpecial)
    {
        $this->passSpecial = $passSpecial;

        return $this;
    }

    /**
     * Get passSpecial
     *
     * @return boolean
     */
    public function getPassSpecial()
    {
        return $this->passSpecial;
    }

    /**
     * Set passNumeric
     *
     * @param boolean $passNumeric
     *
     * @return PasswordPolicy
     */
    public function setPassNumeric($passNumeric)
    {
        $this->passNumeric = $passNumeric;

        return $this;
    }

    /**
     * Get passNumeric
     *
     * @return boolean
     */
    public function getPassNumeric()
    {
        return $this->passNumeric;
    }

    /**
     * Set passLetters
     *
     * @param boolean $passLetters
     *
     * @return PasswordPolicy
     */
    public function setPassLetters($passLetters)
    {
        $this->passLetters = $passLetters;

        return $this;
    }

    /**
     * Get passLetters
     *
     * @return boolean
     */
    public function getPassLetters()
    {
        return $this->passLetters;
    }

    /**
     * Set passUpperCase
     *
     * @param boolean $passUpperCase
     *
     * @return PasswordPolicy
     */
    public function setPassUpperCase($passUpperCase)
    {
        $this->passUpperCase = $passUpperCase;

        return $this;
    }

    /**
     * Get passUpperCase
     *
     * @return boolean
     */
    public function getPassUpperCase()
    {
        return $this->passUpperCase;
    }

    /**
     * Set openPass
     *
     * @param boolean $openPass
     *
     * @return PasswordPolicy
     */
    public function setOpenPass($openPass)
    {
        $this->openPass = $openPass;

        return $this;
    }

    /**
     * Get openPass
     *
     * @return boolean
     */
    public function getOpenPass()
    {
        return $this->openPass;
    }

    /**
     * Set periodWarning
     *
     * @param integer $periodWarning
     *
     * @return PasswordPolicy
     */
    public function setPeriodWarning($periodWarning)
    {
        $this->periodWarning = $periodWarning;

        return $this;
    }

    /**
     * Get periodWarning
     *
     * @return integer
     */
    public function getPeriodWarning()
    {
        return $this->periodWarning;
    }

    /**
     * Set option01
     *
     * @param boolean $option01
     *
     * @return PasswordPolicy
     */
    public function setOption01($option01)
    {
        $this->option01 = $option01;

        return $this;
    }

    /**
     * Get option01
     *
     * @return boolean
     */
    public function getOption01()
    {
        return $this->option01;
    }

    /**
     * Set option02
     *
     * @param boolean $option02
     *
     * @return PasswordPolicy
     */
    public function setOption02($option02)
    {
        $this->option02 = $option02;

        return $this;
    }

    /**
     * Get option02
     *
     * @return boolean
     */
    public function getOption02()
    {
        return $this->option02;
    }

    /**
     * Set option03
     *
     * @param integer $option03
     *
     * @return PasswordPolicy
     */
    public function setOption03($option03)
    {
        $this->option03 = $option03;

        return $this;
    }

    /**
     * Get option03
     *
     * @return integer
     */
    public function getOption03()
    {
        return $this->option03;
    }

    /**
     * Set option04
     *
     * @param boolean $option04
     *
     * @return PasswordPolicy
     */
    public function setOption04($option04)
    {
        $this->option04 = $option04;

        return $this;
    }

    /**
     * Get option04
     *
     * @return boolean
     */
    public function getOption04()
    {
        return $this->option04;
    }

    /**
     * Set option05
     *
     * @param integer $option05
     *
     * @return PasswordPolicy
     */
    public function setOption05($option05)
    {
        $this->option05 = $option05;

        return $this;
    }

    /**
     * Get option05
     *
     * @return integer
     */
    public function getOption05()
    {
        return $this->option05;
    }
}
