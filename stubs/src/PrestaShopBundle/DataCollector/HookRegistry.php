<?php

namespace PrestaShopBundle\DataCollector;

/**
 * Collect all hooks information dispatched during a request.
 */
final class HookRegistry
{
    public const HOOK_NOT_CALLED = 'notCalled';
    public const HOOK_NOT_REGISTERED = 'notRegistered';
    public const HOOK_CALLED = 'called';
    public function __construct()
    {
    }
    /**
     * @param string $hookName
     * @param array $hookArguments
     * @param string $file filepath where the "Hook::exec" call have been done
     * @param int $line position in file where the "Hook::exec" call have been done
     */
    public function selectHook($hookName, $hookArguments, $file, $line)
    {
    }
    /**
     * Notify the registry that the selected hook have been called.
     */
    public function hookWasCalled()
    {
    }
    /**
     * Notify the registry that the selected hook have been called.
     */
    public function hookWasNotRegistered()
    {
    }
    /**
     * @param ModuleCore $module
     */
    public function hookedByModule(\PrestaShop\PrestaShop\Core\Module\Legacy\ModuleInterface $module)
    {
    }
    /**
     * A callback have been executed by the module during the Hook dispatch.
     *
     * @param ModuleCore $module
     * @param array $args All arguments passed to the Module callback
     */
    public function hookedByCallback(\PrestaShop\PrestaShop\Core\Module\Legacy\ModuleInterface $module, $args)
    {
    }
    /**
     * A widget have been rendered by the module during the Hook dispatch.
     *
     * @param ModuleCore $module
     * @param array $args All arguments passed to the Module callback
     */
    public function hookedByWidget(\PrestaShop\PrestaShop\Core\Module\Legacy\ModuleInterface $module, $args)
    {
    }
    /**
     * @return array the list of called hooks
     */
    public function getCalledHooks()
    {
    }
    /**
     * @return array the list of uncalled hooks
     */
    public function getNotCalledHooks()
    {
    }
    /**
     * @return array the list of unregistered hooks
     */
    public function getNotRegisteredHooks()
    {
    }
    /**
     * @return array the list of dispatched hooks
     */
    public function getHooks()
    {
    }
    /**
     * Persist the selected hook into the list.
     *
     * Theses hooks will be used by the HookDataCollector
     */
    public function collect()
    {
    }
}
