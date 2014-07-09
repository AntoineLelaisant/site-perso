<?php

namespace OpenBall\Bundle\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SiteController extends Controller
{
    public function indexAction()
    {
        return $this->render('OpenBallSiteBundle:Site:index.html.twig');
    }
}
