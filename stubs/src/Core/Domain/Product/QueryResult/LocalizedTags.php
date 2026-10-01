<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\QueryResult;

/**
 * Holds data of product tags in single language
 */
class LocalizedTags
{
    /**
     * @param int $languageId
     * @param string[] $tags
     */
    public function __construct(int $languageId, array $tags)
    {
    }
    /**
     * @return int
     */
    public function getLanguageId(): int
    {
    }
    /**
     * @return string[]
     */
    public function getTags(): array
    {
    }
}
