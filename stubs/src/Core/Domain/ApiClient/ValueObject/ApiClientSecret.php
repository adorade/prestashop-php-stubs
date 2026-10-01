<?php

namespace PrestaShop\PrestaShop\Core\Domain\ApiClient\ValueObject;

class ApiClientSecret
{
    public const MIN_SIZE = 32;
    public const MAX_SIZE = 72;
    public function __construct(private string $value)
    {
    }
    public function getValue(): string
    {
    }
}
