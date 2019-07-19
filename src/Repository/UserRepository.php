<?php

namespace App\Repository;

use App\Security\User\User;

interface UserRepository
{
    /**
     * Find one system user by email
     *
     * @param string $email
     * @return User
     */
    public function findOneUserByEmail(string $email);
}
