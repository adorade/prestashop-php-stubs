<?php

namespace PrestaShopBundle\Form\Admin\Improve\International\Locations;

/**
 * Bridges the "Country options" form data with the underlying configuration handler.
 */
class CountryOptionsFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface $dataConfiguration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setData(array $data)
    {
    }
}
