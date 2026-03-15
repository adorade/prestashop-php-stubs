<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryResult;

class OrderCarrierForViewing
{
    /**
     * @param int $orderCarrierId
     * @param DateTimeImmutable $date
     * @param string $name Carrier name or null in case of virtual order
     * @param string $weight
     * @param int $carrierId
     * @param string $price Price or null in case of virtual order
     * @param string|null $trackingUrl
     * @param string|null $trackingNumber
     * @param bool $canEdit
     */
    public function __construct(int $orderCarrierId, \DateTimeImmutable $date, ?string $name, string $weight, int $carrierId, ?string $price, ?string $trackingUrl, ?string $trackingNumber, bool $canEdit)
    {
    }
    /**
     * @return int
     */
    public function getOrderCarrierId(): int
    {
    }
    /**
     * @return DateTimeImmutable
     */
    public function getDate(): \DateTimeImmutable
    {
    }
    /**
     * @return string
     */
    public function getName(): ?string
    {
    }
    /**
     * @return int
     */
    public function getCarrierId(): int
    {
    }
    /**
     * @return string
     */
    public function getPrice(): ?string
    {
    }
    /**
     * @return string|null
     */
    public function getTrackingUrl(): ?string
    {
    }
    /**
     * @return string|null
     */
    public function getTrackingNumber(): ?string
    {
    }
    /**
     * @return bool
     */
    public function canEdit(): bool
    {
    }
    /**
     * @return string
     */
    public function getWeight(): string
    {
    }
}
