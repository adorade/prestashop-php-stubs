<?php

namespace PrestaShopBundle\Service\DataProvider;

/**
 * Convenient way to access User, if exists.
 */
class UserProvider
{
    public const ANONYMOUS_USER = 'ANONYMOUS_USER';
    public function __construct(\Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface $tokenStorage)
    {
    }
    /**
     * @see \Symfony\Bundle\FrameworkBundle\Controller::getUser()
     */
    public function getUser()
    {
    }
    public function getUsername()
    {
    }
}
