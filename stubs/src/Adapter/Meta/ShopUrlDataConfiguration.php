<?php

namespace PrestaShop\PrestaShop\Adapter\Meta;

/**
 * Class ShopUrlDataConfiguration is responsible for updating and getting data from shop_url table.
 */
final class ShopUrlDataConfiguration implements \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface
{
    /**
     * ShopUrlDataConfiguration constructor.
     *
     * @param ShopUrl $mainShopUrl
     * @param ConfigurationInterface $configuration
     */
    public function __construct(\ShopUrl $mainShopUrl, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, \PrestaShop\PrestaShop\Adapter\File\HtaccessFileGenerator $htaccessFileGenerator)
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
}
