<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\Exception;

/**
 * Base class to use for bulk operations, it stores a list of exception indexed by the product ID that was impacted.
 * It should be used as a base class for all the bulk action exceptions.
 */
class BulkCombinationException extends \PrestaShop\PrestaShop\Core\Domain\Product\Combination\Exception\CombinationException
{
    /**
     * @var array<int, CombinationException>
     */
    protected $bulkExceptions = [];
    /**
     * @param CombinationId $combinationId
     * @param CombinationException $exception
     */
    public function addException(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, \PrestaShop\PrestaShop\Core\Domain\Product\Combination\Exception\CombinationException $exception): void
    {
    }
    /**
     * @return CombinationException[]
     */
    public function getBulkExceptions(): array
    {
    }
    /**
     * @return bool
     */
    public function isEmpty(): bool
    {
    }
}
