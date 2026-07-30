<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Stock\QueryResult;

class StockMovement
{
    public const EDITION_TYPE = 'edition';
    public const ORDERS_TYPE = 'orders';
    /**
     * @var string
     */
    protected $type;
    /**
     * @var array<string, DateTimeImmutable>
     */
    protected $dates;
    /**
     * @var int[]
     */
    protected $stockMovementIds;
    /**
     * @var int[]
     */
    protected $stockIds;
    /**
     * @var int[]
     */
    protected $orderIds;
    /**
     * @var int[]
     */
    protected $employeeIds;
    /**
     * @var string|null
     */
    protected $employeeName = null;
    /**
     * @var int
     */
    protected $deltaQuantity;
    /**
     * @param string $type
     * @param string[] $dates
     * @param int[] $stockMovementIds
     * @param int[] $stockIds
     * @param int[] $orderIds
     * @param int[] $employeeIds
     * @param string|null $employeeName
     * @param int $deltaQuantity
     */
    protected function __construct(string $type, array $dates, array $stockMovementIds, array $stockIds, array $orderIds, array $employeeIds, ?string $employeeName, int $deltaQuantity)
    {
    }
    /**
     * @return int[]
     */
    protected function initializeIds(array $ids): array
    {
    }
    /**
     * @param string[] $dates
     *
     * @return DateTimeImmutable[]
     */
    protected function initializeDates(array $dates): array
    {
    }
    public static function createEditionMovement(string $dateAdd, int $stockMovementId, int $stockId, ?int $orderId, int $employeeId, ?string $employeeName, int $deltaQuantity): self
    {
    }
    /**
     * @param string $fromDate
     * @param string $toDate
     * @param string[]|int[] $stockMovementIds
     * @param string[]|int[] $stockIds
     * @param string[]|int[] $orderIds
     * @param string[]|int[] $employeeIds
     * @param int $deltaQuantity
     */
    public static function createOrdersMovement(string $fromDate, string $toDate, array $stockMovementIds, array $stockIds, array $orderIds, array $employeeIds, int $deltaQuantity): self
    {
    }
    /**
     * Returns history type : "edition" or "orders"
     */
    public function getType(): string
    {
    }
    public function isEdition(): bool
    {
    }
    public function isFromOrders(): bool
    {
    }
    /**
     * @return int[]
     */
    public function getStockMovementIds(): array
    {
    }
    /**
     * @return int[]
     */
    public function getStockIds(): array
    {
    }
    /**
     * @return int[]
     */
    public function getOrderIds(): array
    {
    }
    /**
     * @return int[]
     */
    public function getEmployeeIds(): array
    {
    }
    public function getEmployeeName(): ?string
    {
    }
    public function getDeltaQuantity(): int
    {
    }
    /**
     * @return array<string, DateTimeImmutable>
     */
    public function getDates(): array
    {
    }
    public function getDate(string $key): \DateTimeImmutable
    {
    }
}
