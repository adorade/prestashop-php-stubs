<?php

/**
 * This logger class respects the PrestaShopLoggerInterface but is based on the Symfony console
 * component. It is used as a temporary solution in legacy code until we can replace the usage of
 * the legacy interface.
 */
class SymfonyConsoleLogger extends \AbstractLogger
{
    public function __construct(\Symfony\Component\Console\Output\OutputInterface $output, $level = self::INFO)
    {
    }
    protected function logMessage($message, $level)
    {
    }
}
