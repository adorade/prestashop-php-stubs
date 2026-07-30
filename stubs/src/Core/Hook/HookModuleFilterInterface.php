<?php

namespace PrestaShop\PrestaShop\Core\Hook;

/**
 * This interface must be implemented by all services that will be used by the HookModuleFilter service.
 * See HookModuleFilter.php for more explanations.
 */
interface HookModuleFilterInterface
{
    public function filterHookModuleExecList(array $modules, string $hookName): array;
}
