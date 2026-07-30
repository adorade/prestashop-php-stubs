<?php

namespace PrestaShopBundle\DependencyInjection\Compiler;

/**
 * Sets dynamic role hierarchy in the voter.
 */
class DynamicRolePass implements \Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
    }
}
