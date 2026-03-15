<?php

/**
 * This class is an adapter if can use PrestaShopLoggerInterface and decorate it into a PSR logger.
 */
class PSRLoggerAdapter implements \Psr\Log\LoggerInterface
{
    public function __construct(\PrestaShopLoggerInterface $logger)
    {
    }
    public function emergency($message, array $context = [])
    {
    }
    public function alert($message, array $context = [])
    {
    }
    public function critical($message, array $context = [])
    {
    }
    public function error($message, array $context = [])
    {
    }
    public function warning($message, array $context = [])
    {
    }
    public function notice($message, array $context = [])
    {
    }
    public function info($message, array $context = [])
    {
    }
    public function debug($message, array $context = [])
    {
    }
    public function log($level, $message, array $context = [])
    {
    }
}
