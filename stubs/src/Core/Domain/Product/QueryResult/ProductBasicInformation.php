<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\QueryResult;

/**
 * Contains some basic information about product
 */
class ProductBasicInformation
{
    /**
     * @param string[] $localizedNames
     * @param string[] $localizedDescriptions
     * @param string[] $localizedShortDescriptions
     * @param LocalizedTags[] $localizedTags
     */
    public function __construct(array $localizedNames, array $localizedDescriptions, array $localizedShortDescriptions, array $localizedTags)
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedNames(): array
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedDescriptions(): array
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedShortDescriptions(): array
    {
    }
    /**
     * @return LocalizedTags[]
     */
    public function getLocalizedTags(): array
    {
    }
}
