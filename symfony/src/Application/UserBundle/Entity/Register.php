<?php

namespace Application\UserBundle\Entity;


class Register{
    /**
     * @orm:Id
     * @orm:Column(type="integer")
     * @orm:GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @orm:Column(type="string", length="30")
     */
    protected $pseudo;
    
    /**
     * @orm:Column(type="string", length="255")
     */
    protected $password;
    
    /**
     * @orm:Column(type="string", length="255")
     */
    protected $conf_password;
}
?>
