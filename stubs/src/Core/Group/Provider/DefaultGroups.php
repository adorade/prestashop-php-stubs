<?php

namespace PrestaShop\PrestaShop\Core\Group\Provider;

/**
 * Stores default group options
 */
class DefaultGroups
{
    /**
     * @param DefaultGroup $visitorsGroup
     * @param DefaultGroup $guestsGroup
     * @param DefaultGroup $customersGroup
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Group\Provider\DefaultGroup $visitorsGroup, \PrestaShop\PrestaShop\Core\Group\Provider\DefaultGroup $guestsGroup, \PrestaShop\PrestaShop\Core\Group\Provider\DefaultGroup $customersGroup)
    {
    }
    /**
     * Get default visitors group
     *
     * @return DefaultGroup
     */
    public function getVisitorsGroup()
    {
    }
    /**
     * Get default guests group
     *
     * @return DefaultGroup
     */
    public function getGuestsGroup()
    {
    }
    /**
     * Get customers group
     *
     * @return DefaultGroup
     */
    public function getCustomersGroup()
    {
    }
    /**
     * Get default groups
     *
     * @return DefaultGroup[]
     */
    public function getGroups()
    {
    }
}
