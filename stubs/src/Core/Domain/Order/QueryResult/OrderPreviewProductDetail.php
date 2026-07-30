<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryResult;

/**
 * DTO for order product details
 */
class OrderPreviewProductDetail
{
    /**
     * @param string $name
     * @param string $reference
     * @param string $location
     * @param int $quantity
     * @param string $unitPrice
     * @param string $totalPrice
     * @param string $totalTax
     * @param int $id
     */
    public function __construct(string $name, string $reference, string $location, int $quantity, string $unitPrice, string $totalPrice, string $totalTax, int $id)
    {
    }
    /**
     * @return string
     */
    public function getName(): string
    {
    }
    /**
     * @return string
     */
    public function getReference(): string
    {
    }
    /**
     * @return string
     */
    public function getUnitPrice(): string
    {
    }
    /**
     * @return string
     */
    public function getTotalPrice(): string
    {
    }
    /**
     * @return int
     */
    public function getQuantity(): int
    {
    }
    /**
     * @return string
     */
    public function getTotalTax(): string
    {
    }
    /**
     * @return string
     */
    public function getLocation(): string
    {
    }
    /**
     * @return int
     */
    public function getId(): int
    {
    }
}
