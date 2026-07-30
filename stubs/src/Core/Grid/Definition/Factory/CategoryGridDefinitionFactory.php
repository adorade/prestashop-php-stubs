<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Class CategoryGridDefinitionFactory builds Grid definition for Categories listing.
 */
final class CategoryGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractFilterableGridDefinitionFactory
{
    public const GRID_ID = 'category';
    /**
     * @param HookDispatcherInterface $hookDispatcher
     * @param MultistoreContextCheckerInterface $multistoreContextChecker
     * @param AccessibilityCheckerInterface $categoryForViewAccessibilityChecker
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, \PrestaShop\PrestaShop\Core\Multistore\MultistoreContextCheckerInterface $multistoreContextChecker, \PrestaShop\PrestaShop\Core\Grid\Action\Row\AccessibilityChecker\AccessibilityCheckerInterface $categoryForViewAccessibilityChecker)
    {
    }
}
