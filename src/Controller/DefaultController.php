<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends Controller\AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home()
    {

        return $this->render("default/home.html.twig");
    }


}