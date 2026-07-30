<?php

namespace PrestaShop\PrestaShop\Adapter\Hook;

/**
 * This dispatcher is used to trigger hook listeners.
 *
 * The dispatch process cannot be stopped like a common EventDispatcher.
 *
 * If the event is a RenderingHookEvent, then the final result is
 * an array of contents accessed from $event->getContent().
 */
class HookDispatcher extends \Symfony\Component\EventDispatcher\EventDispatcher implements \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface
{
    /**
     * @param RequestStack|null $requestStack (nullable to preserve backward compatibility)
     * @param iterable|null $hookSubscribers
     * @param HookRegistry|null $hookRegistry (nullable to preserve backward compatibility)
     * @param bool $isDebug
     */
    public function __construct(\Symfony\Component\HttpFoundation\RequestStack $requestStack = null, iterable $hookSubscribers = null, \PrestaShopBundle\DataCollector\HookRegistry $hookRegistry = null, bool $isDebug = false)
    {
    }
    /**
     * This override will check if $event is an instance of HookEvent.
     *
     * @param string|Hook $eventName
     * @param Event|null $event
     *
     * @return Event|HookEvent
     *
     * @throws \Exception if the Event is not HookEvent or a subclass
     */
    public function dispatch($eventName, \Symfony\Component\EventDispatcher\Event $event = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function dispatchHook(\PrestaShop\PrestaShop\Core\Hook\HookInterface $hook)
    {
    }
    /**
     * Calls multiple hooks with the same parameter set.
     *
     * Each event is independent for each hook call. Parameter set is duplicated.
     *
     * @param array $eventNames the hooks to dispatch to
     * @param array $eventParameters the parameters set to insert in each HookEvent instance
     *
     * @throws \Exception if the Event is not HookEvent or a subclass
     */
    public function dispatchMultiple(array $eventNames, array $eventParameters)
    {
    }
    /**
     * {@inheritdoc}
     * This override will avoid PropagationStopped to break the dispatching process.
     * After dispatch, in case of RenderingHookEvent, the final content array will be set in event.
     */
    protected function doDispatch($listeners, $eventName, \Symfony\Component\EventDispatcher\Event $event)
    {
    }
    /**
     * Creates a HookEvent, sets its parameters, and dispatches it.
     *
     * @param string $eventName The hook name
     * @param array $parameters Hook parameters
     *
     * @return Event the event that has been passed to each listener
     *
     * @throws \Exception
     */
    public function dispatchForParameters($eventName, array $parameters = [])
    {
    }
    /**
     * Creates a RenderingHookEvent, sets its parameters, and dispatches it. Returns the event with the response(s).
     *
     * @param string $eventName the hook name
     * @param array $parameters Hook parameters
     *
     * @return RenderingHookEvent The event that has been passed to each listener. Contains the responses.
     *
     * @throws \Exception
     */
    public function renderForParameters($eventName, array $parameters = [])
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
}
