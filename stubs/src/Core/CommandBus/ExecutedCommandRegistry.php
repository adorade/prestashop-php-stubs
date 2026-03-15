<?php

namespace PrestaShop\PrestaShop\Core\CommandBus;

/**
 * Stores information about executed commands/queries
 */
final class ExecutedCommandRegistry
{
    /**
     * @param CommandTypeParser $commandTypeParser
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\Parser\CommandTypeParser $commandTypeParser)
    {
    }
    /**
     * @param object $command
     * @param object $handler
     */
    public function register($command, $handler): void
    {
    }
    /**
     * @return array
     */
    public function getExecutedCommands(): array
    {
    }
    /**
     * @return array
     */
    public function getExecutedQueries(): array
    {
    }
}
