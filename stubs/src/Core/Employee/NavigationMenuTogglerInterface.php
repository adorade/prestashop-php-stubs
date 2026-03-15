<?php

namespace PrestaShop\PrestaShop\Core\Employee;

/**
 * Interface NavigationMenuTogglerInterface describes an employee navigation menu toggler.
 */
interface NavigationMenuTogglerInterface
{
    /**
     * Toggle the navigation for employee (collapse/expand)
     *
     * @param bool $shouldCollapse if true - collapse the navigation, expand it otherwise
     */
    public function toggleNavigationMenuInCookies($shouldCollapse);
}
