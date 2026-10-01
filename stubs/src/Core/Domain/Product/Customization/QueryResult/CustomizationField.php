<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Customization\QueryResult;

/**
 * Transfers product customization field data
 */
class CustomizationField
{
    /**
     * @param int $customizationFieldId
     * @param int $type
     * @param string[] $localizedNames
     * @param bool $required
     * @param bool $addedByModule
     */
    public function __construct(int $customizationFieldId, int $type, array $localizedNames, bool $required, bool $addedByModule)
    {
    }
    /**
     * @return int
     */
    public function getCustomizationFieldId(): int
    {
    }
    /**
     * @return int
     */
    public function getType(): int
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedNames(): array
    {
    }
    /**
     * @return bool
     */
    public function isRequired(): bool
    {
    }
    /**
     * @return bool
     */
    public function isAddedByModule(): bool
    {
    }
}
