<?php

namespace Sepa\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PostType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('body')
            ->add('date')
        ;
    }

    public function getName()
    {
        return 'sepa_blogbundle_posttype';
    }
}
