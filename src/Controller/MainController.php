<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{

    /**
     * default page
     *
     * @Route("/", name="main-home")
     *
     * @return Response
     *
     */

    public function home(): Response
    {

        //with twig and abstractController we can generate our html,  base on twig templates
        return $this->render(
            'main/index.html.twig',
            [
                "informations_test" => "ce que je veux afficher",
            ]
        );

    }

}
