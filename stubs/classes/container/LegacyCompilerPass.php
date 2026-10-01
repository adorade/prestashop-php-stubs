<?php

class LegacyCompilerPass implements \Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * Add legacy services that need to be built using Context::getContext().
     *
     * @param \Symfony\Component\DependencyInjection\ContainerBuilder $container
     */
    public function process(\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
    }
}
