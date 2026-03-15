<?php

namespace PrestaShop\PrestaShop\Core\Domain\Language\Command;

/**
 * Enables/disables languages status
 */
class BulkToggleLanguagesStatusCommand implements \PrestaShop\PrestaShop\Core\Domain\Language\Command\ToggleLanguageStatusCommandInterface
{
    /**
     * @param int[] $languageIds
     * @param bool $expectedStatus
     */
    public function __construct(array $languageIds, $expectedStatus)
    {
    }
    /**
     * @return LanguageId[]
     */
    public function getLanguageIds()
    {
    }
    /**
     * @return bool
     */
    public function getStatus()
    {
    }
}
