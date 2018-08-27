<?php

namespace Italia\SpidSymfonyBundle\Entity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

/**
 * Class SpidUserProvider
 */
abstract class SpidUserProvider implements UserProviderInterface
{
    abstract public function loadUserByUsername($username):SPIDUser;

    abstract public function refreshUser(UserInterface $user):SPIDUser;

    abstract public function supportsClass($class);
}
