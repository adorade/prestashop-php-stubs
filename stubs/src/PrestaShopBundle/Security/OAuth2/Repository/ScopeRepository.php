<?php

namespace PrestaShopBundle\Security\OAuth2\Repository;

/**
 * Repository class responsible for managing PrestaShop's Authorization Server scopes,
 * based on our scopes extractor that extract scopes from the ApiPlatform resources in
 * which scopes are defined. The ApiPlatform resources can come from modules so the list
 * is dynamic based on which modules are installed.
 */
class ScopeRepository implements \League\OAuth2\Server\Repositories\ScopeRepositoryInterface
{
    public function __construct(private readonly \PrestaShopBundle\ApiPlatform\Scopes\ApiResourceScopesExtractorInterface $scopesExtractor, private readonly \Symfony\Component\Security\Core\User\UserProviderInterface $apiClientProvider)
    {
    }
    public function getScopeEntityByIdentifier($identifier): ?\League\OAuth2\Server\Entities\ScopeEntityInterface
    {
    }
    /**
     * @return \League\OAuth2\Server\Entities\ScopeEntityInterface[]
     */
    public function finalizeScopes(array $scopes, $grantType, \League\OAuth2\Server\Entities\ClientEntityInterface $clientEntity, $userIdentifier = null, $authCodeId = null)
    {
    }
}
