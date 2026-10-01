<?php

namespace PrestaShopBundle\DependencyInjection\Compiler;

/**
 * This class is responsible for retrieving controllers in the modules that inherit from FrameworkBundleAdminController
 * and declare them as services, also adding the autoconfigure and autowire tags.
 *
 * This modification is necessary to initialize the globalContainer and thus be able to retrieve all services
 * via the $this->get function in the modules.
 */
class ModuleControllerRegisterPass implements \Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\Symfony\Component\DependencyInjection\ContainerBuilder $container): void
    {
    }
}
