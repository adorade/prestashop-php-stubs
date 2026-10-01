<?php

namespace PrestaShop\PrestaShop\Core\Domain\Module\Command;

/**
 * Bulk uninstall module
 */
class BulkUninstallModuleCommand
{
    /**
     * @param array<string> $modules Array of technical names for modules
     * @param bool $deleteFiles Boolean for delete modules files
     */
    public function __construct(array $modules, private readonly bool $deleteFiles = false)
    {
    }
    /**
     * @return array<\PrestaShop\PrestaShop\Core\Domain\Module\ValueObject\ModuleTechnicalName>
     */
    public function getModules(): array
    {
    }
    public function deleteFiles(): bool
    {
    }
}
