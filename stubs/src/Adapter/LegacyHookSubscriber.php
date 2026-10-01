<?php

namespace PrestaShop\PrestaShop\Adapter;

/**
 * The subscriber for HookDispatcher that triggers legacy Hooks.
 *
 * This subscriber is registered into the HookDispatcher service via services.yml.
 * The legacy hooks are registered one by one in the dispatcher, but each corresponding
 * function is a magic method catched by __call().
 * This ensure the listeners' count is real.
 */
class LegacyHookSubscriber implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    /**
     * Returns an array of event names this subscriber wants to listen to.
     *
     * The array keys are event names and the value are a function name
     * that will be solved by magic __call(). The function contains data to extract: hookId, moduleId
     *
     * TODO: add cache layer on $listeners
     *
     * @return array The listeners array
     */
    public static function getSubscribedEvents()
    {
    }
    /**
     * This will handle magic methods registered as listeners.
     *
     * These methods are built with the following syntax:
     * "call_<hookID>_<moduleID>(HookEvent $event, $hookName)"
     *
     * @param string $name The method called
     * @param array $args The HookEvent, and then the hook name (eventName)
     *
     * @throws \BadMethodCallException
     */
    public function __call($name, $args)
    {
    }
}
