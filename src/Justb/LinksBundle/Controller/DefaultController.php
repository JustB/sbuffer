<?php

namespace Justb\LinksBundle\Controller;

use Justb\LinksBundle\Entity\Link;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JustbLinksBundle:Default:index.html.twig', array('name' => $name));
    }

    public function createAction()
    {
        $link = new Link();
        $link->setTitle('How to Give a Talk');
        $link->setUrl('https://zapier.com/blog/how-give-talk/');
        $link->setDescription('Learn how to give a talk and what errors you should avoid');

        $em = $this->getDoctrine()->getManager();
        $em->persist($link);
        $em->flush();

        return new Response('Creato link id ' . $link->getId());
    }
}
