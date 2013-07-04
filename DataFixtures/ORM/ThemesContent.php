<?php

namespace Galaxy\InfoBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Galaxy\InfoBundle\Entity\ThemeContent;


class ThemesContent implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $themes = array(
            array("Культура"),
            array("История"),
            array("Известные люди"),
            array("Космос"),
            array("Антитабак"),
            array("Антиспид"),
            array("Антинаркомания"),
            array("Антиалкоголь"),
            array("Здоровое питание"),
            array("Спорт"),
            array("Здоровье"),
            array("Медицна"),
            array("Разное"),
        );
        
        $repo = $manager->getRepository("GalaxyInfoBundle:ThemeContent");
        foreach ($themes as $theme){
            $obj = $repo->findOneByTitle($theme[0]);
            if(is_null($obj)){
                $obj = new ThemeContent();
                $obj->setTitle($theme[0]);
            }
            $manager->persist($obj);
        }
        $manager->flush();
    }
}