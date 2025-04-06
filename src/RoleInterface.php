<?php

namespace LinkORB\Contracts\UserbaseRole;

use Symfony\Component\Security\Core\User\UserInterface;

/**
 * The interface for User objects to implement so that they may have roles
 * added to them.
 */
interface RoleInterface extends UserInterface
{
    public function addRole($role);
}
