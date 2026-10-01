<?php

namespace PrestaShopBundle\DependencyInjection\Compiler;

/**
 * Security Compiler pass: removed app{env}{..}.xml files from cache.
 */
class RemoveXmlCompiledContainerPass implements \Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
    }
}
