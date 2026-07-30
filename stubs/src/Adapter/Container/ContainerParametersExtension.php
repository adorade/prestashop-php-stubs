<?php

namespace PrestaShop\PrestaShop\Adapter\Container;

/**
 * This container extension is in charge of initializing the container parameters.
 * It uses the same type of init as the kernel container thanks to the set_parameters.php
 * script which allows it to be as close as possible to the symfony kernel AND the script
 * automatically manage env test switching.
 *
 * We also add a few default parameters which are expected by doctrine and some of our
 * compiler pass which need the list of active modules.
 *
 * Note: this can't be done as a CompilerPassInterface because parameters need to be set before extensions
 * are registered (especially Doctrine extension).
 */
class ContainerParametersExtension implements \PrestaShop\PrestaShop\Adapter\Container\ContainerBuilderExtensionInterface
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
