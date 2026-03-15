<?php

namespace PrestaShop\PrestaShop\Core\Hook;

/**
 * This service is responsible for filtering the list of modules for a given hook that is returned by
 * the getHookModuleExecList method from Hook.php. It is called at the very end of getHookModuleExecList.
 *
 * How to use it to filter a list of modules for a hook:
 *
 * In your module, create a service which implements the HookModuleFilterInterface and give it
 * the tag named core.hook_module_exec_filter. Then in your service, you can filter the list of modules
 * in the filterHookModuleExecList method, according to your own logic.
 *
 * Your service will automatically be sent in this class's constructor, and be used to filter the list of modules.
 */
class HookModuleFilter implements \PrestaShop\PrestaShop\Core\Hook\HookModuleFilterInterface
{
    public function __construct(iterable $hookModuleFilters)
    {
    }
    public function filterHookModuleExecList(array $modules, string $hookName): array
    {
    }
}
