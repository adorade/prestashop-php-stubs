<?php

namespace PrestaShop\PrestaShop\Adapter\Carrier;

/**
 * Class CarrierOptionsConfiguration is responsible for saving and loading Carrier Options configuration.
 */
class CarrierOptionsConfiguration extends \PrestaShop\PrestaShop\Core\Configuration\AbstractMultistoreConfiguration
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
