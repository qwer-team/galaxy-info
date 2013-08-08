<?php

namespace Galaxy\InfoBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Galaxy\InfoBundle\Entity\ThemeContent;

/**
 * Description of MessageController
 *
 * @author root
 */
class ThemeContentController extends FOSRestController
{

    public function getThemeListAction()
    {
        $repo = $this->getThemeRepo();
        $themes = $repo->findAll();

        $view = $this->view($themes);
        return $this->handleView($view);
    }
    
    public function getThemeAction($id)
    {
        $repo = $this->getThemeRepo();
        $themes = $repo->find($id);

        $view = $this->view($themes);
        return $this->handleView($view);
    }
    

    /**
     * 
     * @return \Doctrine\ORM\EntityRepository
     */
    private function getThemeRepo()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $namespace = "GalaxyInfoBundle:ThemeContent";
        $repo = $em->getRepository($namespace);

        return $repo;
    }

}