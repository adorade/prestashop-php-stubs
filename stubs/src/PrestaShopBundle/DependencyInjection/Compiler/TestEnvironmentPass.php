<?php

namespace PrestaShopBundle\DependencyInjection\Compiler;

/**
 * Used to configure services specifically for the test environment.
 */
class TestEnvironmentPass implements \Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
    }
}
