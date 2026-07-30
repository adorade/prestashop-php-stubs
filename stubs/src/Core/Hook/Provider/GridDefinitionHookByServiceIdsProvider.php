<?php

namespace PrestaShop\PrestaShop\Core\Hook\Provider;

/**
 * Provides hooks list by calling service ids from the container.
 */
final class GridDefinitionHookByServiceIdsProvider implements \PrestaShop\PrestaShop\Core\Hook\Provider\HookByServiceIdsProviderInterface
{
    public const HOOK_PREFIX = 'action';
    public const GRID_DEFINITION_HOOK_SUFFIX = 'GridDefinitionModifier';
    public const GRID_QUERY_BUILDER_HOOK_SUFFIX = 'GridQueryBuilderModifier';
    public const GRID_DATA_HOOK_SUFFIX = 'GridDataModifier';
    public const GRID_FILTER_FORM_SUFFIX = 'GridFilterFormModifier';
    public const GRID_PRESENTER_SUFFIX = 'GridPresenterModifier';
    /**
     * @param ContainerInterface $container
     */
    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getHookNames(array $gridDefinitionServiceIds)
    {
    }
}
