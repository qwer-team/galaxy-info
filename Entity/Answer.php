<?php

namespace Galaxy\InfoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Answer
 */
class Answer
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $answer;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set answer
     *
     * @param string $answer
     * @return Answer
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return string 
     */
    public function getAnswer()
    {
        return $this->answer;
    }
    /**
     * @var \Galaxy\InfoBundle\Entity\Message
     */
    private $message;


    /**
     * Set message
     *
     * @param \Galaxy\InfoBundle\Entity\Message $message
     * @return Answer
     */
    public function setMessage(\Galaxy\InfoBundle\Entity\Message $message = null)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return \Galaxy\InfoBundle\Entity\Message 
     */
    public function getMessage()
    {
        return $this->message;
    }
}
