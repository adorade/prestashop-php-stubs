<?php

namespace PrestaShopBundle\Security\OAuth2;

/**
 * Class responsible for validating token
 * thanks to the PrestaShop's Authorization Server
 *
 * @experimental
 */
class ResourceServer implements \PrestaShop\PrestaShop\Core\Security\OAuth2\ResourceServerInterface
{
    public function __construct(\League\OAuth2\Server\ResourceServer $resourceServer, \Symfony\Component\Security\Core\User\UserProviderInterface $userProvider)
    {
    }
    public function isTokenValid(\Psr\Http\Message\ServerRequestInterface $request): bool
    {
    }
    public function getUser(\Psr\Http\Message\ServerRequestInterface $request): ?\Symfony\Component\Security\Core\User\UserInterface
    {
    }
}
