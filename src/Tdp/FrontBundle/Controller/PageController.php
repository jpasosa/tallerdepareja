<?php

namespace Tdp\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    

    // HOMEPAGE
    public function homepageAction() {
        return $this->render('TdpFrontBundle:Page:homepage.html.twig');
    }









}
