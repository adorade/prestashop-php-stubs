<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\QueryResult;

/**
 * Holds data of product customization field
 */
class ProductCustomizationField
{
    public const TYPE_FILE = 0;
    public const TYPE_TEXT = 1;
    /**
     * @param int $customizationFieldId
     * @param int $type
     * @param string $name
     * @param bool $isRequired
     */
    public function __construct(int $customizationFieldId, int $type, string $name, bool $isRequired)
    {
    }
    /**
     * @return int
     */
    public function getCustomizationFieldId(): int
    {
    }
    /**
     * @return string
     */
    public function getName(): string
    {
    }
    /**
     * @return int
     */
    public function getType(): int
    {
    }
    /**
     * @return bool
     */
    public function isRequired(): bool
    {
    }
}
