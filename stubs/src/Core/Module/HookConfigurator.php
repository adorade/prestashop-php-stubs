<?php

namespace PrestaShop\PrestaShop\Core\Module;

class HookConfigurator
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Module\HookRepository $hookRepository, private readonly ?\Psr\Log\LoggerInterface $logger = null, private readonly ?\PrestaShop\PrestaShop\Core\Module\ModuleManager $moduleManager = null)
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
    public function unhookModules(array $removedHooks): self
    {
    }
}
