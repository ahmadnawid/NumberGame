<?php
// src/Sepa/BlogBundle/Controller/BlogController.php

namespace Sepa\BlogBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function listAction($color)
    {
        $posts = $this->get('doctrine')->getEntityManager()
            ->createQuery('SELECT p FROM SepaBlogBundle:Post p')
            ->execute();

        return $this->render('SepaBlogBundle:Blog:list.html.php', array('posts' => $posts));
    }

    public function showAction($id)
    {
        $post = $this->get('doctrine')
            ->getEntityManager()
            ->getRepository('SepaBlogBundle:Post')
            ->find($id);

        if (!$post) {
            // cause the 404 page not found to be displayed
            throw $this->createNotFoundException();
        }

       return $this->render('SepaBlogBundle:Blog:show.html.php', array('post' => $post));
    }
}
?>