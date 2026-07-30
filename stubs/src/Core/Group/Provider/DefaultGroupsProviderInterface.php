<?php

namespace PrestaShop\PrestaShop\Core\Group\Provider;

/**
 * Interface for service that retrieves default customer group options
 */
interface DefaultGroupsProviderInterface
{
    /**
     * @return DefaultGroups
     */
    public function getGroups();
}
