<?php

namespace PrestaShop\PrestaShop\Core\Security;

/**
 * This class is responsible for authenticating api calls using the Authorization header
 *
 * @experimental
 */
class TokenAuthenticator extends \Symfony\Component\Security\Guard\AbstractGuardAuthenticator
{
    public function __construct(\PrestaShop\PrestaShop\Core\Security\OAuth2\ResourceServerInterface $authorizationServer, \Symfony\Bridge\PsrHttpMessage\HttpMessageFactoryInterface $httpMessageFactory)
    {
    }
    public function start(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Exception\AuthenticationException $authException = null): \Symfony\Component\HttpFoundation\Response
    {
    }
    public function supports(\Symfony\Component\HttpFoundation\Request $request): bool
    {
    }
    public function getCredentials(\Symfony\Component\HttpFoundation\Request $request): \Psr\Http\Message\ServerRequestInterface
    {
    }
    public function getUser($credentials, \Symfony\Component\Security\Core\User\UserProviderInterface $userProvider): ?\Symfony\Component\Security\Core\User\UserInterface
    {
    }
    public function checkCredentials($credentials, \Symfony\Component\Security\Core\User\UserInterface $user): bool
    {
    }
    public function onAuthenticationFailure(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Exception\AuthenticationException $exception): ?\Symfony\Component\HttpFoundation\Response
    {
    }
    public function onAuthenticationSuccess(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authentication\Token\TokenInterface $token, $providerKey): ?\Symfony\Component\HttpFoundation\Response
    {
    }
    public function supportsRememberMe(): bool
    {
    }
}
