<?php

namespace PrestaShop\PrestaShop\Core\Domain\Module\Command;

/**
 * Uninstall module
 */
class UninstallModuleCommand
{
    /**
     * @param string $technicalName Array of technical names for modules
     * @param bool $deleteFiles Boolean for delete module files
     */
    public function __construct(string $technicalName, private readonly bool $deleteFiles = false)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Module\ValueObject\ModuleTechnicalName
     */
    public function getTechnicalName(): \PrestaShop\PrestaShop\Core\Domain\Module\ValueObject\ModuleTechnicalName
    {
    }
    /**
     * @return bool
     */
    public function deleteFiles(): bool
    {
    }
}
