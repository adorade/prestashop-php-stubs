<?php

namespace PrestaShop\PrestaShop\Adapter\Group\Provider;

/**
 * Provides default customer groups
 *
 * @internal
 */
final class DefaultGroupsProvider implements \PrestaShop\PrestaShop\Core\Group\Provider\DefaultGroupsProviderInterface
{
    /**
     * @param ConfigurationInterface $configuration
     * @param int $contextLangId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, $contextLangId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getGroups()
    {
    }
}
