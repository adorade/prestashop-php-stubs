<?php

namespace PrestaShop\PrestaShop\Core\Domain\Module\Command;

class ResetModuleCommand
{
    protected \PrestaShop\PrestaShop\Core\Domain\Module\ValueObject\ModuleTechnicalName $technicalName;
    public function __construct(string $technicalName, protected bool $keepData = true)
    {
    }
    public function getTechnicalName(): \PrestaShop\PrestaShop\Core\Domain\Module\ValueObject\ModuleTechnicalName
    {
    }
    public function keepData(): bool
    {
    }
}
