<?php

namespace PrestaShop\PrestaShop\Adapter\Country;

/**
 * Loads and saves the "Options" block configuration of the Countries page
 * (Improve > International > Locations > Countries).
 */
class CountryOptionsConfiguration extends \PrestaShop\PrestaShop\Core\Configuration\AbstractMultistoreConfiguration
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
     * {@inheritdoc}
     */
    protected function buildResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
    }
}
