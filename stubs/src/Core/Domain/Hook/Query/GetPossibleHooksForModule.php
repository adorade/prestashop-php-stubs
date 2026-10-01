<?php

namespace PrestaShop\PrestaShop\Core\Domain\Hook\Query;

/**
 * Returns the list of hooks a given module can be hooked to.
 * Used to populate the hook selector in the "Hook a module" form.
 */
class GetPossibleHooksForModule
{
    public function __construct(int $moduleId)
    {
    }
    public function getModuleId(): int
    {
    }
}
