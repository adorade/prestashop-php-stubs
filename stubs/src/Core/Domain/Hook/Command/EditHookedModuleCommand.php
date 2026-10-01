<?php

namespace PrestaShop\PrestaShop\Core\Domain\Hook\Command;

/**
 * Edits an existing module-hook registration: moves to a new hook and/or updates exception pages.
 */
class EditHookedModuleCommand
{
    /**
     * @param int $moduleId
     * @param int $hookId Current hook the module is registered on
     * @param int $newHookId Target hook (may be the same as $hookId to update exceptions only)
     * @param array $exceptions Filenames of pages where the module must NOT be displayed
     */
    public function __construct(int $moduleId, int $hookId, int $newHookId, array $exceptions = [])
    {
    }
    public function getModuleId(): int
    {
    }
    public function getHookId(): \PrestaShop\PrestaShop\Core\Domain\Hook\ValueObject\HookId
    {
    }
    public function getNewHookId(): \PrestaShop\PrestaShop\Core\Domain\Hook\ValueObject\HookId
    {
    }
    /**
     * @return string[]
     */
    public function getExceptions(): array
    {
    }
}
