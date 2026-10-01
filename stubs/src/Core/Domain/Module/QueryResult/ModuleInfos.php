<?php

namespace PrestaShop\PrestaShop\Core\Domain\Module\QueryResult;

class ModuleInfos
{
    public function __construct(private readonly ?int $moduleId, private readonly string $technicalName, private readonly string $moduleVersion, private readonly ?string $installedVersion, private readonly bool $enabled, private readonly bool $installed)
    {
    }
    public function getModuleId(): ?int
    {
    }
    public function getTechnicalName(): string
    {
    }
    public function getModuleVersion(): string
    {
    }
    public function getInstalledVersion(): ?string
    {
    }
    public function isEnabled(): bool
    {
    }
    public function isInstalled(): bool
    {
    }
}
