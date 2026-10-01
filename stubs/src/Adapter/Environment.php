<?php

namespace PrestaShop\PrestaShop\Adapter;

/**
 * Class Environment is used to store/access environment information like the current
 * environment name or to know if debug mode is enabled. It can be built via
 * dependency injection but it also manages default fallback based on legacy PrestaShop
 * const.
 */
class Environment implements \PrestaShop\PrestaShop\Core\EnvironmentInterface
{
    public function __construct(?bool $isDebug = null, ?string $name = null, ?string $appId = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function isDebug()
    {
    }
    public function getAppId(): string
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getCacheDir()
    {
    }
}
