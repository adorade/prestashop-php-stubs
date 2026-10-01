<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Schema;

/**
 * Maps an ExtraPropertyDefinition VO to a complete SQL column definition fragment.
 *
 * The returned string is ready to be appended after the column name in an ALTER TABLE … ADD COLUMN statement.
 * NULL/NOT NULL and DEFAULT clauses are always explicit so the caller does not need to add them.
 */
class ColumnDefinitionMapper
{
    /**
     * Returns the full SQL column definition fragment for the given options.
     *
     * @param \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition $options Property options containing type, enumValues, nullable, defaultValue
     *
     * @return string e.g. "VARCHAR(255) NULL" or "ENUM('a','b') NOT NULL DEFAULT 'a'"
     */
    public static function getSqlDefinition(\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition $options): string
    {
    }
    /**
     * Extracts the literals of a SQL ENUM column type, e.g. "enum('a','b')" → ['a', 'b'].
     * Parsing counterpart of buildEnumDefinition().
     *
     * Returns null for any non-ENUM column type.
     *
     * @return list<string>|null
     */
    public static function parseEnumValues(string $sqlColumnType): ?array
    {
    }
}
