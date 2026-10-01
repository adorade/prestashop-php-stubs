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
     * @return object
     */
    public function dispatch(object $event, ?string $eventName = null): object
    {
    }
    /**
     * @param null $eventName
     */
    public function getListeners($eventName = null): array
    {
    }
    /**
     * @param null $eventName
     */
    public function hasListeners($eventName = null): bool
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
     */
    public function getListenerPriority($eventName, $listener): ?int
    {
    }
    public function dispatchHook(\PrestaShop\PrestaShop\Core\Hook\HookInterface $hook)
    {
    }
    public function dispatchWithParameters($hookName, array $hookParameters = [])
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Hook\HookInterface $hook
     *
     * @return \PrestaShop\PrestaShop\Core\Hook\RenderedHookInterface|void
     */
    public function dispatchRendering(\PrestaShop\PrestaShop\Core\Hook\HookInterface $hook)
    {
    }
    /**
     * @param string $hookName
     * @param array $hookParameters
     *
     * @return \PrestaShop\PrestaShop\Core\Hook\RenderedHookInterface|void
     */
    public function dispatchRenderingWithParameters($hookName, array $hookParameters = [])
    {
    }
}
