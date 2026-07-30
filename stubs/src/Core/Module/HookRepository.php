<?php

namespace PrestaShop\PrestaShop\Core\Module;

class HookRepository
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Hook\HookInformationProvider $hookInfo, \Shop $shop, \Db $db)
    {
    }
    public function getIdByName($hook_name)
    {
    }
    /**
     * Creates a new hook if not already existing and returns the hook id.
     *
     * @param string $hook_name The name of the hook
     * @param string $title The title for the hook
     * @param string $description The description for the hook
     * @param int $position if the modules in the hook can be positioned
     *
     * @return int Hook ID
     */
    public function createHook($hook_name, $title = '', $description = '', $position = 1)
    {
    }
    public function unHookModulesFromHook($hook_name)
    {
    }
    /**
     * Saves hook settings for a list of hooks.
     * The $hooks array should have this format:
     * [
     *     "hookName" => [
     *         "module1",
     *         "module2",
     *         "module3" => [
     *             "except_pages" => [
     *                 "page1",
     *                 "page2",
     *                 "page3"
     *             ]
     *         ]
     *     ]
     * ]
     * Only hooks present as keys in the $hooks array are affected and all changes
     * are only done for the shop this Repository belongs to.
     */
    public function persistHooksConfiguration(array $hooks)
    {
    }
    public function getHooksWithModules()
    {
    }
    public function getDisplayHooksWithModules()
    {
    }
}
