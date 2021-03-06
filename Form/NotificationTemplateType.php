<?php

namespace Galaxy\InfoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NotificationTemplateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
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
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Galaxy\InfoBundle\Entity\NotificationTemplate',
            'csrf_protection' => false,
        ));
    }

    public function getName()
    {
        return '';
    }
}
