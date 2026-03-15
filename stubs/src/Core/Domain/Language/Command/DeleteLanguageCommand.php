<?php

namespace PrestaShop\PrestaShop\Core\Domain\Language\Command;

/**
 * Deletes given languages
 */
class DeleteLanguageCommand
{
    /**
     * @param int $languageId
     */
    public function __construct($languageId)
    {
    }
    /**
     * @return LanguageId
     */
    public function getLanguageId()
    {
    }
}
