<?php

namespace PrestaShop\PrestaShop\Core\Domain\Hook\QueryResult;

class Hook
{
    public function __construct(public readonly int $id, public readonly bool $active, public readonly string $name, public readonly string $title, public readonly string $description)
    {
    }
    public function getId(): int
    {
    }
    public function isActive(): bool
    {
    }
    public function getName(): string
    {
    }
    public function getTitle(): string
    {
    }
    public function getDescription(): string
    {
    }
}
