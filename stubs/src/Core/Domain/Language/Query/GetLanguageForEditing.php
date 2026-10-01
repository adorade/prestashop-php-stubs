<?php

namespace PrestaShop\PrestaShop\Core\Domain\Language\Query;

/**
 * Gets language for editing in Back Office
 */
class GetLanguageForEditing
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
