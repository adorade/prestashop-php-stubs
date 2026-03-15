<?php

namespace PrestaShop\PrestaShop\Adapter\EntityTranslation;

/**
 * Builds entity translators
 */
class EntityTranslatorFactory
{
    /**
     * @param TranslatorInterface $translator
     */
    public function __construct(\PrestaShopBundle\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * Builds an entity translator based on a table name
     *
     * @param string $tableName Table name (accepts with or without db prefix and _lang suffix)
     * @param string $locale IETF language tag
     *
     * @return EntityTranslatorInterface
     */
    public function buildFromTableName(string $tableName, string $locale): \PrestaShop\PrestaShop\Core\Translation\EntityTranslatorInterface
    {
    }
    /**
     * Builds an entity translator
     *
     * @param DataLangCore $dataLang DataLang class for this entity
     *
     * @return EntityTranslatorInterface
     */
    public function build(\DataLangCore $dataLang): \PrestaShop\PrestaShop\Core\Translation\EntityTranslatorInterface
    {
    }
}
