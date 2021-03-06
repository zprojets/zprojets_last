<?php

namespace Application\UserBundle\Entity;

/**
 * @orm:Entity
 */
class User{
    
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
}
?>
