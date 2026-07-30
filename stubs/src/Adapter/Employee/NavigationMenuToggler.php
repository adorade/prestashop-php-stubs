<?php

namespace PrestaShop\PrestaShop\Adapter\Employee;

/**
 * Class NavigationMenuToggler handles collapsing/expanding the navigation for context employee.
 */
final class NavigationMenuToggler implements \PrestaShop\PrestaShop\Core\Employee\NavigationMenuTogglerInterface
{
    /**
     * @param LegacyContext $legacyContext
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function toggleNavigationMenuInCookies($shouldCollapse)
    {
    }
}
