<?php

namespace PrestaShopBundle\Kernel;

/**
 * Before booting the PrestaShop application in Symfony context,
 * we register every installed modules.
 *
 * @deprecated Since 1.7.8. Use \PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository instead
 */
final class ModuleRepository
{
    public function __construct(\Doctrine\DBAL\Connection $connection, $databasePrefix)
    {
    }
    /**
     * @return array the list of installed modules
     */
    public function getActiveModules()
    {
    }
    /**
     * Returns installed module file paths.
     *
     * @return array
     */
    public function getActiveModulesPaths()
    {
    }
}
