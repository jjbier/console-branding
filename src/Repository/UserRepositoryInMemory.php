<?php

namespace App\Repository;

use App\Security\User\User;

final class UserRepositoryInMemory implements UserRepository
{
    private const users = [
        'library@xebook.es' => ['password' => 'library', 'roles' => ['ROLE_LIBRARY_USER'], 'dashboard' => 'library_dashboard'],
        'publisher@xebook.es' => ['password' => 'publisher', 'roles' => ['ROLE_PUBLISHER_USER'], 'dashboard' => 'publisher_dashboard'],
        'admin@xebook.es' => ['password' => 'admin', 'roles' => ['ROLE_ADMIN'], 'dashboard' => 'admin_dashboard'],
        'xebook@xebook.es' => ['password' => 'xebook', 'roles' => ['ROLE_SUPER_ADMIN'], 'dashboard' => 'admin_dashboard'],
    ];

    public function findOneUserByEmail(string $email)
    {
        if(!array_key_exists($email, self::users)){
            return false;
        }

        return new User($email, self::users[$email]['password'], self::users[$email]['roles'], self::users[$email]['dashboard']);
    }
}
