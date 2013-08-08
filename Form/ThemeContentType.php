<?php

namespace Galaxy\InfoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ThemeContentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Galaxy\InfoBundle\Entity\ThemeContent',
            'csrf_protection' => false,
        ));
    }

    public function getName()
    {
        return 'galaxy_infobundle_themecontenttype';
    }
}
