<?php

namespace PrestaShopBundle\Service\Multistore;

class CustomizedConfigurationChecker
{
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface $configuration)
    {
    }
    /**
     * Tests if a configuration value is overriden for a given shop, not only on the shop itself
     * but also on parent shop group: when a shop inherits an overridden configuration value from his shop group
     * the value is considered to be customized for this shop
     *
     * @param string $configurationKey
     * @param Shop $shop
     * @param bool $isGroupShopContext
     *
     * @return bool
     */
    public function isConfigurationCustomizedForThisShop(string $configurationKey, \PrestaShopBundle\Entity\Shop $shop, bool $isGroupShopContext): bool
    {
    }
}
