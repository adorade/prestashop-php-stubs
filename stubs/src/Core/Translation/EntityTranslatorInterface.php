<?php

namespace PrestaShop\PrestaShop\Core\Translation;

/**
 * Translates multi language items in database using DataLang classes
 */
interface EntityTranslatorInterface
{
    /**
     * Executes the translation
     *
     * @param int $languageId
     * @param int $shopId
     */
    public function translate(int $languageId, int $shopId): void;
}
