<?php

namespace Galaxy\InfoBundle\Entity;

class UserData
{

    private $age;

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

}