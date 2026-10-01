<?php

namespace PrestaShopBundle\DataCollector;

/**
 * Collect all information about Legacy hooks and make it available
 * in the Symfony Web profiler.
 */
final class HookDataCollector extends \Symfony\Component\HttpKernel\DataCollector\DataCollector
{
    public function __construct(\PrestaShopBundle\DataCollector\HookRegistry $registry)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function collect(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\HttpFoundation\Response $response, \Exception $exception = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function unserialize($data)
    {
    }
    /**
     * Return the list of every dispatched legacy hooks during one request.
     *
     * @return array
     */
    public function getHooks()
    {
    }
    /**
     * Return the list of every called legacy hooks during one request.
     *
     * @return array
     */
    public function getCalledHooks()
    {
    }
    /**
     * Return the list of every uncalled legacy hooks during oHookne request.
     *
     * @return array
     */
    public function getNotCalledHooks()
    {
    }
    /**
     * Return the list of every uncalled legacy hooks during oHookne request.
     *
     * @return array
     */
    public function getNotRegisteredHooks()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function reset()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
    }
}
