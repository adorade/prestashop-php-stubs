<?php

namespace PrestaShop\PrestaShop\Adapter\AdminAPI;

class AdminAPIConfiguration implements \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Configuration $configuration, private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator, private readonly \PrestaShop\PrestaShop\Adapter\Cache\Clearer\SymfonyCacheClearer $cacheClearer)
    {
    }
    public function getConfiguration()
    {
    }
    public function updateConfiguration(array $configuration)
    {
    }
    public function validateConfiguration(array $configuration)
    {
    }
}
