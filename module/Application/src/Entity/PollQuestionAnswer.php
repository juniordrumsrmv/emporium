<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PollQuestionAnswer
 *
 * @ORM\Table(name="poll_question_answer")
 * @ORM\Entity
 */
class PollQuestionAnswer
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
     * @var integer
     *
     * @ORM\Column(name="answer_number", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $answerNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="answer_text", type="string", length=255, nullable=true)
     */
    private $answerText;



    /**
     * Set pollKey
     *
     * @param integer $pollKey
     *
     * @return PollQuestionAnswer
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
     * @return PollQuestionAnswer
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
     * Set answerNumber
     *
     * @param integer $answerNumber
     *
     * @return PollQuestionAnswer
     */
    public function setAnswerNumber($answerNumber)
    {
        $this->answerNumber = $answerNumber;

        return $this;
    }

    /**
     * Get answerNumber
     *
     * @return integer
     */
    public function getAnswerNumber()
    {
        return $this->answerNumber;
    }

    /**
     * Set answerText
     *
     * @param string $answerText
     *
     * @return PollQuestionAnswer
     */
    public function setAnswerText($answerText)
    {
        $this->answerText = $answerText;

        return $this;
    }

    /**
     * Get answerText
     *
     * @return string
     */
    public function getAnswerText()
    {
        return $this->answerText;
    }
}
