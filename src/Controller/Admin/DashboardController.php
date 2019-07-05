<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(path="/admin", name="admin_dashboard", methods={"GET"})
 */
class DashboardController extends AbstractController
{
    public function __invoke()
    {
        return $this->render('admin/dashboard.html.twig');
    }
}
