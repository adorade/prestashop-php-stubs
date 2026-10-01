<?php

namespace PrestaShop\PrestaShop\Adapter\Hook;

/**
 * Give information about the hooks.
 */
class HookInformationProvider
{
    /**
     * @param string $hookName
     *
     * @return bool
     */
    public function isDisplayHookName($hookName)
    {
    }
    /**
     * Return Hooks List.
     *
     * @param bool $position Where position is active
     * @param bool $onlyDisplayHooks Only hook with display hook name
     *
     * @return array Hooks List
     */
    public function getHooks($position = false, $onlyDisplayHooks = false)
    {
    }
    /**
     * Return Hooks list.
     *
     * @param int $hookId Hook id
     * @param int $moduleId Module id
     *
     * @return array Modules list
     */
    public function getModulesFromHook($hookId, $moduleId = null)
    {
    }
    /**
     * @param string $hookName
     *
     * @return array
     */
    public function getRegisteredModulesByHookName(string $hookName): array
    {
    }
}
