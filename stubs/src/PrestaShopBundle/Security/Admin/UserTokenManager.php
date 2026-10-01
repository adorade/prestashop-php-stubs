<?php

namespace PrestaShopBundle\Security\Admin;

/**
 * This service centralizes the generation and validation of the admin query token to avoid duplicating code and rely
 * on a single homogeneous implementation in the whole back office. It can generate symfony CSRF tokens (not legacy
 * ones so far because not needed but it could) and validate both legacy and CSRF tokens.
 */
class UserTokenManager implements \PrestaShop\PrestaShop\Core\Cache\Clearer\CacheClearerInterface
{
    public function __construct(private readonly \Symfony\Component\Security\Csrf\CsrfTokenManagerInterface $tokenManager, private readonly \Symfony\Component\HttpFoundation\RequestStack $requestStack, private readonly \Symfony\Bundle\SecurityBundle\Security $security, private readonly \PrestaShopBundle\Security\Admin\SessionEmployeeProvider $sessionEmployeeProvider)
    {
    }
    public function getSymfonyToken(): string
    {
    }
    public function isTokenValid(): bool
    {
    }
    public function clear()
    {
    }
}
