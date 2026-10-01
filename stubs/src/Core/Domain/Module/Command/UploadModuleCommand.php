<?php

namespace PrestaShop\PrestaShop\Core\Domain\Module\Command;

/**
 * Upload module
 */
class UploadModuleCommand
{
    /**
     * @param string $source Source for module
     */
    public function __construct(private readonly string $source)
    {
    }
    public function getSource(): string
    {
    }
}
