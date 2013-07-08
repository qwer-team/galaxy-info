<?php

namespace Galaxy\InfoBundle\Entity;

use Galaxy\InfoBundle\Entity\NotificationTemplate;
use Doctrine\ORM\Mapping as ORM;


class Message extends NotificationTemplate
{
    
    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $title;

    /**
     * @var boolean
     */
    private $visible;

    /**
     * @var boolean
     */
    private $moderatorAccepted;

    /**
     * @var string
     */
    private $theme;

    /**
     * @var integer
     */
    private $age;

    /**
     * @var string
     */
    private $text;

    /**
     * @var string
     */
    private $image;

    /**
     * @var integer
     */
    private $jumpsToQuestion;

    /**
     * @var \DateTime
     */
    private $date;
    
    private $seconds;

    /**
     * @var array
     */
    private $questions;

    /**
     * @var integer
     */
    private $rightAnswer;

    /**
     * Set userId
     *
     * @param integer $userId
     * @return Message
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }
    
    public function getSeconds()
    {
        return $this->seconds;
    }

    public function setSeconds($seconds)
    {
        $this->seconds = $seconds;
    }

    
    /**
     * Set title
     *
     * @param string $title
     * @return Message
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     * @return Message
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return boolean 
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set moderatorAccepted
     *
     * @param boolean $moderatorAccepted
     * @return Message
     */
    public function setModeratorAccepted($moderatorAccepted)
    {
        $this->moderatorAccepted = $moderatorAccepted;

        return $this;
    }

    /**
     * Get moderatorAccepted
     *
     * @return boolean 
     */
    public function getModeratorAccepted()
    {
        return $this->moderatorAccepted;
    }

    /**
     * Set theme
     *
     * @param string $theme
     * @return Message
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get theme
     *
     * @return string 
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set age
     *
     * @param integer $age
     * @return Message
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return Message
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Message
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set jumpsToQuestion
     *
     * @param integer $jumpsToQuestion
     * @return Message
     */
    public function setJumpsToQuestion($jumpsToQuestion)
    {
        $this->jumpsToQuestion = $jumpsToQuestion;

        return $this;
    }

    /**
     * Get jumpsToQuestion
     *
     * @return integer 
     */
    public function getJumpsToQuestion()
    {
        return $this->jumpsToQuestion;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Message
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set questions
     *
     * @param array $questions
     * @return Message
     */
    public function setQuestions($questions)
    {
        $this->questions = $questions;

        return $this;
    }

    /**
     * Get questions
     *
     * @return array 
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Set rightAnswer
     *
     * @param integer $rightAnswer
     * @return Message
     */
    public function setRightAnswer($rightAnswer)
    {
        $this->rightAnswer = $rightAnswer;

        return $this;
    }

    /**
     * Get rightAnswer
     *
     * @return integer 
     */
    public function getRightAnswer()
    {
        return $this->rightAnswer;
    }

}
