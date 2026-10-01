<?php

namespace PrestaShop\PrestaShop\Adapter\Employee;

/**
 * Class EmployeeLanguageUpdater updates the `id_lang` field in the `employee` table for all employees
 * using a deleted language, assigning them the default language instead.
 */
final class EmployeeLanguageUpdater
{
    /**
     * @param \Doctrine\DBAL\Connection $connection
     * @param string $dbPrefix
     * @param int $langDefaultId
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix, int $langDefaultId)
    {
    }
    public function replaceDeletedLanguage(int $deletedLangId)
    {
    }
}
