<?php

namespace PrestaShop\PrestaShop\Core\Configuration;

interface UploadSizeConfigurationInterface
{
    /**
     * @return int
     */
    public function getMaxUploadSizeInBytes(): int;
    /**
     * @return int
     */
    public function getPostMaxSizeInBytes(): int;
}
