<?php

namespace OpenBall\Bundle\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SiteController extends Controller
{
    /**
     * Display the home page
     */
    public function indexAction()
    {
        return $this->render('OpenBallSiteBundle:Site:index.html.twig');
    }

    /**
     * Change the local for the user
     *
     * @param $lang string The
     */
    public function setLocalAction($lang)
    {

    }
}
