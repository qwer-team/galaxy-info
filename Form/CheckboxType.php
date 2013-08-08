<?php

namespace Galaxy\InfoBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType as CType;
use Symfony\Component\Form\FormBuilderInterface;
use Galaxy\InfoBundle\Transformer\BooleanToStringTransformer;

class CheckboxType extends CType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->addViewTransformer(new BooleanToStringTransformer($options['value']))
        ;
    }
    
    public function getName()
    {
        return 'gcheckbox';
    }
}