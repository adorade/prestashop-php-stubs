<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult\CartForOrderCreation;

/**
 * Holds product customized data of customization field
 */
class CustomizationFieldData
{
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
}
