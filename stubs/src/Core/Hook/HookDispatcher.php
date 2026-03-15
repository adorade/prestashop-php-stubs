<?php

namespace PrestaShop\PrestaShop\Core\Hook;

/**
 * Class HookDispatcher is responsible for dispatching hooks.
 */
final class HookDispatcher implements \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface
{
    /**
     * @param HookDispatcherAdapter $hookDispatcherAdapter
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Hook\HookDispatcher $hookDispatcherAdapter)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function dispatchHook(\PrestaShop\PrestaShop\Core\Hook\HookInterface $hook)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function dispatchWithParameters($hookName, array $hookParameters = [])
    {
    }
    /**
     * {@inheritdoc}
     */
    public function dispatchRendering(\PrestaShop\PrestaShop\Core\Hook\HookInterface $hook)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function dispatchRenderingWithParameters($hookName, array $hookParameters = [])
    {
    }
    /**
     * {@inheritdoc}
     */
    public function dispatch($eventName, \Symfony\Component\EventDispatcher\Event $event = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function addListener($eventName, $listener, $priority = 0)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function addSubscriber(\Symfony\Component\EventDispatcher\EventSubscriberInterface $subscriber)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function removeListener($eventName, $listener)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function removeSubscriber(\Symfony\Component\EventDispatcher\EventSubscriberInterface $subscriber)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getListeners($eventName = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getListenerPriority($eventName, $listener)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function hasListeners($eventName = null)
    {
    }
}
