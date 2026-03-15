<?php

namespace PrestaShopBundle\Event\Dispatcher;

class NullDispatcher implements \Symfony\Component\EventDispatcher\EventDispatcherInterface, \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface
{
    public function addListener($eventName, $listener, $priority = 0)
    {
    }
    public function addSubscriber(\Symfony\Component\EventDispatcher\EventSubscriberInterface $subscriber)
    {
    }
    /**
     * @param object $event
     * @param string|null $eventName
     *
     * @return object|void
     */
    public function dispatch($event, string $eventName = null)
    {
    }
    /**
     * @param null $eventName
     *
     * @return array|void
     */
    public function getListeners($eventName = null)
    {
    }
    /**
     * @param null $eventName
     *
     * @return bool|void
     */
    public function hasListeners($eventName = null)
    {
    }
    public function removeListener($eventName, $listener)
    {
    }
    public function removeSubscriber(\Symfony\Component\EventDispatcher\EventSubscriberInterface $subscriber)
    {
    }
    /**
     * @param string $eventName
     * @param callable $listener
     *
     * @return int|void|null
     */
    public function getListenerPriority($eventName, $listener)
    {
    }
    public function dispatchHook(\PrestaShop\PrestaShop\Core\Hook\HookInterface $hook)
    {
    }
    public function dispatchWithParameters($hookName, array $hookParameters = [])
    {
    }
    /**
     * @param HookInterface $hook
     *
     * @return RenderedHookInterface|void
     */
    public function dispatchRendering(\PrestaShop\PrestaShop\Core\Hook\HookInterface $hook)
    {
    }
    /**
     * @param string $hookName
     * @param array $hookParameters
     *
     * @return RenderedHookInterface|void
     */
    public function dispatchRenderingWithParameters($hookName, array $hookParameters = [])
    {
    }
}
