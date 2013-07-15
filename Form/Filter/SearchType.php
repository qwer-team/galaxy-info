<?php

namespace Galaxy\InfoBundle\Form\Filter;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SearchType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('messageId', 'integer', array(
                    'required' => false,
                ))
                ->add('userId', 'integer', array(
                    'required' => false,
                ))
                ->add('theme')
                ->add('title', 'text', array(
                    'required' => false,
                ))
                ->add('visible', 'choice', array(
                    'required' => false,
                    'choices' => array(
                        '0' => 'Невидим',
                        '1' => 'Видим',
                    )
                ))
                ->add('moderatorAccepted', 'choice', array(
                    'required' => false,
                    'choices' => array(
                        '0' => 'Не принято',
                        '1' => 'Принято',
                    )
                ))
               ->add('age', 'choice', array(
                    'choices' => array(
                        '12' => 'до 12',
                        '16' => 'до 16',
                        '18' => 'до 18',
                        '22' => 'до 22',
                        '23' => 'старше 22',
                    )))
                ->add('text', 'textarea', array(
                    'required' => false,
                ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Galaxy\InfoBundle\Entity\Filter\Search',
            'csrf_protection' => false,
        ));
    }

    public function getName()
    {
        return '';
    }

}
