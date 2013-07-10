<?php

namespace Galaxy\InfoBundle\Service;

use Galaxy\InfoBundle\Entity\UserData;

class MessageFinder
{

    private $entityManager;

    public function findMessage(UserData $data)
    {
        $repo = $this->getMessageRepo();

        $message = $repo->find(1);
        return $message;
    }

    private function getMessageRepo()
    {
        $em = $this->entityManager;
        $namespace = "GalaxyInfoBundle:Message";
        $repo = $em->getRepository($namespace);

        return $repo;
    }

    public function setEntityManager($entityManager)
    {
        $this->entityManager = $entityManager;
    }

}