<?php

namespace Galaxy\InfoBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Galaxy\InfoBundle\Form\NotificationTemplateType;

/**
 * Description of NotificationTemplateController
 *
 * @author root
 */
class NotificationTemplateController extends FOSRestController
{
    public function getTemplateAction()
    {
        $repo = $this->getTemplateRepo();
        $template = $repo->find(1);

        $view = $this->view($template);
        return $this->handleView($view);
    }
    
    public function postTemplateUpdateAction(Request $request)
    {
        $repo = $this->getTemplateRepo();
        $template = $repo->find(1);

        $form = $this->createForm(new NotificationTemplateType(), $template);
        $result = array("result" => "fail");
        $data = $request->request->all();
        $children = $form->all();
        $data = array_intersect_key($data, $children);
        $form->bind($data);
        if ($form->isValid()) {
            $result = array("result" => "success");

            $this->getDoctrine()->getEntityManager()->flush();
        } else {
            echo $form->getErrorsAsString();
        }

        $view = $this->view($result);
        return $this->handleView($view);
    }
    
    
    
    /**
     * 
     * @return \Doctrine\ORM\EntityRepository
     */
    private function getTemplateRepo()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $namespace = "GalaxyInfoBundle:NotificationTemplate";
        $repo = $em->getRepository($namespace);

        return $repo;
    }
}