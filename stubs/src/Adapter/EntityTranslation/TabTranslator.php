<?php

namespace PrestaShop\PrestaShop\Adapter\EntityTranslation;

/**
 * Translates tabs (menu items) in database using DataLang
 */
class TabTranslator extends \PrestaShop\PrestaShop\Adapter\EntityTranslation\EntityTranslator
{
    /**
     * Translate using wordings
     * {@inheritdoc}
     */
    public function translate(int $languageId, int $shopId): void
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function doTranslate(array $data, string $fieldName): string
    {
    }
}
