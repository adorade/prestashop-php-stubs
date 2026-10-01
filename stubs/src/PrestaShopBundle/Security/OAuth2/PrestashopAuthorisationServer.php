<?php

namespace PrestaShopBundle\Security\OAuth2;

/**
 * Class responsible for validating a PrestaShop token (issued by our AccessTokenController)
 * the implementation is based on League OAuth2 library just like in the controller.
 */
class PrestashopAuthorisationServer implements \PrestaShop\PrestaShop\Core\Security\OAuth2\AuthorisationServerInterface
{
    public function __construct(private readonly \League\OAuth2\Server\ResourceServer $resourceServer, private readonly \Symfony\Bridge\PsrHttpMessage\HttpMessageFactoryInterface $httpMessageFactory)
    {
    }
    public function isTokenValid(\Symfony\Component\HttpFoundation\Request $request): bool
    {
    }
    public function getJwtTokenUser(\Symfony\Component\HttpFoundation\Request $request): ?\PrestaShop\PrestaShop\Core\Security\OAuth2\JwtTokenUser
    {
    }
}
