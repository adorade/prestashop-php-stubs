<?php

namespace PrestaShop\PrestaShop\Adapter\EntityTranslation;

/**
 * Translates an entity in database using DataLang classes
 */
class EntityTranslator implements \PrestaShop\PrestaShop\Core\Translation\EntityTranslatorInterface
{
    /**
     * @var DataLangCore
     */
    protected $dataLang;
    /**
     * @var Db
     */
    protected $db;
    /**
     * @var TranslatorInterface
     */
    protected $translator;
    /**
     * @var string
     */
    protected $tableName;
    /**
     * @var string
     */
    protected $dbPrefix;
    /**
     * @param Db $db
     * @param string $dbPrefix
     * @param TranslatorInterface $translator
     * @param DataLangCore $dataLang
     */
    public function __construct(\Db $db, string $dbPrefix, \PrestaShopBundle\Translation\TranslatorInterface $translator, \DataLangCore $dataLang)
    {
    }
    /**
     * Translate the entity's data in database using reverse translation technique
     *
     * @param int $languageId
     * @param int $shopId
     *
     * @throws LanguageNotFoundException
     * @throws \PrestaShopDatabaseException
     * @throws \PrestaShopException
     */
    public function translate(int $languageId, int $shopId): void
    {
    }
    /**
     * Returns true if an id_shop field exists in database
     *
     * @param string $tableNameSql
     *
     * @return bool
     *
     * @throws \PrestaShopDatabaseException
     */
    protected function shopFieldExists(string $tableNameSql): bool
    {
    }
    /**
     * Retrieves the original wording via reverse dictionary search (aka "untranslation")
     *
     * @param array $data Database record
     * @param string $fieldName Name of the field from $data to translate
     *
     * @return string "Untranslated" value
     */
    protected function getSourceString(array $data, string $fieldName): string
    {
    }
    /**
     * Finds out the original wording and translates it
     *
     * @param array $data Database record
     * @param string $fieldName Name of the field from $data to translate
     *
     * @return string Translated value
     */
    protected function doTranslate(array $data, string $fieldName): string
    {
    }
}
