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
    /**
     * Returns the API clients that created the given stock movements, based on the mutation
     * table (StockMvt has no api client relation). The result is indexed by stock movement id:
     *
     *     [<id_stock_mvt> => ['id_api_client' => int, 'client_name' => string]]
     *
     * @param int[]|string[] $stockMovementIds
     *
     * @return array<int, array<string, mixed>>
     */
    public function getApiClientsByStockMovementIds(array $stockMovementIds): array
    {
    }
}
