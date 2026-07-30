<?php

namespace PrestaShop\PrestaShop\Core\Hook;

/**
 * Interface HookDispatcherInterface defines contract for hook dispatcher
 * Extends EventDispatcherInterface for compatibility with the Event Dispatcher component.
 */
interface HookDispatcherInterface extends \Symfony\Component\EventDispatcher\EventDispatcherInterface
{
    /**
     * Dispatch given hook.
     *
     * @param HookInterface $hook
     */
    public function dispatchHook(\PrestaShop\PrestaShop\Core\Hook\HookInterface $hook);
    /**
     * Dispatch hook with raw parameters.
     *
     * @param string $hookName
     * @param array $hookParameters
     */
    public function dispatchWithParameters($hookName, array $hookParameters = []);
    /**
     * Dispatch rendering hook.
     *
     * @param HookInterface $hook
     *
     * @return RenderedHookInterface
     */
    public function dispatchRendering(\PrestaShop\PrestaShop\Core\Hook\HookInterface $hook);
    /**
     * Dispatch rendering hook with parameters.
     *
     * @param string $hookName
     * @param array $hookParameters
     *
     * @return RenderedHookInterface
     */
    public function dispatchRenderingWithParameters($hookName, array $hookParameters = []);
}
