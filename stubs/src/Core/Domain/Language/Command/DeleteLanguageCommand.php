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
     * @return \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId
     */
    public function getLanguageId()
    {
    }
}
