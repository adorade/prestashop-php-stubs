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
    public function __construct(private \AppKernel $kernel)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getContainerExtension(): ?\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
    }
    /**
     * {@inheritdoc}
     */
    public function build(\Symfony\Component\DependencyInjection\ContainerBuilder $container): void
    {
    }
}
