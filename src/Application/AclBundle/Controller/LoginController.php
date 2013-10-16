<?php

namespace Application\AclBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    public function loginAction()
    {
        return $this->render('ApplicationAclBundle:Login:login.html.twig');
    }
}
