<?php

namespace PrestaShopBundle\DependencyInjection\Compiler;

/**
 * As explained in https://github.com/symfony/symfony/issues/36567,
 * Controllers lose the ControllerAwareTrait capabilities when they are decorated.
 *
 * This pass injects the container into PrestaShop tagged controllers to overcome this issue.
 */
class ContainerInjectionPass implements \Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
    }
}
