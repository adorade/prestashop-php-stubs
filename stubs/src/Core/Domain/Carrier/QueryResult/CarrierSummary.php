<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\QueryResult;

class CarrierSummary
{
    public function __construct(int $id, string $name)
    {
    }
    public function getId(): int
    {
    }
    public function getName(): string
    {
    }
    /**
     * @return array{
     *     id: int,
     *     name: string
     * }
     */
    public function toArray(): array
    {
    }
}
