<?php

namespace PrestaShop\PrestaShop\Adapter\EntityTranslation;

/**
 * Builds instances of DataLang classes
 */
class DataLangFactory
{
    /**
     * @param string $dbPrefix
     * @param TranslatorInterface $translator
     */
    public function __construct(string $dbPrefix, \PrestaShopBundle\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * Returns the appropriate DataLang class name using a table name as source. Note: the class may not exist.
     *
     * @param string $tableName Table name, accepts with and without db prefix and _lang suffix
     *
     * @return string dataLang class name
     */
    public function getClassNameFromTable(string $tableName): string
    {
    }
    /**
     * Instantiates the appropriate DataLang class for the provided locale
     *
     * @param string $className Class name to instantiate
     * @param string $locale IETF language tag
     *
     * @return DataLangCore
     *
     * @throws DataLangClassNameNotFoundException
     */
    public function buildFromClassName(string $className, string $locale): \DataLangCore
    {
    }
    /**
     * Instantiates the appropriate DataLang class for the provided table name and locale code
     *
     * @param string $tableName Table name (accepts with and without db prefix and _lang suffix)
     * @param string $locale IETF language tag
     *
     * @return DataLangCore
     */
    public function buildFromTableName(string $tableName, string $locale): \DataLangCore
    {
    }
}
