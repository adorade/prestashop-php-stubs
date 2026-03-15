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
     * @return LegacyContainerBuilder
     *
     * @throws Exception
     */
    public static function getContainer($containerName, $isDebug)
    {
    }
    /**
     * @param EnvironmentInterface $environment
     */
    public function __construct(\PrestaShop\PrestaShop\Core\EnvironmentInterface $environment)
    {
    }
    /**
     * @param string $containerName
     *
     * @return ContainerInterface|LegacyContainerBuilder
     *
     * @throws Exception
     */
    public function buildContainer($containerName)
    {
    }
}
