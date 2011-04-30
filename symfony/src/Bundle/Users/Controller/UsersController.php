<?php

namespace Bundle\Users\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;


class UsersController extends Controller
{
    public function indexAction()
    {
        return array();
    }

    public function registerAction()
    {
        return $this->render('BundleUsers:Users:register.html.twig');
    }
}
