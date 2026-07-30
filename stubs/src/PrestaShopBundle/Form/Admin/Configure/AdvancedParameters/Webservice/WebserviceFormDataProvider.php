<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Webservice;

/**
 * This class is responsible of managing the data manipulated using forms
 * in "Configure > Advanced Parameters > Webservice" page.
 */
final class WebserviceFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface
{
    /**
     * @param WebserviceConfiguration $webserviceConfiguration
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Webservice\WebserviceConfiguration $webserviceConfiguration)
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
