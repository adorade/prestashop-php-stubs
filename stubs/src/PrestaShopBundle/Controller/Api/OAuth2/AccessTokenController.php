<?php

namespace PrestaShopBundle\Controller\Api\OAuth2;

/**
 * Class responsible for handling access token requests
 *
 * @experimental
 */
class AccessTokenController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    public function __construct(\League\OAuth2\Server\AuthorizationServer $authorizationServer, \Symfony\Bridge\PsrHttpMessage\HttpMessageFactoryInterface $httpMessageFactory, \Symfony\Bridge\PsrHttpMessage\HttpFoundationFactoryInterface $httpFoundationFactory, \Psr\Http\Message\ResponseFactoryInterface $responseFactory)
    {
    }
    public function __invoke(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
}
