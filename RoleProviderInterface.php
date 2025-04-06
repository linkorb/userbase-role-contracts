<?php

namespace LinkORB\Contracts\UserbaseRole;

/**
 * The interface for RoleProviders which use application-specific mechanisms to
 * match Users to their Roles.
 */
interface RoleProviderInterface
{
    public function getRoles(RoleInterface $user): array;
}
