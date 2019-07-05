<?php

namespace App\Controller\Publisher;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(path="/publisher", name="publisher_dashboard", methods={"GET"})
 */
class DashboardController extends AbstractController
{
    public function __invoke()
    {
        return $this->render('publisher/dashboard.html.twig');
    }
}
