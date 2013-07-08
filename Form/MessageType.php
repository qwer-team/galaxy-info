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
            ->add('incPoints')
            ->add('incPointsActv')
            ->add('incPointsProc')
            ->add('incPointsMess')
            ->add('incOwnElem')
            ->add('incOwnElemActv')
            ->add('incOwnElemMess')
            ->add('incDurationMinElem')
            ->add('incDurationMinElemActv')
            ->add('incDurationMinElemMess')
            ->add('incFlipAmount')
            ->add('incFlipAmountActv')
            ->add('incFlipAmountMess')
            ->add('superjumpAmount')
            ->add('superjumpAmountActv')
            ->add('superjumpAmountMess')
            ->add('incDurationAllElem')
            ->add('incDurationAllElemActv')
            ->add('incDurationAllElemMess')
            ->add('decPoints')
            ->add('decPointsActv')
            ->add('decPointsProc')
            ->add('decPointsMess')
            ->add('decFlipAmount')
            ->add('decFlipAmountActv')
            ->add('decFlipAmountMess')
            ->add('superjumpCancelActv')
            ->add('superjumpCancelMess')
            ->add('activeCancelActv')
            ->add('activeCancelMess')
            ->add('firstFlipperActv')
            ->add('firstFlipperMess')
            ->add('blackPointActv')
            ->add('blackPointMess')
            ->add('delElemGroupActv')
            ->add('delElemGroupMess')
            ->add('decDurationAllElem')
            ->add('decDurationAllElemActv')
            ->add('decDurationAllElemMess')
            ->add('userId')
            ->add('title')
            ->add('visible')
            ->add('moderatorAccepted')
            ->add('theme')
            ->add('age')
            ->add('text')
            ->add('image')
            ->add('jumpsToQuestion')
            ->add('date')
            ->add('questions')
            ->add('rightAnswer')
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
