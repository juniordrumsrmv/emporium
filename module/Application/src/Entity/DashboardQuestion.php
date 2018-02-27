<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DashboardQuestion
 *
 * @ORM\Table(name="dashboard_question")
 * @ORM\Entity
 */
class DashboardQuestion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="question_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $questionKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="question_type", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $questionType;

    /**
     * @var string
     *
     * @ORM\Column(name="question_id", type="string", length=24, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $questionId;

    /**
     * @var string
     *
     * @ORM\Column(name="question_value", type="text", length=65535, nullable=true)
     */
    private $questionValue;

    /**
     * @var string
     *
     * @ORM\Column(name="question_action", type="string", length=24, nullable=false)
     */
    private $questionAction;



    /**
     * Set questionKey
     *
     * @param integer $questionKey
     *
     * @return DashboardQuestion
     */
    public function setQuestionKey($questionKey)
    {
        $this->questionKey = $questionKey;

        return $this;
    }

    /**
     * Get questionKey
     *
     * @return integer
     */
    public function getQuestionKey()
    {
        return $this->questionKey;
    }

    /**
     * Set questionType
     *
     * @param integer $questionType
     *
     * @return DashboardQuestion
     */
    public function setQuestionType($questionType)
    {
        $this->questionType = $questionType;

        return $this;
    }

    /**
     * Get questionType
     *
     * @return integer
     */
    public function getQuestionType()
    {
        return $this->questionType;
    }

    /**
     * Set questionId
     *
     * @param string $questionId
     *
     * @return DashboardQuestion
     */
    public function setQuestionId($questionId)
    {
        $this->questionId = $questionId;

        return $this;
    }

    /**
     * Get questionId
     *
     * @return string
     */
    public function getQuestionId()
    {
        return $this->questionId;
    }

    /**
     * Set questionValue
     *
     * @param string $questionValue
     *
     * @return DashboardQuestion
     */
    public function setQuestionValue($questionValue)
    {
        $this->questionValue = $questionValue;

        return $this;
    }

    /**
     * Get questionValue
     *
     * @return string
     */
    public function getQuestionValue()
    {
        return $this->questionValue;
    }

    /**
     * Set questionAction
     *
     * @param string $questionAction
     *
     * @return DashboardQuestion
     */
    public function setQuestionAction($questionAction)
    {
        $this->questionAction = $questionAction;

        return $this;
    }

    /**
     * Get questionAction
     *
     * @return string
     */
    public function getQuestionAction()
    {
        return $this->questionAction;
    }
}
