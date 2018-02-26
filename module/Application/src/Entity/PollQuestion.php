<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PollQuestion
 *
 * @ORM\Table(name="poll_question")
 * @ORM\Entity
 */
class PollQuestion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="poll_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pollKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="question_number", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $questionNumber;

    /**
     * @var boolean
     *
     * @ORM\Column(name="question_type", type="boolean", nullable=true)
     */
    private $questionType;

    /**
     * @var string
     *
     * @ORM\Column(name="question_label", type="string", length=255, nullable=true)
     */
    private $questionLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="question_prompt", type="string", length=255, nullable=true)
     */
    private $questionPrompt;



    /**
     * Set pollKey
     *
     * @param integer $pollKey
     *
     * @return PollQuestion
     */
    public function setPollKey($pollKey)
    {
        $this->pollKey = $pollKey;

        return $this;
    }

    /**
     * Get pollKey
     *
     * @return integer
     */
    public function getPollKey()
    {
        return $this->pollKey;
    }

    /**
     * Set questionNumber
     *
     * @param integer $questionNumber
     *
     * @return PollQuestion
     */
    public function setQuestionNumber($questionNumber)
    {
        $this->questionNumber = $questionNumber;

        return $this;
    }

    /**
     * Get questionNumber
     *
     * @return integer
     */
    public function getQuestionNumber()
    {
        return $this->questionNumber;
    }

    /**
     * Set questionType
     *
     * @param boolean $questionType
     *
     * @return PollQuestion
     */
    public function setQuestionType($questionType)
    {
        $this->questionType = $questionType;

        return $this;
    }

    /**
     * Get questionType
     *
     * @return boolean
     */
    public function getQuestionType()
    {
        return $this->questionType;
    }

    /**
     * Set questionLabel
     *
     * @param string $questionLabel
     *
     * @return PollQuestion
     */
    public function setQuestionLabel($questionLabel)
    {
        $this->questionLabel = $questionLabel;

        return $this;
    }

    /**
     * Get questionLabel
     *
     * @return string
     */
    public function getQuestionLabel()
    {
        return $this->questionLabel;
    }

    /**
     * Set questionPrompt
     *
     * @param string $questionPrompt
     *
     * @return PollQuestion
     */
    public function setQuestionPrompt($questionPrompt)
    {
        $this->questionPrompt = $questionPrompt;

        return $this;
    }

    /**
     * Get questionPrompt
     *
     * @return string
     */
    public function getQuestionPrompt()
    {
        return $this->questionPrompt;
    }
}
