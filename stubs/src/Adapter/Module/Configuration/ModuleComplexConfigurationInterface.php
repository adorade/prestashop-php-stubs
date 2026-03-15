<?php

namespace PrestaShop\PrestaShop\Adapter\Module\Configuration;

/**
 * @todo: document what is the contract of this interface.
 */
interface ModuleComplexConfigurationInterface
{
    /**
     * @param ModuleInterface $module
     * @param array $params
     *
     * @return mixed
     */
    public function run(\PrestaShop\PrestaShop\Core\Module\ModuleInterface $module, array $params);
}
