<?php

namespace PrestaShopBundle\DependencyInjection\Compiler;

/**
 * Load services stored in installed modules.
 */
class ModulesDoctrineCompilerPass implements \Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
    }
}
