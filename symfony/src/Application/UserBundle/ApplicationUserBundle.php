<?php

namespace Application\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ApplicationUserBundle extends Bundle{
    public $pseudo;
    
    public $password;
    
    public $conf_password;
    
    public $email;
    
    public $conf_email;
    
    public $rules;
}
