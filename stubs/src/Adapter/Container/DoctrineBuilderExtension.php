<?php

namespace PrestaShop\PrestaShop\Adapter\Container;

/**
 * Class DoctrineBuilderExtension is used to init the doctrine service in the ContainerBuilder.
 * This is a manual initialisation of Doctrine because we are not in a symfony context, so we need
 * add the extension manually (required parameters are managed by ContainerParametersExtension).
 *
 * Note: this can't be done as a CompilerPassInterface because extensions need to be registered before compilation.
 */
class DoctrineBuilderExtension implements \PrestaShop\PrestaShop\Adapter\Container\ContainerBuilderExtensionInterface
{
    /**
     * @param EnvironmentInterface $environment
     */
    public function __construct(\PrestaShop\PrestaShop\Core\EnvironmentInterface $environment)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function build(\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
    }
}
