<?php

namespace PrestaShop\PrestaShop\Core\Domain\Title\Exception;

/**
 * Is raised when title or titles cannot be deleted
 */
class DeleteTitleException extends \PrestaShop\PrestaShop\Core\Domain\Title\Exception\TitleException
{
    /**
     * When fails to delete single title
     */
    public const FAILED_DELETE = 1;
    /**
     * When fails to delete titles in bulk actions
     */
    public const FAILED_BULK_DELETE = 2;
    /**
     * @param TitleId $titleId
     * @param Throwable|null $previous
     *
     * @return static
     */
    public static function createDeleteFailure(\PrestaShop\PrestaShop\Core\Domain\Title\ValueObject\TitleId $titleId, \Throwable $previous = null): self
    {
    }
    /**
     * @param TitleId $titleId
     * @param Throwable|null $previous
     *
     * @return static
     */
    public static function createBulkDeleteFailure(\PrestaShop\PrestaShop\Core\Domain\Title\ValueObject\TitleId $titleId, \Throwable $previous = null): self
    {
    }
}
