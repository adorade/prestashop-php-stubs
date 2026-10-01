<?php

namespace PrestaShop\PrestaShop\Core\Domain\Module\Command;

/**
 * Upgrade module
 */
class UpgradeModuleCommand
{
    /**
     * @param string $technicalName Technical name for module
     */
    public function __construct(string $technicalName)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Module\ValueObject\ModuleTechnicalName
     */
    public function getTechnicalName(): \PrestaShop\PrestaShop\Core\Domain\Module\ValueObject\ModuleTechnicalName
    {
    }
}
