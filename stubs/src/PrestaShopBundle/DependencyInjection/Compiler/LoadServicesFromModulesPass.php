<?php

namespace PrestaShopBundle\DependencyInjection\Compiler;

/**
 * Load services stored in installed modules.
 */
class LoadServicesFromModulesPass implements \Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * Used to identify which scope of services need to be loaded (front services, admin
     * services or generic ones)
     *
     * @param string $containerName
     */
    public function __construct($containerName = '')
    {
    }
    /**
     * {@inheritdoc}
     */
    public function process(\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
    }
}
