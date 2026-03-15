<?php

namespace PrestaShopBundle;

class PrestaShopBundle extends \Symfony\Component\HttpKernel\Bundle\Bundle
{
    /**
     * The priority of @see LoadServicesFromModulesPass should be higher
     * than the Symfony's @see ResolveClassPass
     * and @see ResolveInstanceofConditionalsPass
     *
     * @see PassConfig::__construct
     * @see https://github.com/PrestaShop/PrestaShop/pull/30588 for details
     */
    public const LOAD_MODULE_SERVICES_PASS_PRIORITY = 200;
    /**
     * {@inheritdoc}
     */
    public function getContainerExtension()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function build(\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
    }
}
