<?php

namespace Application\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('ApplicationUserBundle:User:index.html.twig');
    }
    
    /**
     * @extra:Route("/inscription.html", name="_user_register")
     * @extra:Template()
     */
    public function registerAction(){
         $form = $this->get('form.factory')
            ->createBuilder('form')
            ->add('pseudo', 'text')
            ->add('password', 'password')
            ->add('conf_password', 'password')
            ->add('email', 'text')
            ->add('conf_email', 'text')
            ->add('rules', 'checkbox')
            ->getForm();

        return array('form' => $form->createView(),);
    }
    
    /**
     * @extra:Route("/users-2.html", name="_user_register_sucess")
     * @extra:Template()
     */
    public function register_successAction(){
    
    }
}
