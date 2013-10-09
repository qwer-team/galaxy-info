<?php

namespace Galaxy\InfoBundle\Entity;

use Galaxy\InfoBundle\Entity\NotificationTemplate;
use Doctrine\ORM\Mapping as ORM;

class Message extends NotificationTemplate {

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
     * @var integer
     */
    private $age;

    /**
     * @var string
     */
    private $text;

    /**
     * @var boolean
     */
    private $imageDelete1;

    /**
     * @var boolean
     */
    private $imageDelete2;

    /**
     * @var boolean
     */
    private $imageDelete3;

    /**
     * @var integer
     */
    private $jumpsToQuestion;

    /**
     * @var \DateTime
     */
    private $date;
    private $seconds;
    private $img1;
    private $img2;
    private $img3;
    private $question;
    private $rightAnswer;

    /**
     * Set userId
     *
     * @param integer $userId
     * @return Message
     */
    public function setUserId($userId) {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId() {
        return $this->userId;
    }

    public function getQuestion() {
        return $this->question;
    }

    public function setQuestion($question) {
        $this->question = $question;
    }

    public function getSeconds() {
        return $this->seconds;
    }

    public function setSeconds($seconds) {
        $this->seconds = $seconds;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Message
     */
    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     * @return Message
     */
    public function setVisible($visible) {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return boolean 
     */
    public function getVisible() {
        return $this->visible;
    }

    /**
     * Set moderatorAccepted
     *
     * @param boolean $moderatorAccepted
     * @return Message
     */
    public function setModeratorAccepted($moderatorAccepted) {
        $this->moderatorAccepted = $moderatorAccepted;

        return $this;
    }

    /**
     * Get moderatorAccepted
     *
     * @return boolean 
     */
    public function getModeratorAccepted() {
        return $this->moderatorAccepted;
    }

    /**
     * Set age
     *
     * @param integer $age
     * @return Message
     */
    public function setAge($age) {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge() {
        return $this->age;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return Message
     */
    public function setText($text) {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText() {
        return $this->text;
    }

    /**
     * Set jumpsToQuestion
     *
     * @param integer $jumpsToQuestion
     * @return Message
     */
    public function setJumpsToQuestion($jumpsToQuestion) {
        $this->jumpsToQuestion = $jumpsToQuestion;

        return $this;
    }

    /**
     * Get jumpsToQuestion
     *
     * @return integer 
     */
    public function getJumpsToQuestion() {
        return $this->jumpsToQuestion;
    }

    /**
     * @ORM\PrePersist
     */
    public function setDate() {
        $this->date = new \DateTime();
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Set rightAnswer
     *
     * @param integer $rightAnswer
     * @return Message
     */
    public function setRightAnswer($rightAnswer) {
        $this->rightAnswer = $rightAnswer;

        return $this;
    }

    /**
     * Get rightAnswer
     *
     * @return integer 
     */
    public function getRightAnswer() {
        return $this->rightAnswer;
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $answers;

    /**
     * Constructor
     */
    public function __construct() {
        $this->answers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add answers
     *
     * @param \Galaxy\InfoBundle\Entity\Answer $answers
     * @return Message
     */
    public function addAnswer(\Galaxy\InfoBundle\Entity\Answer $answers) {
        $this->answers[] = $answers;

        return $this;
    }

    /**
     * Remove answers
     *
     * @param \Galaxy\InfoBundle\Entity\Answer $answers
     */
    public function removeAnswer(\Galaxy\InfoBundle\Entity\Answer $answers) {
        $this->answers->removeElement($answers);
    }

    /**
     * Get answers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnswers() {
        return $this->answers;
    }

    /**
     * @var \Galaxy\InfoBundle\Entity\ThemeContent
     */
    private $theme;

    /**
     * Set theme
     *
     * @param \Galaxy\InfoBundle\Entity\ThemeContent $theme
     * @return Message
     */
    public function setTheme(\Galaxy\InfoBundle\Entity\ThemeContent $theme = null) {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get theme
     *
     * @return \Galaxy\InfoBundle\Entity\ThemeContent 
     */
    public function getTheme() {
        return $this->theme;
    }

    public function getImageDelete1() {
        return $this->imageDelete1;
    }

    public function setImageDelete1($imageDelete1) {
        $this->imageDelete1 = $imageDelete1;
    }

    public function getImageDelete2() {
        return $this->imageDelete2;
    }

    public function setImageDelete2($imageDelete2) {
        $this->imageDelete2 = $imageDelete2;
    }

    public function getImageDelete3() {
        return $this->imageDelete3;
    }

    public function setImageDelete3($imageDelete3) {
        $this->imageDelete3 = $imageDelete3;
    }

    public function getImg1() {
        return $this->img1;
    }

    public function setImg1($img1) {
        $this->img1 = $img1;
    }

    public function getImg2() {
        return $this->img2;
    }

    public function setImg2($img2) {
        $this->img2 = $img2;
    }

    public function getImg3() {
        return $this->img3;
    }

    public function setImg3($img3) {
        $this->img3 = $img3;
    }

}
