<?php

class LegacyCompilerPass implements \Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * Add legacy services that need to be built using Context::getContext().
     *
     * @param ContainerBuilder $container
     */
    public function process(\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
    }
}
