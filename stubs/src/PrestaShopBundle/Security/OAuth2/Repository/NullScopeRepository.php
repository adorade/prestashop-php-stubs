<?php

namespace PrestaShopBundle\Security\OAuth2\Repository;

/**
 * Repository class responsible for managing PrestaShop's Authorization Server scopes
 * Empty implementation for now because scopes are not used yet
 *
 * @experimental
 */
class NullScopeRepository implements \League\OAuth2\Server\Repositories\ScopeRepositoryInterface
{
    public function getScopeEntityByIdentifier($identifier): ?\League\OAuth2\Server\Entities\ScopeEntityInterface
    {
    }
    public function finalizeScopes(array $scopes, $grantType, \League\OAuth2\Server\Entities\ClientEntityInterface $clientEntity, $userIdentifier = null): array
    {
    }
}
