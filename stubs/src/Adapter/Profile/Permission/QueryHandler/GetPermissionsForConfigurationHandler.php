<?php

namespace PrestaShop\PrestaShop\Adapter\Profile\Permission\QueryHandler;

/**
 * Get configurable permissions
 *
 * @internal
 */
class GetPermissionsForConfigurationHandler implements \PrestaShop\PrestaShop\Core\Domain\Profile\Permission\QueryHandler\GetPermissionsForConfigurationHandlerInterface
{
    /**
     * @internal Max nesting level for building tabs tree
     */
    public const MAX_NESTING_LEVEL = 12;
    /**
     * @var array
     */
    protected $nonConfigurableTabs;
    /**
     * @param AuthorizationCheckerInterface $authorizationChecker
     */
    public function __construct(\Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, int $languageId, array $nonConfigurableTabs)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Profile\Permission\Query\GetPermissionsForConfiguration $query): \PrestaShop\PrestaShop\Core\Domain\Profile\Permission\QueryResult\ConfigurablePermissions
    {
    }
}
