<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Class CustomerGridDefinitionFactory defines customers grid structure.
 */
final class CustomerGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractGridDefinitionFactory
{
    public const GRID_ID = 'customer';
    /**
     * @param HookDispatcherInterface $hookDispatcher
     * @param bool $isB2bFeatureEnabled
     * @param bool $isMultistoreFeatureEnabled
     * @param array $genderChoices
     * @param string $contextDateFormat
     * @param bool $isGroupsFeatureEnabled
     * @param array $groupChoices
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, $isB2bFeatureEnabled, $isMultistoreFeatureEnabled, array $genderChoices, string $contextDateFormat, bool $isGroupsFeatureEnabled = true, array $groupChoices = [])
    {
    }
}
