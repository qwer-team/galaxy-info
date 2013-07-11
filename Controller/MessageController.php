<?php

namespace Galaxy\InfoBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Galaxy\InfoBundle\Entity\Message;
use Galaxy\InfoBundle\Form\MessageType;
use Galaxy\InfoBundle\Entity\Answer;
use Galaxy\InfoBundle\Entity\ThemeContent;
use Galaxy\InfoBundle\Form\ThemeContentType;

/**
 * Description of MessageController
 *
 * @author root
 */
class MessageController extends FOSRestController
{

    public function getMessageAction($id)
    {
        $repo = $this->getMessageRepo();
        $message = $repo->find($id);

        $view = $this->view($message);
        return $this->handleView($view);
    }

    public function getMessageDeleteAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $repo = $this->getMessageRepo();
        $message = $repo->find($id);
        $em->getConnection()->beginTransaction();
        $response = array("response" => "true");
        try {
            $em->remove($message);
            $em->flush();
            $em->getConnection()->commit();
        } catch (\Exception $e) {
            $response = array("response" => "fail");
            $em->getConnection()->rollback();
            $em->close();
        }


        $view = $this->view($response);
        return $this->handleView($view);
    }

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

    public function getMessageCountAction()
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
        $answers = $request->get('answers');
        if ($answers) {
            foreach ($answers as $key => $value) {
                $answer = new Answer();
                $answer->setMessage($message);
                $message->addAnswer($answer);
            }
        }
        $form = $this->createForm(new MessageType(), $message);

        $result = array("result" => "fail", "request" => $request);
        $form->bind($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($message);
            $em->flush();
            $result = array("result" => "success", "message" => $message, "request" => $request);
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


        $result = array("result" => "fail");
        $form->bindRequest($request);
        if ($form->isValid()) {
            $result = array("result" => "success", "request" => $request);

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
    private function getMessageRepo()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $namespace = "GalaxyInfoBundle:Message";
        $repo = $em->getRepository($namespace);

        return $repo;
    }

}