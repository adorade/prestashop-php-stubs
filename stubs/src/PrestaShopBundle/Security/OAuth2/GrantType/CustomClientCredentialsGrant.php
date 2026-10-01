<?php

namespace PrestaShopBundle\Security\OAuth2\GrantType;

/**
 * The default class does not allow to modify the lifetime of a token.
 * This class allow to set a different lifetime for each token.
 */
class CustomClientCredentialsGrant extends \League\OAuth2\Server\Grant\ClientCredentialsGrant
{
    /**
     * @return \League\OAuth2\Server\Entities\AccessTokenEntityInterface
     */
    protected function issueAccessToken(\DateInterval $accessTokenTTL, \League\OAuth2\Server\Entities\ClientEntityInterface $client, $userIdentifier, array $scopes = [])
    {
    }
    /**
     * By default, League client credentials implementation only accepts scopes to be passed via the `scope` parameters
     * and multiple scopes must be separated with spaces. We want to offer more possibilities:
     *   - scope: array of string, strings separated by commas or strings separated by spaces
     *   - scopes: array of string, strings separated by commas or strings separated by spaces
     *
     * When both parameters are provided however, we throw an exception as we cannot tell which one should be prioritized.
     *
     * @param string $parameter
     * @param \Psr\Http\Message\ServerRequestInterface $request
     * @param string|null $default
     *
     * @return string|null
     *
     * @throws \League\OAuth2\Server\Exception\OAuthServerException
     */
    protected function getRequestParameter($parameter, \Psr\Http\Message\ServerRequestInterface $request, $default = null)
    {
    }
}
