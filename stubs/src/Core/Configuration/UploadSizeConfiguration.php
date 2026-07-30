<?php

namespace PrestaShop\PrestaShop\Core\Configuration;

class UploadSizeConfiguration implements \PrestaShop\PrestaShop\Core\Configuration\UploadSizeConfigurationInterface
{
    /**
     * @param IniConfiguration $iniConfiguration
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Configuration\IniConfiguration $iniConfiguration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getMaxUploadSizeInBytes(): int
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getPostMaxSizeInBytes(): int
    {
    }
}
