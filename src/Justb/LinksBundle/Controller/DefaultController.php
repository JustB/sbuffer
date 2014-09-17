<?php

namespace Justb\LinksBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JustbLinksBundle:Default:index.html.twig', array('name' => $name));
    }
}
