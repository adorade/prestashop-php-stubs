<?php

namespace PrestaShop\PrestaShop\Adapter\Customer;

/**
 * Class CustomerConfiguration is responsible for saving & loading customer configuration.
 */
class CustomerConfiguration extends \PrestaShop\PrestaShop\Core\Configuration\AbstractMultistoreConfiguration
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
    public function updateConfiguration(array $config)
    {
    }
    /**
     * @return OptionsResolver
     */
    protected function buildResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
    }
}
