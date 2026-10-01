<?php

namespace PrestaShop\PrestaShop\Core\Domain\Language\Command;

/**
 * Deletes given languages
 */
class BulkDeleteLanguagesCommand
{
    /**
     * @param int[] $languageIds
     */
    public function __construct(array $languageIds)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId[]
     */
    public function getLanguageIds()
    {
    }
}
