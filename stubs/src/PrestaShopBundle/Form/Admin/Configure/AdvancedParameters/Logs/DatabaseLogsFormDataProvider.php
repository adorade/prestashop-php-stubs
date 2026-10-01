<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Logs;

/**
 * This class is responsible of managing the data manipulated using database form
 * in "Configure > Advanced Parameters > Logs" page.
 */
final class DatabaseLogsFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Configuration\DatabaseLogsConfiguration $databaseLogsConfiguration)
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
