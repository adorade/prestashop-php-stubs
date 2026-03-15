<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Customization\ValueObject;

/**
 * Holds product customization identification data
 */
class CustomizationId
{
    /**
     * @param int $customizationId
     */
    public function __construct(int $customizationId)
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}
