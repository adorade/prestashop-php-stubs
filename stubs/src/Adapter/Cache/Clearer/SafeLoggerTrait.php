<?php

namespace PrestaShop\PrestaShop\Adapter\Cache\Clearer;

trait SafeLoggerTrait
{
    protected readonly \Psr\Log\LoggerInterface $logger;
    protected function logError(string $message): void
    {
    }
    protected function logWarning(string $message): void
    {
    }
    protected function logInfo(string $message): void
    {
    }
    protected function logDebug(string $message): void
    {
    }
}
