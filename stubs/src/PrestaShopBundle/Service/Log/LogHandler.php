<?php

namespace PrestaShopBundle\Service\Log;

/**
 * @phpstan-import-type LevelName from \Monolog\Logger
 * @phpstan-import-type Level from \Monolog\Logger
 * @phpstan-import-type Record from \Monolog\Logger
 *
 * @phpstan-type FormattedRecord array{message: string, context: mixed[], level: Level, level_name: LevelName, channel: string, datetime: \DateTimeImmutable, extra: mixed[], formatted: mixed}
 *
 * This handler is an interface between Monolog and the legacy logger.
 *
 * It also provides a feature that allows you saving log records, it is always disabled by default, but you can temporarily
 * enable the saving of recors, which may be useful to get warning messages and then display them as flash messages in controllers.
 */
class LogHandler extends \Monolog\Handler\AbstractProcessingHandler
{
    protected $container;
    /**
     * @var array<int, array<int, array{level: int, message: string, context: array}>>
     */
    protected array $savedRecords = [];
    protected bool $recordsSaved = false;
    public function __construct(\Symfony\Component\DependencyInjection\Container $container, $level = \Monolog\Logger::DEBUG, $bubble = true)
    {
    }
    /**
     * Writes the record down to the log of the implementing handler
     *
     * @phpstan-param FormattedRecord $record
     */
    protected function write(array $record): void
    {
    }
    public function isRecordsSaved(): bool
    {
    }
    /**
     * All messages logged after this method is called are stored in a class field.
     */
    public function startSavingRecords(): void
    {
    }
    /**
     * Stop saving log records and clear the saved records.
     */
    public function stopSavingRecords(): void
    {
    }
    public function getSavedRecords(int $level): array
    {
    }
    public function getAllSavedRecords(): array
    {
    }
}
