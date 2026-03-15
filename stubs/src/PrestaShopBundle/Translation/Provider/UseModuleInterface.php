<?php

namespace PrestaShopBundle\Translation\Provider;

/**
 * Defines that this provider may need information from module.
 */
interface UseModuleInterface
{
    /**
     * Set the module name
     *
     * @param string $moduleName the name of the module
     *
     * @throws UnsupportedModuleException if the module is not supported or invalid
     */
    public function setModuleName($moduleName);
}
