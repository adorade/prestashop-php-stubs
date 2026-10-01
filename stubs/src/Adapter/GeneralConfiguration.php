<?php

namespace PrestaShop\PrestaShop\Adapter;

/**
 * Manages the configuration data about general options.
 */
class GeneralConfiguration implements \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Configuration $configuration, private readonly \Cookie $cookie, private readonly \PrestaShop\PrestaShop\Adapter\Cache\Clearer\SymfonyCacheClearer $symfonyCacheClearer)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getConfiguration()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function updateConfiguration(array $configuration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function validateConfiguration(array $configuration)
    {
    }
    /**
     * Validate SameSite.
     * The SameSite=None is only working when Secure is settled
     *
     * @param string $sameSite
     *
     * @return bool
     */
    protected function validateSameSite(string $sameSite): bool
    {
    }
}
