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
    public function registerAction()
    {
        return $this->render('ApplicationUserBundle:User:register.html.twig');
    }
}
