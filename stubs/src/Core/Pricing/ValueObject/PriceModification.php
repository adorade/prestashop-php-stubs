<?php

namespace PrestaShop\PrestaShop\Core\Pricing\ValueObject;

/**
 * Debug record of a single price property change, capturing which calculator made the modification.
 */
class PriceModification
{
    public function __construct(protected readonly string $callerClass, protected readonly int $callerLine, protected readonly string $property, protected readonly string $previousValue, protected readonly string $newValue)
    {
    }
    public function getCallerClass(): string
    {
    }
    public function getCallerLine(): int
    {
    }
    public function getProperty(): string
    {
    }
    public function getPreviousValue(): string
    {
    }
    public function getNewValue(): string
    {
    }
}
