<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Customization\ValueObject;

/**
 * Holds value of customization type
 */
class CustomizationFieldType
{
    /**
     * Value representing customization file type
     */
    public const TYPE_FILE = 0;
    /**
     * Value representing customization text type
     */
    public const TYPE_TEXT = 1;
    /**
     * Available customization types
     */
    public const AVAILABLE_TYPES = ['file' => self::TYPE_FILE, 'text' => self::TYPE_TEXT];
    /**
     * @param int $value
     */
    public function __construct(int $value)
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
    /**
     * @return bool
     */
    public function isTextType(): bool
    {
    }
}
