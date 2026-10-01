<?php

namespace PrestaShopBundle\Security\OAuth2\Provider;

class ApiClientProvider implements \Symfony\Component\Security\Core\User\UserProviderInterface
{
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\ApiClientRepository $apiClientRepository)
    {
    }
    public function loadUserByIdentifier(string $identifier): \PrestaShopBundle\Entity\ApiClient
    {
    }
    public function refreshUser(\Symfony\Component\Security\Core\User\UserInterface $apiClient): \PrestaShopBundle\Entity\ApiClient
    {
    }
    public function supportsClass(string $class): bool
    {
    }
}
