<?php

namespace PrestaShop\PrestaShop\Core\QuickAccess;

/**
 * Define the contract to access Quick Accesses.
 */
interface QuickAccessRepositoryInterface
{
    /**
     * Returns the complete list of quick accesses.
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId
     *
     * @return array
     */
    public function fetchAll(\PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId): array;
}
