<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Stock\QueryHandler;

abstract class AbstractGetStockMovementsHandler
{
    /**
     * @var StockAvailableRepository
     */
    protected $stockAvailableRepository;
    /**
     * @var StockMovementRepository
     */
    protected $stockMovementRepository;
    /**
     * @var TranslatorInterface
     */
    protected $translator;
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Stock\Repository\StockAvailableRepository $stockAvailableRepository, \PrestaShop\PrestaShop\Adapter\Product\Stock\Repository\StockMovementRepository $stockMovementRepository, \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * @return StockMovement[]
     */
    protected function getStockMovements(\PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\StockId $stockId, int $offset, int $limit): array
    {
    }
    /**
     * @param array<string, string|int|null> $historyRow
     *
     * @return StockMovement
     */
    protected function createEditionStockMovement(array $historyRow): \PrestaShop\PrestaShop\Core\Domain\Product\Stock\QueryResult\StockMovement
    {
    }
    /**
     * @param array<string, string|int|null> $historyRow
     *
     * @return StockMovement
     */
    protected function createOrdersStockMovement(array $historyRow): \PrestaShop\PrestaShop\Core\Domain\Product\Stock\QueryResult\StockMovement
    {
    }
}
