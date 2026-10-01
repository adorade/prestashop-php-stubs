<?php

namespace PrestaShopBundle\DataCollector;

/**
 * Class ConfigDataCollector.
 * This class is used to collect some data for the WebProfiler.
 */
class ConfigDataCollector extends \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector
{
    public function __construct(private readonly string $name, private readonly \PrestaShop\PrestaShop\Core\Foundation\Version $version)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function collect(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\HttpFoundation\Response $response, ?\Throwable $exception = null): void
    {
    }
    /**
     * Get the application name.
     */
    public function getApplicationName(): string
    {
    }
    /**
     * Get the application version.
     */
    public function getApplicationVersion(): string
    {
    }
}
