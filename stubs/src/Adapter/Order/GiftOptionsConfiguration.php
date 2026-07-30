<?php

namespace PrestaShop\PrestaShop\Adapter\Order;

/**
 * Gift Settings configuration available in ShopParameters > Order Preferences.
 */
class GiftOptionsConfiguration extends \PrestaShop\PrestaShop\Core\Configuration\AbstractMultistoreConfiguration
{
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
     * @return OptionsResolver
     */
    protected function buildResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
    }
}
