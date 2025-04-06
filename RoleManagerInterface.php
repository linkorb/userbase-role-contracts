<?php

namespace LinkORB\Contracts\UserbaseRole;

/**
 * The interface implemented by Userbase UserProvider so that it can obtain
 * Roles for a user it has loaded.
 */
interface RoleManagerInterface
{
    public function setRoleProvider(RoleProviderInterface $roleProvider);
}
