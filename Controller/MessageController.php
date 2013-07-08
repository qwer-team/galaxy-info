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
    public function getMessagesLengthAction($page, $length)
    {
        $repo = $this->getMessageRepo();
        $qb = $repo->createQueryBuilder('mes');
        $qb->orderBy('mes.id', 'DESC');
        $firstResult = $length * ($page - 1);
        $qb->setFirstResult($firstResult)->setMaxResults($length);
        $result = $qb->getQuery()->execute();
        
        $view = $this->view($result);
        return $this->handleView($view);
    }
    
    public function getMessagesCountAction()
    {
        $repo = $this->getMessageRepo();
        $qb = $repo->createQueryBuilder('mes');
        $qb->select("count(mes)");
        $result = $qb->getQuery()->getSingleScalarResult();
        
        $view = $this->view($result);
        return $this->handleView($view);
    }
    
    public function postMessageCreateAction(Request $request)
    {
        $message = new Message();
        $form = $this->createForm(new MessageType(), $message);

        $result = array("result" => "fail");
        $data = $request->request->all();
        $children = $form->all();
        $data = array_intersect_key($data, $children);
        $form->bind($data);
        if ($form->isValid()) {

            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($message);
            $em->flush();
            $result = array("result" => "success", "message" => $message);
        } else {
            echo $form->getErrorsAsString();
        }

        $view = $this->view($result);
        return $this->handleView($view);
    }

    public function postMessageUpdateAction($id, Request $request)
    {
        $repo = $this->getMessageRepo();
        $message = $repo->find($id);

        $form = $this->createForm(new MessageType(), $message);
        //$form->bindRequest($request);

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

    public function getDocumentApproveAction($id)
    {
        $repo = $this->getDocumentRepo();
        $document = $repo->find($id);

        $event = new DocumentEvent($document);
        $result = array("result" => "fail");
        if ($document->getStatus() == 1){
            $document->setStatus(2);
            $dispatcher = $this->get("event_dispatcher");
            $dispatcher->dispatch("approve.document.event", $event);
            $this->getDoctrine()->getEntityManager()->flush();
            $result = array(
                "result" => "success", 
                "document" => $document,
            );
        } 
        
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