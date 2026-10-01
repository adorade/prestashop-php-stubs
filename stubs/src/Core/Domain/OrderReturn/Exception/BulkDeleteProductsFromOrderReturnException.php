<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturn\Exception;

/**
 * Reports the per-row failures collected while running BulkDeleteProductsFromOrderReturnCommand.
 */
class BulkDeleteProductsFromOrderReturnException extends \PrestaShop\PrestaShop\Core\Domain\OrderReturn\Exception\OrderReturnException implements \PrestaShop\PrestaShop\Core\Domain\Exception\BulkCommandExceptionInterface
{
    /**
     * @param \Throwable[] $exceptions
     */
    public function __construct(array $exceptions)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getExceptions(): array
    {
    }
}
