<?php

namespace PrestaShopBundle\Service\DataProvider;

/**
 * Old convenient way to access User, if exists. Prefer using the Security service to get the connected user.
 * This service is only used in legacy context now.
 */
class UserProvider
{
    public function __construct(private readonly \Symfony\Bundle\SecurityBundle\Security $security, private readonly \PrestaShopBundle\Security\Admin\SessionEmployeeProvider $sessionEmployeeProvider, private readonly \Symfony\Component\HttpFoundation\RequestStack $requestStack)
    {
    }
    /**
     * @see \Symfony\Bundle\FrameworkBundle\Controller::getUser()
     */
    public function getUser(): ?\Symfony\Component\Security\Core\User\UserInterface
    {
    }
    public function logout(): void
    {
    }
}
