<?php

namespace PrestaShopBundle\Security\OAuth2\Repository;

/**
 * Repository class responsible for managing PrestaShop's Authorization Server AccessToken entity
 *
 * @experimental
 */
class AccessTokenRepository implements \League\OAuth2\Server\Repositories\AccessTokenRepositoryInterface
{
    public function getNewToken(\League\OAuth2\Server\Entities\ClientEntityInterface $clientEntity, array $scopes, $userIdentifier = null): \League\OAuth2\Server\Entities\AccessTokenEntityInterface
    {
    }
    public function persistNewAccessToken(\League\OAuth2\Server\Entities\AccessTokenEntityInterface $accessTokenEntity): void
    {
    }
    public function revokeAccessToken($tokenId): void
    {
    }
    public function isAccessTokenRevoked($tokenId): bool
    {
    }
}
