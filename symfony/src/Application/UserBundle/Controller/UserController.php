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
            ->add('Pseudo', 'text')
            ->add('Mot de passe', 'password')
            ->add('Confirmation du mot de passe', 'password')
            ->add('Adresse e-mail', 'text')
            ->add('Confirmation de l\'adresse e-mail', 'text')
            ->add('Regles', 'checkbox')
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
