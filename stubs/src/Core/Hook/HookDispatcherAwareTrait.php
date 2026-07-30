<?php

namespace PrestaShop\PrestaShop\Core\Hook;

/**
 * Trait EventDispatcherAwareTrait.
 *
 * @deprecated
 */
trait HookDispatcherAwareTrait
{
    /**
     * @var HookDispatcherInterface
     */
    protected $hookDispatcher;
    /**
     * Set hook dispatcher.
     *
     * @param HookDispatcherInterface $hookDispatcher
     */
    public function setHookDispatcher(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher)
    {
    }
}
