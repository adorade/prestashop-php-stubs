<?php

namespace PrestaShop\PrestaShop\Core\Domain\State\Exception;

/**
 * Is raised when state or states cannot be deleted
 */
class DeleteStateException extends \PrestaShop\PrestaShop\Core\Domain\State\Exception\StateException
{
    /**
     * When fails to delete single state
     */
    public const FAILED_DELETE = 1;
    /**
     * When fails to delete states in bulk actions
     */
    public const FAILED_BULK_DELETE = 2;
    /**
     * @param StateIdInterface $stateId
     * @param Throwable|null $previous
     *
     * @return static
     */
    public static function createDeleteFailure(\PrestaShop\PrestaShop\Core\Domain\State\ValueObject\StateIdInterface $stateId, \Throwable $previous = null): self
    {
    }
    /**
     * @param StateId $stateId
     * @param Throwable|null $previous
     *
     * @return static
     */
    public static function createBulkDeleteFailure(\PrestaShop\PrestaShop\Core\Domain\State\ValueObject\StateId $stateId, \Throwable $previous = null): self
    {
    }
}
