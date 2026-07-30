<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryResult;

class OrderDocumentForViewing
{
    public function __construct(int $id, string $type, \DateTimeImmutable $createdAt, string $referenceNumber, ?float $numericalAmount, ?string $amount, ?string $amountMismatch, ?string $note, bool $isAddPaymentAllowed)
    {
    }
    public function getId(): int
    {
    }
    public function getType(): string
    {
    }
    public function getCreatedAt(): \DateTimeImmutable
    {
    }
    /**
     * @return string
     */
    public function getReferenceNumber(): string
    {
    }
    /**
     * @return string|null
     */
    public function getAmount(): ?string
    {
    }
    /**
     * @return string|null
     */
    public function getAmountMismatch(): ?string
    {
    }
    /**
     * @return string
     */
    public function getNote(): ?string
    {
    }
    /**
     * @return bool
     */
    public function isAddPaymentAllowed(): bool
    {
    }
    /**
     * @return float|null
     */
    public function getNumericalAmount(): ?float
    {
    }
}
