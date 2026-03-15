<?php

namespace PrestaShopBundle\Bridge\Smarty;

/**
 * This class hydrates modals information needed for legacy modals.
 */
class ModalConfigurator implements \PrestaShopBundle\Bridge\Smarty\ConfiguratorInterface
{
    /**
     * @param ControllerConfiguration $controllerConfiguration
     *
     * @return void
     */
    public function configure(\PrestaShopBundle\Bridge\AdminController\ControllerConfiguration $controllerConfiguration): void
    {
    }
}
