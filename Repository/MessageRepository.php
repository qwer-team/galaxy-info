<?php

namespace Galaxy\InfoBundle\Repository;

use Galaxy\InfoBundle\Entity\Filter\Search;
use Doctrine\ORM\EntityRepository;

/**
 * Description of MessageRepository
 *
 * @author root
 */
class MessageRepository extends EntityRepository
{

    public function getMessagesList(Search $data, $theme, $page, $length)
    {
        $qb = $this->createQueryBuilder('mes');
        if ($data->getText() != '') {
            $qb->join("mes.answers", "answers");
            $text = $data->getText();
            $qb->orWhere(
                    $qb->expr()->like('mes.text', ':text'), 
                    $qb->expr()->like('mes.title', ':text'), 
                    $qb->expr()->like('mes.question', ':text'), 
                    $qb->expr()->like('answers.answer', ':text')
            );
            $qb->setParameter('text', "%$text%");
        }
        if ($data->getVisible()) {
            $qb->where('mes.visible = :visible');
            $qb->setParameter('visible', $data->getVisible());
        }
        if ($data->getModeratorAccepted()) {
            $qb->andWhere('mes.moderatorAccepted = :moderatorAccepted');
            $qb->setParameter('moderatorAccepted', $data->getModeratorAccepted());
        }
        if ($theme !== null) {
            $qb->andWhere('mes.theme = :theme');
            $qb->setParameter('theme', $theme);
        }
        if ($data->getUserId() != '') {
            $qb->andWhere('mes.userId = :userId');
            $qb->setParameter('userId', $data->getUserId());
        }
        if ($data->getAge() != '') {
            $qb->andWhere('mes.age = :age');
            $qb->setParameter('age', $data->getAge());
        }
        if ($data->getMessageId() != '') {
            $qb->andWhere('mes.id = :id');
            $qb->setParameter('id', $data->getMessageId());
        }
        $qb->orderBy('mes.id', 'DESC');
        $firstResult = $length * ($page - 1);
        $qb->setFirstResult($firstResult)->setMaxResults($length);
        $result = $qb->getQuery()->execute();

        return $result;
    }
    
    public function getMessagesCount(Search $data, $theme)
    {
        $qb = $this->createQueryBuilder('mes');
        $qb->select('COUNT(mes)');
        if ($data->getText() != '') {
            $qb->join("mes.answers", "answers");
            $text = $data->getText();
            $qb->orWhere(
                    $qb->expr()->like('mes.text', ':text'), 
                    $qb->expr()->like('mes.title', ':text'), 
                    $qb->expr()->like('mes.question', ':text'), 
                    $qb->expr()->like('answers.answer', ':text')
            );
            $qb->setParameter('text', "%$text%");
        }
        if ($data->getVisible()) {
            $qb->where('mes.visible = :visible');
            $qb->setParameter('visible', $data->getVisible());
        }
        if ($data->getModeratorAccepted()) {
            $qb->andWhere('mes.moderatorAccepted = :moderatorAccepted');
            $qb->setParameter('moderatorAccepted', $data->getModeratorAccepted());
        }
        if ($theme !== null) {
            $qb->andWhere('mes.theme = :theme');
            $qb->setParameter('theme', $theme);
        }
        if ($data->getUserId() != '') {
            $qb->andWhere('mes.userId = :userId');
            $qb->setParameter('userId', $data->getUserId());
        }
        if ($data->getAge() != '') {
            $qb->andWhere('mes.age = :age');
            $qb->setParameter('age', $data->getAge());
        }
        if ($data->getMessageId() != '') {
            $qb->andWhere('mes.id = :id');
            $qb->setParameter('id', $data->getMessageId());
        }
        $qb->orderBy('mes.id', 'DESC');
        $result = $qb->getQuery()->getSingleScalarResult();

        return $result;
    }

}