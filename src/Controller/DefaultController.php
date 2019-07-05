<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route(name="homepage", path="/", methods={"GET"})
 */
final class DefaultController extends AbstractController
{
    final public function __invoke()
    {
        return $this->render('default.html.twig');
    }
}
