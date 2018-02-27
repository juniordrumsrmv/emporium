<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="index_user_alternate_id", columns={"alternate_id"})}, indexes={@ORM\Index(name="index_matr", columns={"matriculation"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="agent_key", type="bigint", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $agentKey;

    /**
     * @var string
     *
     * @ORM\Column(name="alternate_id", type="string", length=10, precision=0, scale=0, nullable=true, unique=false)
     */
    private $alternateId;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, precision=0, scale=0, nullable=true, unique=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=2, precision=0, scale=0, nullable=true, unique=false)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, precision=0, scale=0, nullable=true, unique=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="clerk_percent", type="decimal", precision=4, scale=2, nullable=true, unique=false)
     */
    private $clerkPercent;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_load_last_store_key", type="bigint", precision=0, scale=0, nullable=true, unique=false)
     */
    private $posLoadLastStoreKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_load_last_pos_number", type="smallint", precision=0, scale=0, nullable=true, unique=false)
     */
    private $posLoadLastPosNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pos_load_last_time", type="datetime", precision=0, scale=0, nullable=true, unique=false)
     */
    private $posLoadLastTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_save_last_store_key", type="bigint", precision=0, scale=0, nullable=true, unique=false)
     */
    private $posSaveLastStoreKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_save_last_pos_number", type="smallint", precision=0, scale=0, nullable=true, unique=false)
     */
    private $posSaveLastPosNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pos_save_last_time", type="datetime", precision=0, scale=0, nullable=true, unique=false)
     */
    private $posSaveLastTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", precision=0, scale=0, nullable=false, unique=false)
     */
    private $storeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_mode", type="string", length=12, precision=0, scale=0, nullable=true, unique=false)
     */
    private $usrMode;

    /**
     * @var string
     *
     * @ORM\Column(name="treatment", type="string", length=64, precision=0, scale=0, nullable=true, unique=false)
     */
    private $treatment;

    /**
     * @var string
     *
     * @ORM\Column(name="sms", type="string", length=20, precision=0, scale=0, nullable=true, unique=false)
     */
    private $sms;

    /**
     * @var string
     *
     * @ORM\Column(name="user_ident", type="string", length=25, precision=0, scale=0, nullable=true, unique=false)
     */
    private $userIdent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_birthday", type="date", precision=0, scale=0, nullable=true, unique=false)
     */
    private $userBirthday;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_status", type="boolean", precision=0, scale=0, nullable=false, unique=false)
     */
    private $userStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="cript_password", type="string", length=50, precision=0, scale=0, nullable=true, unique=false)
     */
    private $criptPassword;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expiration_date", type="date", precision=0, scale=0, nullable=true, unique=false)
     */
    private $expirationDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="security_level", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $securityLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="biometrics", type="blob", length=65535, precision=0, scale=0, nullable=true, unique=false)
     */
    private $biometrics;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", precision=0, scale=0, nullable=true, unique=false)
     */
    private $lastChangeTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_date_inc", type="date", precision=0, scale=0, nullable=true, unique=false)
     */
    private $userDateInc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_date_alt_status", type="date", precision=0, scale=0, nullable=true, unique=false)
     */
    private $userDateAltStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="matriculation", type="string", length=32, precision=0, scale=0, nullable=true, unique=false)
     */
    private $matriculation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_date_inactive_status", type="date", precision=0, scale=0, nullable=true, unique=false)
     */
    private $userDateInactiveStatus;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_trace", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $userTrace;

    /**
     * @var string
     *
     * @ORM\Column(name="user_trace_file", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $userTraceFile;

    /**
     * @var string
     *
     * @ORM\Column(name="user_db_user", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $userDbUser;

    /**
     * @var string
     *
     * @ORM\Column(name="user_db_pass", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $userDbPass;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_color_set", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $userColorSet;

    /**
     * @var string
     *
     * @ORM\Column(name="user_bgcolor1", type="string", length=16, precision=0, scale=0, nullable=true, unique=false)
     */
    private $userBgcolor1;

    /**
     * @var string
     *
     * @ORM\Column(name="user_bgcolor2", type="string", length=16, precision=0, scale=0, nullable=true, unique=false)
     */
    private $userBgcolor2;

    /**
     * @var string
     *
     * @ORM\Column(name="user_bgcolor3", type="string", length=16, precision=0, scale=0, nullable=true, unique=false)
     */
    private $userBgcolor3;

    /**
     * @var string
     *
     * @ORM\Column(name="user_bgcolor4", type="string", length=16, precision=0, scale=0, nullable=true, unique=false)
     */
    private $userBgcolor4;

    /**
     * @var string
     *
     * @ORM\Column(name="user_bgcolor5", type="string", length=16, precision=0, scale=0, nullable=true, unique=false)
     */
    private $userBgcolor5;

    /**
     * @var string
     *
     * @ORM\Column(name="user_bgcolor6", type="string", length=16, precision=0, scale=0, nullable=true, unique=false)
     */
    private $userBgcolor6;

    /**
     * @var string
     *
     * @ORM\Column(name="user_txcolor1", type="string", length=16, precision=0, scale=0, nullable=true, unique=false)
     */
    private $userTxcolor1;

    /**
     * @var string
     *
     * @ORM\Column(name="user_txcolor2", type="string", length=16, precision=0, scale=0, nullable=true, unique=false)
     */
    private $userTxcolor2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_tr_hover", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $userTrHover;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_lines_per_screen", type="smallint", precision=0, scale=0, nullable=true, unique=false)
     */
    private $userLinesPerScreen;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_menu_layout", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $userMenuLayout;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_theme_option", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $userThemeOption;

    /**
     * @var string
     *
     * @ORM\Column(name="user_theme", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $userTheme;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_enable_config_options", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $userEnableConfigOptions;

    /**
     * @var boolean
     *
     * @ORM\Column(name="count_error", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $countError;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="block_date", type="datetime", precision=0, scale=0, nullable=true, unique=false)
     */
    private $blockDate;


    /**
     * Get agentKey
     *
     * @return integer
     */
    public function getAgentKey()
    {
        return $this->agentKey;
    }

    /**
     * Set alternateId
     *
     * @param string $alternateId
     *
     * @return User
     */
    public function setAlternateId($alternateId)
    {
        $this->alternateId = $alternateId;

        return $this;
    }

    /**
     * Get alternateId
     *
     * @return string
     */
    public function getAlternateId()
    {
        return $this->alternateId;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return User
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set clerkPercent
     *
     * @param string $clerkPercent
     *
     * @return User
     */
    public function setClerkPercent($clerkPercent)
    {
        $this->clerkPercent = $clerkPercent;

        return $this;
    }

    /**
     * Get clerkPercent
     *
     * @return string
     */
    public function getClerkPercent()
    {
        return $this->clerkPercent;
    }

    /**
     * Set posLoadLastStoreKey
     *
     * @param integer $posLoadLastStoreKey
     *
     * @return User
     */
    public function setPosLoadLastStoreKey($posLoadLastStoreKey)
    {
        $this->posLoadLastStoreKey = $posLoadLastStoreKey;

        return $this;
    }

    /**
     * Get posLoadLastStoreKey
     *
     * @return integer
     */
    public function getPosLoadLastStoreKey()
    {
        return $this->posLoadLastStoreKey;
    }

    /**
     * Set posLoadLastPosNumber
     *
     * @param integer $posLoadLastPosNumber
     *
     * @return User
     */
    public function setPosLoadLastPosNumber($posLoadLastPosNumber)
    {
        $this->posLoadLastPosNumber = $posLoadLastPosNumber;

        return $this;
    }

    /**
     * Get posLoadLastPosNumber
     *
     * @return integer
     */
    public function getPosLoadLastPosNumber()
    {
        return $this->posLoadLastPosNumber;
    }

    /**
     * Set posLoadLastTime
     *
     * @param \DateTime $posLoadLastTime
     *
     * @return User
     */
    public function setPosLoadLastTime($posLoadLastTime)
    {
        $this->posLoadLastTime = $posLoadLastTime;

        return $this;
    }

    /**
     * Get posLoadLastTime
     *
     * @return \DateTime
     */
    public function getPosLoadLastTime()
    {
        return $this->posLoadLastTime;
    }

    /**
     * Set posSaveLastStoreKey
     *
     * @param integer $posSaveLastStoreKey
     *
     * @return User
     */
    public function setPosSaveLastStoreKey($posSaveLastStoreKey)
    {
        $this->posSaveLastStoreKey = $posSaveLastStoreKey;

        return $this;
    }

    /**
     * Get posSaveLastStoreKey
     *
     * @return integer
     */
    public function getPosSaveLastStoreKey()
    {
        return $this->posSaveLastStoreKey;
    }

    /**
     * Set posSaveLastPosNumber
     *
     * @param integer $posSaveLastPosNumber
     *
     * @return User
     */
    public function setPosSaveLastPosNumber($posSaveLastPosNumber)
    {
        $this->posSaveLastPosNumber = $posSaveLastPosNumber;

        return $this;
    }

    /**
     * Get posSaveLastPosNumber
     *
     * @return integer
     */
    public function getPosSaveLastPosNumber()
    {
        return $this->posSaveLastPosNumber;
    }

    /**
     * Set posSaveLastTime
     *
     * @param \DateTime $posSaveLastTime
     *
     * @return User
     */
    public function setPosSaveLastTime($posSaveLastTime)
    {
        $this->posSaveLastTime = $posSaveLastTime;

        return $this;
    }

    /**
     * Get posSaveLastTime
     *
     * @return \DateTime
     */
    public function getPosSaveLastTime()
    {
        return $this->posSaveLastTime;
    }

    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return User
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
     * Set usrMode
     *
     * @param string $usrMode
     *
     * @return User
     */
    public function setUsrMode($usrMode)
    {
        $this->usrMode = $usrMode;

        return $this;
    }

    /**
     * Get usrMode
     *
     * @return string
     */
    public function getUsrMode()
    {
        return $this->usrMode;
    }

    /**
     * Set treatment
     *
     * @param string $treatment
     *
     * @return User
     */
    public function setTreatment($treatment)
    {
        $this->treatment = $treatment;

        return $this;
    }

    /**
     * Get treatment
     *
     * @return string
     */
    public function getTreatment()
    {
        return $this->treatment;
    }

    /**
     * Set sms
     *
     * @param string $sms
     *
     * @return User
     */
    public function setSms($sms)
    {
        $this->sms = $sms;

        return $this;
    }

    /**
     * Get sms
     *
     * @return string
     */
    public function getSms()
    {
        return $this->sms;
    }

    /**
     * Set userIdent
     *
     * @param string $userIdent
     *
     * @return User
     */
    public function setUserIdent($userIdent)
    {
        $this->userIdent = $userIdent;

        return $this;
    }

    /**
     * Get userIdent
     *
     * @return string
     */
    public function getUserIdent()
    {
        return $this->userIdent;
    }

    /**
     * Set userBirthday
     *
     * @param \DateTime $userBirthday
     *
     * @return User
     */
    public function setUserBirthday($userBirthday)
    {
        $this->userBirthday = $userBirthday;

        return $this;
    }

    /**
     * Get userBirthday
     *
     * @return \DateTime
     */
    public function getUserBirthday()
    {
        return $this->userBirthday;
    }

    /**
     * Set userStatus
     *
     * @param boolean $userStatus
     *
     * @return User
     */
    public function setUserStatus($userStatus)
    {
        $this->userStatus = $userStatus;

        return $this;
    }

    /**
     * Get userStatus
     *
     * @return boolean
     */
    public function getUserStatus()
    {
        return $this->userStatus;
    }

    /**
     * Set criptPassword
     *
     * @param string $criptPassword
     *
     * @return User
     */
    public function setCriptPassword($criptPassword)
    {
        $this->criptPassword = $criptPassword;

        return $this;
    }

    /**
     * Get criptPassword
     *
     * @return string
     */
    public function getCriptPassword()
    {
        return $this->criptPassword;
    }

    /**
     * Set expirationDate
     *
     * @param \DateTime $expirationDate
     *
     * @return User
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * Get expirationDate
     *
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Set securityLevel
     *
     * @param boolean $securityLevel
     *
     * @return User
     */
    public function setSecurityLevel($securityLevel)
    {
        $this->securityLevel = $securityLevel;

        return $this;
    }

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
     * Set biometrics
     *
     * @param string $biometrics
     *
     * @return User
     */
    public function setBiometrics($biometrics)
    {
        $this->biometrics = $biometrics;

        return $this;
    }

    /**
     * Get biometrics
     *
     * @return string
     */
    public function getBiometrics()
    {
        return $this->biometrics;
    }

    /**
     * Set lastChangeTime
     *
     * @param \DateTime $lastChangeTime
     *
     * @return User
     */
    public function setLastChangeTime($lastChangeTime)
    {
        $this->lastChangeTime = $lastChangeTime;

        return $this;
    }

    /**
     * Get lastChangeTime
     *
     * @return \DateTime
     */
    public function getLastChangeTime()
    {
        return $this->lastChangeTime;
    }

    /**
     * Set userDateInc
     *
     * @param \DateTime $userDateInc
     *
     * @return User
     */
    public function setUserDateInc($userDateInc)
    {
        $this->userDateInc = $userDateInc;

        return $this;
    }

    /**
     * Get userDateInc
     *
     * @return \DateTime
     */
    public function getUserDateInc()
    {
        return $this->userDateInc;
    }

    /**
     * Set userDateAltStatus
     *
     * @param \DateTime $userDateAltStatus
     *
     * @return User
     */
    public function setUserDateAltStatus($userDateAltStatus)
    {
        $this->userDateAltStatus = $userDateAltStatus;

        return $this;
    }

    /**
     * Get userDateAltStatus
     *
     * @return \DateTime
     */
    public function getUserDateAltStatus()
    {
        return $this->userDateAltStatus;
    }

    /**
     * Set matriculation
     *
     * @param string $matriculation
     *
     * @return User
     */
    public function setMatriculation($matriculation)
    {
        $this->matriculation = $matriculation;

        return $this;
    }

    /**
     * Get matriculation
     *
     * @return string
     */
    public function getMatriculation()
    {
        return $this->matriculation;
    }

    /**
     * Set userDateInactiveStatus
     *
     * @param \DateTime $userDateInactiveStatus
     *
     * @return User
     */
    public function setUserDateInactiveStatus($userDateInactiveStatus)
    {
        $this->userDateInactiveStatus = $userDateInactiveStatus;

        return $this;
    }

    /**
     * Get userDateInactiveStatus
     *
     * @return \DateTime
     */
    public function getUserDateInactiveStatus()
    {
        return $this->userDateInactiveStatus;
    }

    /**
     * Set userTrace
     *
     * @param boolean $userTrace
     *
     * @return User
     */
    public function setUserTrace($userTrace)
    {
        $this->userTrace = $userTrace;

        return $this;
    }

    /**
     * Get userTrace
     *
     * @return boolean
     */
    public function getUserTrace()
    {
        return $this->userTrace;
    }

    /**
     * Set userTraceFile
     *
     * @param string $userTraceFile
     *
     * @return User
     */
    public function setUserTraceFile($userTraceFile)
    {
        $this->userTraceFile = $userTraceFile;

        return $this;
    }

    /**
     * Get userTraceFile
     *
     * @return string
     */
    public function getUserTraceFile()
    {
        return $this->userTraceFile;
    }

    /**
     * Set userDbUser
     *
     * @param string $userDbUser
     *
     * @return User
     */
    public function setUserDbUser($userDbUser)
    {
        $this->userDbUser = $userDbUser;

        return $this;
    }

    /**
     * Get userDbUser
     *
     * @return string
     */
    public function getUserDbUser()
    {
        return $this->userDbUser;
    }

    /**
     * Set userDbPass
     *
     * @param string $userDbPass
     *
     * @return User
     */
    public function setUserDbPass($userDbPass)
    {
        $this->userDbPass = $userDbPass;

        return $this;
    }

    /**
     * Get userDbPass
     *
     * @return string
     */
    public function getUserDbPass()
    {
        return $this->userDbPass;
    }

    /**
     * Set userColorSet
     *
     * @param boolean $userColorSet
     *
     * @return User
     */
    public function setUserColorSet($userColorSet)
    {
        $this->userColorSet = $userColorSet;

        return $this;
    }

    /**
     * Get userColorSet
     *
     * @return boolean
     */
    public function getUserColorSet()
    {
        return $this->userColorSet;
    }

    /**
     * Set userBgcolor1
     *
     * @param string $userBgcolor1
     *
     * @return User
     */
    public function setUserBgcolor1($userBgcolor1)
    {
        $this->userBgcolor1 = $userBgcolor1;

        return $this;
    }

    /**
     * Get userBgcolor1
     *
     * @return string
     */
    public function getUserBgcolor1()
    {
        return $this->userBgcolor1;
    }

    /**
     * Set userBgcolor2
     *
     * @param string $userBgcolor2
     *
     * @return User
     */
    public function setUserBgcolor2($userBgcolor2)
    {
        $this->userBgcolor2 = $userBgcolor2;

        return $this;
    }

    /**
     * Get userBgcolor2
     *
     * @return string
     */
    public function getUserBgcolor2()
    {
        return $this->userBgcolor2;
    }

    /**
     * Set userBgcolor3
     *
     * @param string $userBgcolor3
     *
     * @return User
     */
    public function setUserBgcolor3($userBgcolor3)
    {
        $this->userBgcolor3 = $userBgcolor3;

        return $this;
    }

    /**
     * Get userBgcolor3
     *
     * @return string
     */
    public function getUserBgcolor3()
    {
        return $this->userBgcolor3;
    }

    /**
     * Set userBgcolor4
     *
     * @param string $userBgcolor4
     *
     * @return User
     */
    public function setUserBgcolor4($userBgcolor4)
    {
        $this->userBgcolor4 = $userBgcolor4;

        return $this;
    }

    /**
     * Get userBgcolor4
     *
     * @return string
     */
    public function getUserBgcolor4()
    {
        return $this->userBgcolor4;
    }

    /**
     * Set userBgcolor5
     *
     * @param string $userBgcolor5
     *
     * @return User
     */
    public function setUserBgcolor5($userBgcolor5)
    {
        $this->userBgcolor5 = $userBgcolor5;

        return $this;
    }

    /**
     * Get userBgcolor5
     *
     * @return string
     */
    public function getUserBgcolor5()
    {
        return $this->userBgcolor5;
    }

    /**
     * Set userBgcolor6
     *
     * @param string $userBgcolor6
     *
     * @return User
     */
    public function setUserBgcolor6($userBgcolor6)
    {
        $this->userBgcolor6 = $userBgcolor6;

        return $this;
    }

    /**
     * Get userBgcolor6
     *
     * @return string
     */
    public function getUserBgcolor6()
    {
        return $this->userBgcolor6;
    }

    /**
     * Set userTxcolor1
     *
     * @param string $userTxcolor1
     *
     * @return User
     */
    public function setUserTxcolor1($userTxcolor1)
    {
        $this->userTxcolor1 = $userTxcolor1;

        return $this;
    }

    /**
     * Get userTxcolor1
     *
     * @return string
     */
    public function getUserTxcolor1()
    {
        return $this->userTxcolor1;
    }

    /**
     * Set userTxcolor2
     *
     * @param string $userTxcolor2
     *
     * @return User
     */
    public function setUserTxcolor2($userTxcolor2)
    {
        $this->userTxcolor2 = $userTxcolor2;

        return $this;
    }

    /**
     * Get userTxcolor2
     *
     * @return string
     */
    public function getUserTxcolor2()
    {
        return $this->userTxcolor2;
    }

    /**
     * Set userTrHover
     *
     * @param boolean $userTrHover
     *
     * @return User
     */
    public function setUserTrHover($userTrHover)
    {
        $this->userTrHover = $userTrHover;

        return $this;
    }

    /**
     * Get userTrHover
     *
     * @return boolean
     */
    public function getUserTrHover()
    {
        return $this->userTrHover;
    }

    /**
     * Set userLinesPerScreen
     *
     * @param integer $userLinesPerScreen
     *
     * @return User
     */
    public function setUserLinesPerScreen($userLinesPerScreen)
    {
        $this->userLinesPerScreen = $userLinesPerScreen;

        return $this;
    }

    /**
     * Get userLinesPerScreen
     *
     * @return integer
     */
    public function getUserLinesPerScreen()
    {
        return $this->userLinesPerScreen;
    }

    /**
     * Set userMenuLayout
     *
     * @param boolean $userMenuLayout
     *
     * @return User
     */
    public function setUserMenuLayout($userMenuLayout)
    {
        $this->userMenuLayout = $userMenuLayout;

        return $this;
    }

    /**
     * Get userMenuLayout
     *
     * @return boolean
     */
    public function getUserMenuLayout()
    {
        return $this->userMenuLayout;
    }

    /**
     * Set userThemeOption
     *
     * @param boolean $userThemeOption
     *
     * @return User
     */
    public function setUserThemeOption($userThemeOption)
    {
        $this->userThemeOption = $userThemeOption;

        return $this;
    }

    /**
     * Get userThemeOption
     *
     * @return boolean
     */
    public function getUserThemeOption()
    {
        return $this->userThemeOption;
    }

    /**
     * Set userTheme
     *
     * @param string $userTheme
     *
     * @return User
     */
    public function setUserTheme($userTheme)
    {
        $this->userTheme = $userTheme;

        return $this;
    }

    /**
     * Get userTheme
     *
     * @return string
     */
    public function getUserTheme()
    {
        return $this->userTheme;
    }

    /**
     * Set userEnableConfigOptions
     *
     * @param boolean $userEnableConfigOptions
     *
     * @return User
     */
    public function setUserEnableConfigOptions($userEnableConfigOptions)
    {
        $this->userEnableConfigOptions = $userEnableConfigOptions;

        return $this;
    }

    /**
     * Get userEnableConfigOptions
     *
     * @return boolean
     */
    public function getUserEnableConfigOptions()
    {
        return $this->userEnableConfigOptions;
    }

    /**
     * Set countError
     *
     * @param boolean $countError
     *
     * @return User
     */
    public function setCountError($countError)
    {
        $this->countError = $countError;

        return $this;
    }

    /**
     * Get countError
     *
     * @return boolean
     */
    public function getCountError()
    {
        return $this->countError;
    }

    /**
     * Set blockDate
     *
     * @param \DateTime $blockDate
     *
     * @return User
     */
    public function setBlockDate($blockDate)
    {
        $this->blockDate = $blockDate;

        return $this;
    }

    /**
     * Get blockDate
     *
     * @return \DateTime
     */
    public function getBlockDate()
    {
        return $this->blockDate;
    }
}

