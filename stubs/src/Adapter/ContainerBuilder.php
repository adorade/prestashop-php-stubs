<?php

namespace PrestaShop\PrestaShop\Adapter;

/**
 * Build the Container for PrestaShop Legacy.
 */
class ContainerBuilder
{
    /**
     * @param string $containerName
     * @param bool $isDebug
     *
     * @return \PrestaShop\PrestaShop\Adapter\Container\LegacyContainerBuilder
     *
     * @throws \Exception
     */
    public static function getContainer($containerName, $isDebug)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\EnvironmentInterface $environment
     */
    public function __construct(\PrestaShop\PrestaShop\Core\EnvironmentInterface $environment)
    {
    }
    /**
     * @param string $containerName
     *
     * @return \Symfony\Component\DependencyInjection\ContainerInterface|\PrestaShop\PrestaShop\Adapter\Container\LegacyContainerBuilder
     *
     * @throws \Exception
     */
    public function buildContainer($containerName)
    {
    }
}
