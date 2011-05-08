<?php

namespace Application\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class Register extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options){
        $builder->add('pseudo', 'text');
        $builder->add('password', 'password');
        $builder->add('conf_password', 'password');
        $builder->add('email', 'text');
        $builder->add('conf_email', 'text');
        $builder->add('rules', 'checkbox');
    }

    public function getDefaultOptions(array $options) {
        return array(
            'data_class' => 'Application\UserBundle\Entity\Register',
        );
    }
}

?>
