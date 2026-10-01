<?php

/**
 * This class is an adapter if can use PrestaShopLoggerInterface and decorate it into a PSR logger.
 */
class PSRLoggerAdapter implements \Psr\Log\LoggerInterface
{
    public function __construct(\PrestaShopLoggerInterface $logger)
    {
    }
    public function emergency($message, array $context = []): void
    {
    }
    public function alert($message, array $context = []): void
    {
    }
    public function critical($message, array $context = []): void
    {
    }
    public function error($message, array $context = []): void
    {
    }
    public function warning($message, array $context = []): void
    {
    }
    public function notice($message, array $context = []): void
    {
    }
    public function info($message, array $context = []): void
    {
    }
    public function debug($message, array $context = []): void
    {
    }
    public function log($level, $message, array $context = []): void
    {
    }
    /**
     * All messages logged after this method is called are stored in a class field.
     */
    public function startSavingMessages(): void
    {
    }
    /**
     * Stop saving log records and clear the saved records.
     */
    public function stopSavingMessages(): void
    {
    }
    public function getAllSavedMessages(): array
    {
    }
    public function getSavedMessages(string $level): array
    {
    }
    protected function saveMessage($level, $message): void
    {
    }
}
