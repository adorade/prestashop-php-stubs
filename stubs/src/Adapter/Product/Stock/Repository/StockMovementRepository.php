<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Stock\Repository;

class StockMovementRepository
{
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix)
    {
    }
    /**
     * Returns the last stock movements with groupings.
     *
     * @return array<int, array<string, mixed>>
     */
    public function getLastStockMovements(\PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\StockId $stockId, int $offset = 0, int $limit = self::DEFAULT_LIMIT): array
    {
    }
}
