<?php

namespace Galaxy\InfoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotificationTemplate
 */
class NotificationTemplate
{
    /**
     * @var integer
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
