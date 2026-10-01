<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryResult;

class OrderProductCustomizationForViewing
{
    /**
     * @param int $type
     * @param string $name
     * @param string $value
     */
    public function __construct(int $type, string $name, string $value)
    {
    }
    /**
     * @return int
     */
    public function getType(): int
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
    public function getValue(): string
    {
    }
    /**
     * @return string|null
     */
    public function getImage(): ?string
    {
    }
}
