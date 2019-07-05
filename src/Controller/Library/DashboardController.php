<?php

namespace App\Controller\Library;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(path="/library", name="library_dashboard", methods={"GET"})
 */
class DashboardController extends AbstractController
{
    public function __invoke()
    {
        return $this->render('library/dashboard.html.twig');
    }
}
