<?php

namespace PrestaShop\PrestaShop\Core\Module\DataProvider;

/**
 * Interface TabModuleListProviderInterface defines contract for tab module provider.
 */
interface TabModuleListProviderInterface
{
    /**
     * Get tab modules.
     *
     * @param string $tabClassName
     *
     * @return array
     */
    public function getTabModules($tabClassName);
}
