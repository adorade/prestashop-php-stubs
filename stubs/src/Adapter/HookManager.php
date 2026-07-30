<?php

namespace PrestaShop\PrestaShop\Adapter;

/**
 * Bridge to execute hooks in modern pages.
 */
class HookManager
{
    /**
     * Execute modules for specified hook.
     *
     * @param string $hook_name Hook Name
     * @param array $hook_args Parameters for the functions
     * @param int $id_module Execute hook for this module only
     * @param bool $array_return If specified, module output will be set by name in an array
     * @param bool $check_exceptions Check permission exceptions
     * @param bool $use_push Force change to be refreshed on Dashboard widgets
     * @param int $id_shop If specified, hook will be execute the shop with this ID
     *
     * @throws CoreException
     *
     * @return string|array|void|null modules output
     */
    public function exec($hook_name, $hook_args = [], $id_module = null, $array_return = false, $check_exceptions = true, $use_push = false, $id_shop = null)
    {
    }
    public function disableHooksForModule(int $moduleId): void
    {
    }
}
