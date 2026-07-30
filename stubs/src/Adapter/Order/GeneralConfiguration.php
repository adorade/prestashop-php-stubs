<?php

namespace PrestaShop\PrestaShop\Adapter\Order;

/**
 * General Settings configuration available in ShopParameters > Order Preferences.
 */
class GeneralConfiguration extends \PrestaShop\PrestaShop\Core\Configuration\AbstractMultistoreConfiguration
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
