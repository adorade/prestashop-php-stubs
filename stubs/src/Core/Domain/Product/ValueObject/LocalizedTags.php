<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\ValueObject;

/**
 * Holds valid list of product tags in one language
 */
class LocalizedTags
{
    public const VALID_TAG_PATTERN = '/^[^<>={}]*$/u';
    /**
     * @param int $langId
     * @param string[] $tags
     *
     * @throws ProductConstraintException
     */
    public function __construct(int $langId, array $tags)
    {
    }
    /**
     * @return bool
     */
    public function isEmpty(): bool
    {
    }
    /**
     * @return LanguageId
     */
    public function getLanguageId(): \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId
    {
    }
    /**
     * @return string[]
     */
    public function getTags(): array
    {
    }
}
