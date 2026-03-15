<?php

namespace PrestaShopBundle\Form\Admin\Configure\ShopParameters\General;

/**
 * This class is responsible of managing the data manipulated using forms
 * in "Configure > Shop Parameters > General" page.
 */
final class PreferencesFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Preferences\PreferencesConfiguration $preferencesConfiguration)
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
