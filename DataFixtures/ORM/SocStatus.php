<?php

namespace Galaxy\InfoBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Galaxy\InfoBundle\Entity\SocialStatus;


class SocStatus implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $status = array(
            array("Школьник"),
            array("Выпускник школы"),
            array("Студент"),
            array("Рабочий"),
            array("Служащий"),
            array("Ищу работу"),
            array("Валяю дурака"),
        );
        
        $repo = $manager->getRepository("GalaxyInfoBundle:SocialStatus");
        foreach ($status as $item){
            $obj = $repo->findOneByTitle($item[0]);
            if(is_null($obj)){
                $obj = new SocialStatus();
                $obj->setTitle($item[0]);
            }
            $manager->persist($obj);
        }
        $manager->flush();
    }
}