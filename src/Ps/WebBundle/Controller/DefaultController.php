<?php

namespace Ps\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PsWebBundle:Default:index.html.twig');
    }
}
