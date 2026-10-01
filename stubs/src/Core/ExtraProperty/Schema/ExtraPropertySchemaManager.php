<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Schema;

/**
 * Manages the DDL of *_extra / *_extra_lang / *_extra_shop tables.
 *
 * Table naming convention (without DB prefix):
 *   entity scope → {entity}_extra          (e.g. product_extra)
 *   lang scope   → {entity}_extra_lang     (e.g. product_extra_lang)
 *   shop scope   → {entity}_extra_shop     (e.g. product_extra_shop)
 *
 * This service is BO-only: it is used exclusively during module install/uninstall flows,
 * which are back-office operations. The Symfony logger is therefore always available.
 */
class ExtraPropertySchemaManager implements \PrestaShop\PrestaShop\Core\ExtraProperty\Schema\ExtraPropertySchemaManagerInterface
{
    public function __construct(protected readonly \Doctrine\DBAL\Connection $connection, protected readonly string $prefix, protected readonly \Psr\Log\LoggerInterface $logger)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function ensureExtraTableAndColumn(\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition $definition): bool
    {
    }
    /**
     * {@inheritdoc}
     */
    public function dropExtraColumnIfExists(\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition $definition): void
    {
    }
    /**
     * Adds a new column to the extra table.
     *
     * @param string $extraTableName Full table name (with prefix)
     * @param string $columnName Column to add
     * @param string $sqlColumnDefinition SQL column definition fragment (from ColumnDefinitionMapper)
     */
    protected function createExtraColumn(string $extraTableName, string $columnName, string $sqlColumnDefinition): void
    {
    }
    /**
     * Synchronises the SQL index on an extra column: drops stale indexes and creates the desired one.
     *
     * @param string $extraTableName Full table name (with prefix)
     * @param string $columnName
     * @param \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertySqlIndex $sqlIndex Desired index strategy
     */
    protected function syncExtraColumnIndex(string $extraTableName, string $columnName, \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertySqlIndex $sqlIndex): void
    {
    }
    /**
     * Brings an existing extra column in line with the declared definition, mirroring
     * syncExtraColumnIndex(): the live column state (SHOW COLUMNS) is compared with the
     * definition and, when they differ, the full column definition is re-applied via
     * ALTER TABLE … MODIFY COLUMN (size, NULL clause, ENUM literals, DEFAULT).
     *
     * Only non-destructive drift is expected here: the registry refuses destructive
     * changes (type/scope change, size decrease, nullable tightening, enum value
     * removal) before any DDL runs.
     *
     * @param string $extraTableName Full table name (with prefix)
     */
    protected function syncExtraColumnDefinition(string $extraTableName, string $columnName, \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition $definition): void
    {
    }
    /**
     * Returns the SHOW COLUMNS row (Field/Type/Null/Default/…) of one column, or null
     * when the table or column cannot be introspected.
     *
     * @param string $extraTableName Full table name (with prefix)
     *
     * @return array<string, mixed>|null
     */
    protected function fetchLiveColumn(string $extraTableName, string $columnName): ?array
    {
    }
    /**
     * Compares the live column (SHOW COLUMNS row) with the declared definition on the
     * syncable aspects: nullability, DEFAULT clause, varchar length (STRING) and ENUM
     * literals (CHOICE). The base type is not compared — type changes are refused by
     * the registry before DDL runs.
     *
     * @param array<string, mixed> $liveColumn SHOW COLUMNS row
     */
    protected function columnMatchesDefinition(array $liveColumn, \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition $definition): bool
    {
    }
    /**
     * Compares the live DEFAULT clause with the definition's defaultValue.
     *
     * MariaDB ≥ 10.2 returns string literals quoted in SHOW COLUMNS (e.g. 'foo') while
     * MySQL returns them bare — surrounding quotes are stripped before comparing.
     * Numeric defaults are compared numerically (e.g. live '1.500000' vs declared 1.5).
     */
    protected function defaultMatches(mixed $liveDefault, \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition $definition): bool
    {
    }
    /**
     * Drops the extra table if all its columns are part of the primary key (i.e. no extra columns remain).
     *
     * @param string $extraTableName Full table name (with prefix)
     */
    protected function dropExtraTableIfEmpty(string $extraTableName): void
    {
    }
    /**
     * Safeguard for multilang-multishop coherence, checked before the extra lang table is
     * first created. The extra table mirrors the base {entity}_lang primary key, so an
     * entity whose ObjectModel class declares `multilang_shop` while its physical lang
     * table's PK carries no id_shop would silently get a NON-shop-aware extra table —
     * its per-shop lang values would then overwrite each other. Such a mismatch is a
     * broken entity definition (module-provided external table): fail registration
     * explicitly instead.
     *
     * Entities without a resolvable ObjectModel class are skipped: the physical schema is
     * then the only source of truth and the mirrored shape is coherent by construction.
     *
     * @throws \PrestaShop\PrestaShop\Core\ExtraProperty\Exception\ExtraPropertyRegistryException when the declaration and the schema disagree
     */
    protected function assertLangBaseTableShopCoherence(\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition $definition, string $baseTableName): void
    {
    }
    /**
     * Creates the extra table by mirroring the primary key columns of the base entity table.
     *
     * @param string $baseTableName Full base table name (with prefix)
     * @param string $extraTableName Full extra table name (with prefix)
     *
     * @throws \PrestaShop\PrestaShop\Core\ExtraProperty\Exception\ExtraPropertyRegistryException if the base table schema cannot be loaded or has no PK
     */
    protected function createExtraTableFromBaseTable(string $baseTableName, string $extraTableName): void
    {
    }
    /**
     * Builds the options array needed by Doctrine's getColumnDeclarationSQL() for a given column.
     *
     * @param \Doctrine\DBAL\Schema\Column $column
     *
     * @return array<string, mixed>
     */
    protected function buildColumnDeclarationOptions(\Doctrine\DBAL\Schema\Column $column): array
    {
    }
    /**
     * @param string $tableName Full table name (with prefix)
     *
     * @return bool
     */
    protected function tableExists(string $tableName): bool
    {
    }
    /**
     * @param string $tableName Full table name (with prefix)
     * @param string $columnName
     *
     * @return bool
     */
    protected function columnExists(string $tableName, string $columnName): bool
    {
    }
    /**
     * @param string $tableName Full table name (with prefix)
     * @param string $indexName
     *
     * @return bool
     */
    protected function indexExists(string $tableName, string $indexName): bool
    {
    }
    /**
     * @param string $tableName Full table name (with prefix)
     * @param string $indexName
     */
    protected function dropIndexIfExists(string $tableName, string $indexName): void
    {
    }
    /**
     * Builds a deterministic index name for an extra column based on table name, column name and index type.
     *
     * @param string $tableName Full table name (with prefix)
     * @param string $columnName
     * @param \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertySqlIndex $sqlIndex
     *
     * @return string
     */
    protected function buildExtraColumnIndexName(string $tableName, string $columnName, \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertySqlIndex $sqlIndex): string
    {
    }
}
