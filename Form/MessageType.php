<?php

namespace Galaxy\InfoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MessageType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('answers', 'collection', array(
                    'type' => new AnswerType()
                        )
                )
                ->add('question', 'textarea')
                ->add('incPoints', 'integer', array(
                    'required' => false,
                ))
                ->add('incPointsActv', 'gcheckbox', array(
                    'required' => false,
                ))
                ->add('incPointsProc', 'gcheckbox', array(
                    'required' => false,
                ))
                ->add('incPointsMess', 'textarea', array(
                    'required' => false,
                ))
                ->add('incOwnElem', 'integer', array(
                    'required' => false,
                ))
                ->add('incOwnElemActv', 'gcheckbox', array(
                    'required' => false,
                ))
                ->add('incOwnElemMess', 'textarea', array(
                    'required' => false,
                ))
                ->add('incDurationMinElem', 'integer', array(
                    'required' => false,
                ))
                ->add('incDurationMinElemActv', 'gcheckbox', array(
                    'required' => false,
                ))
                ->add('incDurationMinElemMess', 'textarea', array(
                    'required' => false,
                ))
                ->add('incFlipAmount', 'integer', array(
                    'required' => false,
                ))
                ->add('incFlipAmountActv', 'gcheckbox', array(
                    'required' => false,
                ))
                ->add('incFlipAmountMess', 'textarea', array(
                    'required' => false,
                ))
                ->add('superjumpAmount', 'integer', array(
                    'required' => false,
                ))
                ->add('superjumpAmountActv', 'gcheckbox', array(
                    'required' => false,
                ))
                ->add('superjumpAmountMess', 'textarea', array(
                    'required' => false,
                ))
                ->add('incDurationAllElem', 'integer', array(
                    'required' => false,
                ))
                ->add('incDurationAllElemActv', 'gcheckbox', array(
                    'required' => false,
                ))
                ->add('incDurationAllElemMess', 'textarea', array(
                    'required' => false,
                ))
                ->add('decPoints', 'integer', array(
                    'required' => false,
                ))
                ->add('decPointsActv', 'gcheckbox', array(
                    'required' => false,
                ))
                ->add('decPointsProc', 'gcheckbox', array(
                    'required' => false,
                ))
                ->add('decPointsMess', 'textarea', array(
                    'required' => false,
                ))
                ->add('decFlipAmount', 'integer', array(
                    'required' => false,
                ))
                ->add('decFlipAmountActv', 'gcheckbox', array(
                    'required' => false,
                ))
                ->add('decFlipAmountMess', 'textarea', array(
                    'required' => false,
                ))
                ->add('superjumpCancelActv', 'gcheckbox', array(
                    'required' => false,
                ))
                ->add('superjumpCancelMess', 'textarea', array(
                    'required' => false,
                ))
                ->add('activeCancelActv', 'gcheckbox', array(
                    'required' => false,
                ))
                ->add('activeCancelMess', 'textarea', array(
                    'required' => false,
                ))
                ->add('firstFlipperActv', 'gcheckbox', array(
                    'required' => false,
                ))
                ->add('firstFlipperMess', 'textarea', array(
                    'required' => false,
                ))
                ->add('blackPointActv', 'gcheckbox', array(
                    'required' => false,
                ))
                ->add('blackPointMess', 'textarea', array(
                    'required' => false,
                ))
                ->add('delElemGroupActv', 'gcheckbox', array(
                    'required' => false,
                ))
                ->add('delElemGroupMess', 'textarea', array(
                    'required' => false,
                ))
                ->add('decDurationAllElem', 'integer', array(
                    'required' => false,
                ))
                ->add('decDurationAllElemActv', 'gcheckbox', array(
                    'required' => false,
                ))
                ->add('decDurationAllElemMess', 'textarea', array(
                    'required' => false,
                ))
                ->add('userId', 'integer', array(
                    'required' => false,
                ))
                ->add('title', 'text')
                ->add('visible', 'gcheckbox', array(
                    'required' => false,
                ))
                ->add('moderatorAccepted', 'gcheckbox', array(
                    'required' => false,
                ))
                ->add('theme')
                ->add('age', 'choice', array(
                    'choices' => array(
                        '12' => 'до 12',
                        '16' => 'до 16',
                        '18' => 'до 18',
                        '22' => 'до 22',
                        '23' => 'старше 22',
                    )
                ))
                ->add('text', 'text')
                ->add('date', 'datetime')
                ->add('img1', 'text', array(
                    'required' => false,
                ))
                ->add('img2', 'text', array(
                    'required' => false,
                ))
                ->add('img3', 'text', array(
                    'required' => false,
                ))
                ->add('jumpsToQuestion', 'integer', array(
                    'required' => false,
                ))
                ->add('seconds', 'integer', array(
                    'required' => false,
                ))
                ->add('rightAnswer', 'choice', array(
                    'choices' => array(
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5',
                    )
                ))
                ->add('imageDelete1', 'gcheckbox', array(
                    'required' => false,
                ))
                ->add('imageDelete2', 'gcheckbox', array(
                    'required' => false,
                ))
                ->add('imageDelete3', 'gcheckbox', array(
                    'required' => false,
                ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Galaxy\InfoBundle\Entity\Message',
            'csrf_protection' => false,
        ));
    }

    public function getName()
    {
        return '';
    }

}
