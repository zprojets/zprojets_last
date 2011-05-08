<?php

namespace Application\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Application\UserBundle\Entity\Register;
use Application\UserBundle\Form\Register as FormRegister;

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
        
        $user = new Register();
        
        $form = $this->get('form.factory')
            ->createBuilder('form')
            ->add('pseudo', 'text')
            ->add('password', 'password')
            ->add('conf_password', 'password')
            ->add('email', 'text')
            ->add('conf_email', 'text')
            ->add('rules', 'checkbox')
            ->getForm();
        
        $validator = $this->get('validator');
        $errorList = $validator->validate($user);
        
        if (count($errorList) > 0) 
            return array('form' => $form->createView(),);            
        else 
            return new Response('The author is valid! Yes!');
                       
    }
    
    /**
     * @extra:Route("/users-2.html", name="_user_register_sucess")
     * @extra:Template()
     */
    public function register_successAction(){
    
    }
    
    /**
     * @extra:Route("/membre-6-{id}.html", name="_user_register_sucess")
     * @extra:Template()
     */
    public function profilAction($id){
        return array('id' => $id);
    }
}
