<?php

namespace PrestaShop\PrestaShop\Adapter\Module;

/**
 * Responsible of managing updates of modules. This class is currently used only by autoupgrade module.
 * Core has it's own solution in PrestaShop\PrestaShop\Core\Module\ModuleManager.
 * In the future, autoupgrade module upgrade process should be unified with the core, so we can remove
 * this duplicate code.
 */
class ModuleDataUpdater
{
    /**
     * @param string $name
     *
     * @return bool
     */
    public function removeModuleFromDisk($name)
    {
    }
    /**
     * @param string $name
     *
     * @return bool
     */
    public function upgrade($name)
    {
    }
}
