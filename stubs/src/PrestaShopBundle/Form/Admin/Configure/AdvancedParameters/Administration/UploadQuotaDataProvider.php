<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Administration;

/**
 * This class is responsible of managing the data manipulated using Upload Quota form
 * in "Configure > Advanced Parameters > Administration" page.
 */
final class UploadQuotaDataProvider implements \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface
{
    public function __construct(\PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface $dataConfiguration, \PrestaShop\PrestaShop\Core\Configuration\UploadSizeConfigurationInterface $uploadSizeConfiguration)
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
