<?php

namespace PrestaShopBundle\DataCollector;

/**
 * Collects data about dispatched Commands/Queries during request
 */
final class CommandsAndQueriesDataCollector extends \Symfony\Component\HttpKernel\DataCollector\DataCollector
{
    /**
     * @param ExecutedCommandRegistry $executedCommandRegistry
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\ExecutedCommandRegistry $executedCommandRegistry)
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
    public function getName()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function reset()
    {
    }
    /**
     * @return array
     */
    public function getExecutedCommands()
    {
    }
    /**
     * @return array
     */
    public function getExecutedQueries()
    {
    }
}
