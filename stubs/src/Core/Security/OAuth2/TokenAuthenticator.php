<?php

namespace PrestaShop\PrestaShop\Core\Security\OAuth2;

/**
 * This class is responsible for authenticating api calls using the Authorization header
 *
 * @experimental
 */
class TokenAuthenticator extends \Symfony\Component\Security\Http\Authenticator\AbstractAuthenticator
{
    /**
     * @param iterable|AuthorisationServerInterface[] $authorizationServers
     */
    public function __construct(private readonly iterable $authorizationServers, private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator, private readonly \PrestaShopBundle\Entity\Repository\ApiClientRepository $apiClientRepository, private readonly \Psr\Log\LoggerInterface $logger)
    {
    }
    public function supports(\Symfony\Component\HttpFoundation\Request $request): bool
    {
    }
    public function onAuthenticationFailure(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Exception\AuthenticationException $exception): ?\Symfony\Component\HttpFoundation\Response
    {
    }
    public function onAuthenticationSuccess(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authentication\Token\TokenInterface $token, string $firewallName): ?\Symfony\Component\HttpFoundation\Response
    {
    }
    public function authenticate(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\Security\Http\Authenticator\Passport\Passport
    {
    }
}
