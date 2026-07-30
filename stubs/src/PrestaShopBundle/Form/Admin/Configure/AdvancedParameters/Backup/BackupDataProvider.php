<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Backup;

/**
 * Class BackupDataProvider provides backup options form data.
 */
final class BackupDataProvider implements \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface
{
    /**
     * @param DataConfigurationInterface $backupOptionsConfigurator
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface $backupOptionsConfigurator)
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
