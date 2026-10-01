<?php

namespace PrestaShop\PrestaShop\Core\Domain\Module\Command;

class UpdateModuleStatusCommand
{
    protected \PrestaShop\PrestaShop\Core\Domain\Module\ValueObject\ModuleTechnicalName $technicalName;
    public function __construct(string $technicalName, protected bool $enabled)
    {
    }
    public function getTechnicalName(): \PrestaShop\PrestaShop\Core\Domain\Module\ValueObject\ModuleTechnicalName
    {
    }
    public function isEnabled(): bool
    {
    }
}
