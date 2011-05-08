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
        
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);

            if ($form->isValid()) {
                // perform some action, such as save the object to the database
                return new Response('The author is valid! Yes!');
                //return $this->redirect($this->generateUrl('_user_register_success'));
            } else {
                return new Response('The author is not valid! Oh no!');
            }
        } else 
            return array('form' => $form->createView());
                               
    }
    
    /**
     * @extra:Route("/membres-2.html", name="_user_register_success")
     * @extra:Template()
     */
    public function register_successAction(){
    
        $validator = $this->get('validator');
        $errorList = $validator->validate($user);
        
        if (count($errorList) > 0) 
            return array('form' => $form->createView(),);            
        else 
            return new Response('The author is valid! Yes!');
    }
    
    /**
     * @extra:Route("/membre-6-{id}.html", name="_user_register_sucess")
     * @extra:Template()
     */
    public function profilAction($id){
        return array('id' => $id);
    }
}
