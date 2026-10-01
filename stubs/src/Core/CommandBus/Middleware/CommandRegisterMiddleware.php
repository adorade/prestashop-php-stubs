<?php

namespace PrestaShop\PrestaShop\Core\CommandBus\Middleware;

/**
 * Registers every command that was executed in system
 */
final class CommandRegisterMiddleware implements \League\Tactician\Middleware
{
    /**
     * @param \League\Tactician\Handler\Locator\HandlerLocator $handlerLocator
     * @param \League\Tactician\Handler\CommandNameExtractor\CommandNameExtractor $commandNameExtractor
     * @param \PrestaShop\PrestaShop\Core\CommandBus\ExecutedCommandRegistry $executedCommandRegistry
     */
    public function __construct(\League\Tactician\Handler\Locator\HandlerLocator $handlerLocator, \League\Tactician\Handler\CommandNameExtractor\CommandNameExtractor $commandNameExtractor, \PrestaShop\PrestaShop\Core\CommandBus\ExecutedCommandRegistry $executedCommandRegistry)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function execute($command, callable $next)
    {
    }
}
