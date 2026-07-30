<?php

namespace PrestaShopBundle\Bridge\Smarty;

/**
 * Define contract for configurator.
 */
interface ConfiguratorInterface
{
    /**
     * @param ControllerConfiguration $controllerConfiguration
     *
     * @return void
     */
    public function configure(\PrestaShopBundle\Bridge\AdminController\ControllerConfiguration $controllerConfiguration);
}
