<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult\CartForOrderCreation;

/**
 * Holds product customization data along with its custom fields data
 */
class Customization
{
    public function __construct(int $customizationId, array $customizationFieldsData)
    {
    }
    /**
     * @return int
     */
    public function getCustomizationId(): int
    {
    }
    /**
     * @return CustomizationFieldData[]
     */
    public function getCustomizationFieldsData(): array
    {
    }
}
