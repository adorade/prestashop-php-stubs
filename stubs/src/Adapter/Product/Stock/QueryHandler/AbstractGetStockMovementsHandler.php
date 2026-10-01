<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Stock\QueryHandler;

abstract class AbstractGetStockMovementsHandler
{
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Product\Stock\Repository\StockAvailableRepository
     */
    protected $stockAvailableRepository;
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Product\Stock\Repository\StockMovementRepository
     */
    protected $stockMovementRepository;
    /**
     * @var \Symfony\Contracts\Translation\TranslatorInterface
     */
    protected $translator;
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Stock\Repository\StockAvailableRepository $stockAvailableRepository, \PrestaShop\PrestaShop\Adapter\Product\Stock\Repository\StockMovementRepository $stockMovementRepository, \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Stock\QueryResult\StockMovement[]
     */
    protected function getStockMovements(\PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\StockId $stockId, int $offset, int $limit): array
    {
    }
    /**
     * @param array<string, string|int|null> $historyRow
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Stock\QueryResult\StockMovement
     */
    protected function createEditionStockMovement(array $historyRow): \PrestaShop\PrestaShop\Core\Domain\Product\Stock\QueryResult\StockMovement
    {
    }
    /**
     * @param array<string, string|int|null> $historyRow
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Stock\QueryResult\StockMovement
     */
    protected function createOrdersStockMovement(array $historyRow): \PrestaShop\PrestaShop\Core\Domain\Product\Stock\QueryResult\StockMovement
    {
    }
}
