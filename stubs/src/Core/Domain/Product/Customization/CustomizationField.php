<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Customization;

/**
 * Transfers customization field data
 */
class CustomizationField
{
    /**
     * @param int $type
     * @param string[] $localizedNames
     * @param bool $required
     * @param bool $addedByModule
     * @param int|null $customizationFieldId If provided, means that its existing CustomizationField and should be updated
     */
    public function __construct(int $type, array $localizedNames, bool $required, bool $addedByModule = false, ?int $customizationFieldId = null)
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
    /**
     * @return int|null
     */
    public function getCustomizationFieldId(): ?int
    {
    }
}
