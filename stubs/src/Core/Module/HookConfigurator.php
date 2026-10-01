<?php

namespace PrestaShop\PrestaShop\Core\Module;

class HookConfigurator
{
    public function __construct(\PrestaShop\PrestaShop\Core\Module\HookRepository $hookRepository)
    {
    }
    /**
     * $hooks is a hook configuration description
     * as found in theme.yml,
     * it has a format like:
     * [
     *     "someHookName" => [
     *        null,
     *        "blockstuff",
     *        "othermodule"
     *     ],
     *     "someOtherHookName" => [
     *         null,
     *         "blockmenu" => [
     *             "except_pages" => ["category", "product"]
     *         ]
     *     ]
     * ].
     */
    public function getThemeHooksConfiguration(array $hooks)
    {
    }
    public function setHooksConfiguration(array $hooks)
    {
    }
    public function addHook($name, $title, $description)
    {
    }
}
