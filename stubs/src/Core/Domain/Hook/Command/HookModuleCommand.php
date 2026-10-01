<?php

namespace PrestaShop\PrestaShop\Core\Domain\Hook\Command;

/**
 * Hooks a module to a hook, with optional exception pages.
 */
class HookModuleCommand
{
    /**
     * @param int $moduleId
     * @param int $hookId
     * @param array $exceptions Filenames of pages where the module must NOT be displayed
     */
    public function __construct(int $moduleId, int $hookId, array $exceptions = [])
    {
    }
    public function getModuleId(): int
    {
    }
    public function getHookId(): \PrestaShop\PrestaShop\Core\Domain\Hook\ValueObject\HookId
    {
    }
    /**
     * @return string[]
     */
    public function getExceptions(): array
    {
    }
}
