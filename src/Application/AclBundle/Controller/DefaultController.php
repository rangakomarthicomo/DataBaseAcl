<?php

namespace Application\AclBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ApplicationAclBundle:Default:index.html.twig', array('name' => $name));
    }
}
