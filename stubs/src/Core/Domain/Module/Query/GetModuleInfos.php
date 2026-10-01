<?php

namespace PrestaShop\PrestaShop\Core\Domain\Module\Query;

/**
 * Get module information
 */
class GetModuleInfos
{
    protected \PrestaShop\PrestaShop\Core\Domain\Module\ValueObject\ModuleTechnicalName $technicalName;
    public function __construct(string $technicalName)
    {
    }
    public function getTechnicalName(): \PrestaShop\PrestaShop\Core\Domain\Module\ValueObject\ModuleTechnicalName
    {
    }
}
