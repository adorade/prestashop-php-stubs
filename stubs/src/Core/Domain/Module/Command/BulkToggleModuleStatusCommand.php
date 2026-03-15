<?php

namespace PrestaShop\PrestaShop\Core\Domain\Module\Command;

/**
 * Bulk toggles module status
 */
class BulkToggleModuleStatusCommand
{
    /**
     * @param array<string> $modules Array of technical names for modules
     * @param bool $expectedStatus
     */
    public function __construct(array $modules, bool $expectedStatus)
    {
    }
    /**
     * @return array<string>
     */
    public function getModules(): array
    {
    }
    /**
     * @return bool
     */
    public function getExpectedStatus(): bool
    {
    }
}
