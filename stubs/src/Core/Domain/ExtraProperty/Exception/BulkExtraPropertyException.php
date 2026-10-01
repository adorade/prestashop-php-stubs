<?php

namespace PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Exception;

/**
 * Aggregates the per-item failures (e.g. module-owned definitions) caught while processing
 * a BulkDeleteExtraPropertyDefinitionCommand, so a single failing id does not stop the batch.
 */
class BulkExtraPropertyException extends \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Exception\ExtraPropertyException implements \PrestaShop\PrestaShop\Core\Domain\Exception\BulkCommandExceptionInterface
{
    /**
     * @param \Throwable[] $exceptions
     */
    public function __construct(private readonly array $exceptions, string $message = 'Errors occurred during extra property definition bulk delete action')
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getExceptions(): array
    {
    }
}
