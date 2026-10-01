<?php

namespace PrestaShop\PrestaShop\Core\Security\OAuth2;

/**
 * Interface to implement when using/implementing an Authorization Server so the Resource Server
 * can have a way to verify the access token
 *
 * @experimental
 */
interface ResourceServerInterface
{
    public function isTokenValid(\Psr\Http\Message\ServerRequestInterface $request): bool;
    public function getUser(\Psr\Http\Message\ServerRequestInterface $request): ?\Symfony\Component\Security\Core\User\UserInterface;
}
