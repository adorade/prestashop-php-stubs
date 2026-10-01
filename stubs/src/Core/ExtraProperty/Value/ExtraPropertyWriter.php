<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Value;

/**
 * Writes extra property values into the *_extra / *_extra_lang / *_extra_shop tables.
 *
 * Callers pass values grouped the same way the reader returns them
 * ([moduleKey => [propertyName => value]]); the writer resolves each property's
 * definition and routes the value to the table matching its scope. Storage column
 * names never leave the storage layer.
 *
 * All writes use UPSERT (INSERT … ON DUPLICATE KEY UPDATE) to handle the case where
 * a row may or may not already exist.
 *
 * Per-shop values (SHOP scope, and LANG scope on multilang-multishop entities) follow the
 * ShopConstraint the same way native ObjectModel fields follow the legacy shop context:
 * a non-single constraint (shop group, all shops, collection) fans out to one row per shop
 * in its scope, so a broad edit updates every covered shop instead of being dropped.
 * SHOP-scope rows additionally follow the native association rule — broad scopes only
 * refresh shops the entity is associated with, explicitly named shops always get their
 * row — while LANG rows cover the full scope like native lang-multishop writes do.
 * Fan-out writes are batched into one multi-row UPSERT per table.
 *
 * DEFINITION-level shop availability (extra_property_definition_shop + module fallback,
 * see ExtraPropertyDefinition::isAvailableForShops()) is enforced on top of all of this:
 * a definition not available anywhere in the constraint's scope is skipped entirely, and
 * per-shop rows (SHOP scope, multishop LANG) only fan out to the shops each definition is
 * available for — unlike the entity association rule above, this applies to LANG rows too
 * (definition availability is a different axis: the reader never surfaces a value on a
 * shop the definition does not exist for, so such rows would be unreadable garbage).
 */
class ExtraPropertyWriter implements \PrestaShop\PrestaShop\Core\ExtraProperty\Value\ExtraPropertyWriterInterface
{
    public function __construct(protected readonly \Doctrine\DBAL\Connection $connection, protected readonly string $prefix, protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionRepositoryInterface $definitionRepository, protected readonly \PrestaShop\PrestaShop\Core\Shop\ShopListResolverInterface $shopListResolver, protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionShopFilterInterface $definitionShopFilter)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function writeAll(string $tableName, string $primaryKeyName, int $entityId, array $valuesByModule, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint, ?int $defaultLangId = null): void
    {
    }
    /**
     * {@inheritdoc}
     */
    public function toggleExtraProperty(\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition $definition, int $entityId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint, ?int $langId = null): void
    {
    }
    /**
     * Reads the current boolean value of one storage row. A missing row or a NULL value
     * reads as false (the toggle target is then "enabled").
     *
     * @param array<string, int> $keyColumns Additional key columns pinning the row (id_shop / id_lang)
     */
    protected function fetchCurrentBoolValue(string $fullTableName, string $primaryKeyName, int $entityId, array $keyColumns, string $columnName): bool
    {
    }
    /**
     * Native-parity association filter for SHOP-scope rows: a broad constraint (shop group,
     * all shops) only refreshes the shops the entity is associated with in {entity}_shop —
     * like ObjectModel::update(), which never creates {entity}_shop rows in those contexts —
     * while explicitly named shops (single-shop constraint, ShopCollection) are always
     * written, like native CONTEXT_SHOP / $id_shop_list inserts. Entities without a
     * {entity}_shop association table keep the full scope.
     *
     * @param int[] $shopIds The constraint's resolved scope
     *
     * @return int[]
     */
    protected function filterShopScopeByAssociations(string $tableName, string $primaryKeyName, int $entityId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint, array $shopIds): array
    {
    }
    /**
     * {@inheritdoc}
     */
    public function deleteAll(string $tableName, string $primaryKeyName, int $entityId): void
    {
    }
    /**
     * {@inheritdoc}
     */
    public function deleteForShops(string $tableName, string $primaryKeyName, int $entityId, array $shopIds): void
    {
    }
    /**
     * Writes common-scope (entity-level) values for one entity instance.
     *
     * @param string $extraTableName Extra table name without DB prefix (from ExtraPropertyDefinition::getExtraTableName())
     * @param array<string, mixed> $columnValues
     */
    protected function writeCommon(string $extraTableName, string $primaryKeyName, int $entityId, array $columnValues): void
    {
    }
    /**
     * Writes lang-scope values for one entity instance: one row per language, times one
     * per shop when the lang table is shop-aware — batched into a single multi-row UPSERT
     * per distinct column set (an all-shops save is one statement, not shops × languages
     * round trips). Languages carrying different column sets (a value provided for some
     * languages only) get their own statement so absent columns are never overwritten.
     *
     * @param string $extraTableName Extra table name without DB prefix (from ExtraPropertyDefinition::getExtraTableName())
     * @param int[]|null $shopIds Shops the rows belong to; null when the entity's lang table has no id_shop column
     * @param array<int, array<string, mixed>> $langValuesByIdLang [idLang => ['column' => value]]
     */
    protected function writeLang(string $extraTableName, string $primaryKeyName, int $entityId, ?array $shopIds, array $langValuesByIdLang): void
    {
    }
    /**
     * Writes shop-scope values for one entity instance: one row per shop, batched into a
     * single multi-row UPSERT.
     *
     * @param string $extraTableName Extra table name without DB prefix (from ExtraPropertyDefinition::getExtraTableName())
     * @param int[] $shopIds
     * @param array<string, mixed> $columnValues
     */
    protected function writeShop(string $extraTableName, string $primaryKeyName, int $entityId, array $shopIds, array $columnValues): void
    {
    }
    /**
     * Builds a (multi-row) INSERT … ON DUPLICATE KEY UPDATE statement.
     *
     * $systemColumns are fixed keys inserted before the data columns (e.g. id_shop, id_lang).
     * Callers must pass parameters row by row, each row in order: entityId, systemColumn
     * values, then data values.
     *
     * @param string[] $systemColumns Fixed system key column names (order matters for bindings)
     * @param string[] $dataColumns Data column names (order matters for bindings)
     * @param int $rowCount Number of value rows the statement covers
     */
    protected function buildUpsertSql(string $fullTableName, string $primaryKeyName, array $systemColumns, array $dataColumns, int $rowCount = 1): string
    {
    }
}
