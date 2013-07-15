<?php

namespace Galaxy\InfoBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Galaxy\InfoBundle\Entity\Message;
use Galaxy\InfoBundle\Form\MessageType;
use Galaxy\InfoBundle\Form\UserDataType;
use Galaxy\InfoBundle\Entity\Answer;
use Galaxy\InfoBundle\Entity\ThemeContent;
use Galaxy\InfoBundle\Form\ThemeContentType;
use Galaxy\InfoBundle\Entity\NotificationTemplate;
use Galaxy\InfoBundle\Form\Filter\SearchType;
use Galaxy\InfoBundle\Entity\Filter\Search;

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

    public function getMessageLastIdAction()
    {
        $repo = $this->getMessageRepo();
        $qb = $repo->createQueryBuilder('mes');
        $qb->select('MAX(mes.id)');
        $message = $qb->getQuery()->getSingleScalarResult();

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

    public function postMessagesLengthAction(Request $request, $page, $length)
    {
        $search = new Search();
        $themeRepo = $this->getThemeRepo();
        $repo = $this->getMessageRepo();
        $theme = ($request->get('theme')) ? $themeRepo->find($request->get('theme')) : null;
        $form = $this->createForm(new SearchType(), $search);
        $form->bind($request);
        if ($form->isValid()) {
            $data = $form->getData();
            $result = $repo->getMessagesList($data, $theme, $page, $length);
        }
        $view = $this->view($result);
        return $this->handleView($view);
    }

    public function postMessageCountAction(Request $request)
    {
        $search = new Search();
        $themeRepo = $this->getThemeRepo();
        $repo = $this->getMessageRepo();
        $theme = ($request->get('theme')) ? $themeRepo->find($request->get('theme')) : null;
        $form = $this->createForm(new SearchType(), $search);
        $form->bind($request);
        if ($form->isValid()) {
            $data = $form->getData();
            $result = $repo->getMessagesCount($data, $theme);
        }
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



    public function postFindMessageAction(Request $request)
    {
        $form = $this->createForm(new UserDataType());

        $form->bind($request);
        $result = array("result" => "fail");
        if ($form->isValid()) {
            $messageFinder = $this->get('galaxy.message.finder');
            $result = $messageFinder->findMessage($form->getData());
        }

        $view = $this->view($result);
        return $this->handleView($view);
    }

}

