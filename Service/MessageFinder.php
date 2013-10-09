<?php

namespace Galaxy\InfoBundle\Service;

use Galaxy\InfoBundle\Entity\UserData;
use Doctrine\ORM\Query\ResultSetMapping;

class MessageFinder
{

    /**
     *
     * @var \Doctrine\ORM\EntityManager 
     */
    private $em;

    public function findMessage(UserData $data)
    {
        $sql = "SELECT id
                FROM galaxy_message
                WHERE age <= {$data->getAge()}
                AND visible = 1
                AND moderator_accepted = 1
                ORDER BY RAND()
                LIMIT 1
                ";
        $rsm = new ResultSetMapping();
        $res = $this->em->getConnection()->executeQuery($sql)->fetchAll();
        $repo = $this->getMessageRepo();

        $message = $repo->find(72);//$repo->find($res[0]['id']);
        return $message;
    }

    private function getMessageRepo()
    {
        $em = $this->em;
        $namespace = "GalaxyInfoBundle:Message";
        $repo = $em->getRepository($namespace);

        return $repo;
    }

    public function setEntityManager($entityManager)
    {
        $this->em = $entityManager;
    }

}