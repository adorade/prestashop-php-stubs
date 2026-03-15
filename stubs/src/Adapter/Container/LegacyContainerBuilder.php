<?php

namespace PrestaShop\PrestaShop\Adapter\Container;

/**
 * This class is only used when we build containers for legacy environment. It
 * is used as a base builder when we build the container in our ContainerBuilder.
 *
 * It is needed during the first generation of the container as it is used as a container
 * during this process, next calls usually use the built container class that extends LegacyContainer.
 *
 * It implements LegacyContainerInterface which allows to detect if the container
 * was built by Symfony or by PrestaShop.
 */
class LegacyContainerBuilder extends \Symfony\Component\DependencyInjection\ContainerBuilder implements \PrestaShop\PrestaShop\Adapter\Container\LegacyContainerInterface
{
}
