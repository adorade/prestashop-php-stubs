<?php

namespace PrestaShopBundle\EventListener;

/**
 * @todo Extract logic outside of EventSubscriber
 */
class ActionDispatcherLegacyHooksSubscriber implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    public const DISPATCHER_BEFORE_ACTION = 'actionDispatcherBefore';
    public const DISPATCHER_AFTER_ACTION = 'actionDispatcherAfter';
    /**
     * List of available front controllers types.
     */
    public const FRONT_OFFICE_CONTROLLER = 1;
    public const BACK_OFFICE_CONTROLLER = 2;
    public const MODULE_CONTROLLER = 3;
    public const NA_CONTROLLER = 0;
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher)
    {
    }
    public static function getSubscribedEvents()
    {
    }
    public function callActionDispatcherBeforeHook(\Symfony\Component\HttpKernel\Event\FilterControllerEvent $event)
    {
    }
    public function callActionDispatcherAfterHook(\Symfony\Component\HttpKernel\Event\FilterResponseEvent $event)
    {
    }
}
