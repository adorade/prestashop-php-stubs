<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\AdminAPI;

class FormDataProvider implements \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface
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
