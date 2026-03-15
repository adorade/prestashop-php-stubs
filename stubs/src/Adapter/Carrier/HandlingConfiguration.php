<?php

namespace PrestaShop\PrestaShop\Adapter\Carrier;

/**
 * Class HandlingConfiguration is responsible for saving and loading Handling options configuration.
 */
class HandlingConfiguration extends \PrestaShop\PrestaShop\Core\Configuration\AbstractMultistoreConfiguration
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
