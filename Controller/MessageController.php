<?php

namespace Galaxy\InfoBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Galaxy\InfoBundle\Entity\Message;
/**
 * Description of MessageController
 *
 * @author root
 */
class MessageController extends FOSRestController
{
    public function getMessagesAction()
    {
        $repo = $this->getMessageRepo();
        $qb = $repo->createQueryBuilder('mes');
        $qb->orderBy('mes.id', 'DESC');
       
        $result = $qb->getQuery()->execute();
        //$result = $repo->findAll();
        $view = $this->view($result);
        return $this->handleView($view);
    }
    
    /**
     * 
     * @return \Doctrine\ORM\EntityRepository
     */
    private function getMessageRepo()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $namespace = "GalaxyInfoBundle:Message";
        $repo = $em->getRepository($namespace);

        return $repo;
    }
}