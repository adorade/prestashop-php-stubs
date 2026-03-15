<?php

namespace PrestaShop\PrestaShop\Adapter\Container;

/**
 * This class is only used when we build containers for legacy environment. It
 * is used as a base class when dumping the container in our ContainerBuilder.
 *
 * It implements LegacyContainerInterface which allows to detect if the container
 * was built by Symfony or by PrestaShop.
 */
class LegacyContainer extends \Symfony\Component\DependencyInjection\Container implements \PrestaShop\PrestaShop\Adapter\Container\LegacyContainerInterface
{
}
