<?php

namespace Application\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Application\UserBundle\ApplicationUserBundle as ApplicationUserBundle;

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
         
        $users = new ApplicationUserBundle();
        $validator = $container->get('validator');
        $errorList = $validator->validate($users);

        if (count($errorList) > 0) {
            return new Response(print_r($errorList, true));
        } 
         
        return array('form' => $form->createView(),);
    }
    
    /**
     * @extra:Route("/users-2.html", name="_user_register_sucess")
     * @extra:Template()
     */
    public function register_successAction(){
    
    }
}
