<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity
 */
class Message
{
    /**
     * @var string
     *
     * @ORM\Column(name="message_key", type="string", length=12, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $messageKey;

    /**
     * @var string
     *
     * @ORM\Column(name="message_lang", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $messageLang;

    /**
     * @var string
     *
     * @ORM\Column(name="message_subject", type="string", length=250, nullable=true)
     */
    private $messageSubject;

    /**
     * @var string
     *
     * @ORM\Column(name="message_text", type="blob", length=65535, nullable=true)
     */
    private $messageText;



    /**
     * Set messageKey
     *
     * @param string $messageKey
     *
     * @return Message
     */
    public function setMessageKey($messageKey)
    {
        $this->messageKey = $messageKey;

        return $this;
    }

    /**
     * Get messageKey
     *
     * @return string
     */
    public function getMessageKey()
    {
        return $this->messageKey;
    }

    /**
     * Set messageLang
     *
     * @param string $messageLang
     *
     * @return Message
     */
    public function setMessageLang($messageLang)
    {
        $this->messageLang = $messageLang;

        return $this;
    }

    /**
     * Get messageLang
     *
     * @return string
     */
    public function getMessageLang()
    {
        return $this->messageLang;
    }

    /**
     * Set messageSubject
     *
     * @param string $messageSubject
     *
     * @return Message
     */
    public function setMessageSubject($messageSubject)
    {
        $this->messageSubject = $messageSubject;

        return $this;
    }

    /**
     * Get messageSubject
     *
     * @return string
     */
    public function getMessageSubject()
    {
        return $this->messageSubject;
    }

    /**
     * Set messageText
     *
     * @param string $messageText
     *
     * @return Message
     */
    public function setMessageText($messageText)
    {
        $this->messageText = $messageText;

        return $this;
    }

    /**
     * Get messageText
     *
     * @return string
     */
    public function getMessageText()
    {
        return $this->messageText;
    }
}
