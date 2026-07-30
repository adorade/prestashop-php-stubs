<?php

namespace PrestaShop\PrestaShop\Core\Module;

class ModuleOverrideChecker
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, string $psOverrideDir)
    {
    }
    public function hasOverrideConflict(string $moduleOverridePath): bool
    {
    }
    public function getErrors(): array
    {
    }
}
