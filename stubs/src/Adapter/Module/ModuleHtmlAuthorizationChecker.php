<?php

namespace PrestaShop\PrestaShop\Adapter\Module;

final class ModuleHtmlAuthorizationChecker
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Module\Module $moduleAdapter, private readonly \PrestaShop\PrestaShop\Core\Module\ModuleManagerInterface $moduleManager)
    {
    }
    public function isModuleHtmlAllowed(int $moduleId): bool
    {
    }
}
