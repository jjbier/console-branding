<?php


namespace App\Controller\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(name="logout", path="/logout", methods={"GET"})
 */
class LogoutController
{
    public function __invoke(Request $request)
    {
        $request->headers->remove('PHP_AUTH_PW');
        throw new \Exception('Don\'t forget to activate logout in security.yaml');
    }
}
