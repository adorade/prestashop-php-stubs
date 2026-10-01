<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Definition;

/**
 * Reads and writes extra property definitions in the extra_property_definition registry table.
 *
 * This implementation does not add any caching; wrap with Definition\CachedExtraPropertyDefinitionRepository
 * for production use.
 *
 * All public read methods return typed ExtraPropertyDefinition value objects or collections.
 */
class ExtraPropertyDefinitionRepository implements \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionRepositoryInterface, \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionWriterInterface
{
    /**
     * Rejections already reported by this instance, keyed by definition id and raw stored value.
     *
     * A row is hydrated many times per request (full list, by id, cache rebuild) and would otherwise
     * produce one log entry each time. The key is marked BEFORE the logger is called: a logger that
     * persists through an ObjectModel (the legacy logger writes ps_log) may hydrate the definitions
     * itself, which decodes this very row again. Finding it already marked ends that recursion.
     *
     * @var array<string, true>
     */
    protected array $reportedRejections = [];
    public function __construct(protected readonly \Doctrine\DBAL\Connection $connection, protected readonly string $prefix, protected readonly \Psr\Log\LoggerInterface $logger)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getAllDefinitions(): \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionCollection
    {
    }
    /**
     * Hydrates one registry row into a definition, or skips it (returns null) when the row
     * cannot be trusted — an invalid enum/type/scope value, an identifier that no longer
     * passes the value-object contract, etc.
     *
     * Defence in depth, and the read-side counterpart of the write-time validation: this
     * repository feeds every request (Admin API responses, BO grids/forms, front-office
     * reads), so a single corrupt or tampered row — data drift, a downgrade, or a direct
     * DB write bypassing the registry — must degrade to "this definition is ignored"
     * instead of throwing and taking the whole page or endpoint down. A dropped row is
     * logged once per id so a persistent bad row cannot flood the log.
     *
     * @param array<string, mixed> $row
     */
    protected function hydrateRowSafely(array $row): ?\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition
    {
    }
    /**
     * {@inheritdoc}
     */
    public function findDefinitionByModuleAndField(string $entityName, ?string $moduleName, string $fieldName): ?\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDefinitionById(int $id): ?\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getUnprotectedDefinitionById(int $id): \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition
    {
    }
    /**
     * {@inheritdoc}
     */
    public function save(\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition $definition): int|false
    {
    }
    /**
     * Persists the definition's shop association as part of save() — the definition is
     * the single write path for the association — honoring the associatedShopIds
     * tri-state (see the ExtraPropertyDefinition property docblock): null = no
     * information, the stored association is left untouched — so a module re-registering
     * its definition without shop data cannot clobber a BO-configured restriction;
     * [] or a list = the stored extra_property_definition_shop rows are replaced
     * ([] deletes them all, reverting to the fallback behavior).
     *
     * The ids are written as-is (no FK on the table): their existence is validated
     * upstream by ExtraPropertyRegistry::register(), the single definition write
     * choke point, before any DDL or row write.
     */
    protected function persistShopAssociation(int $definitionId, \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition $definition): void
    {
    }
    /**
     * {@inheritdoc}
     */
    public function delete(int $id): bool
    {
    }
    /**
     * {@inheritdoc}
     */
    public function deleteByDefinition(\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition $definition): bool
    {
    }
    /**
     * Looks up the primary key for a definition identified by its unique key
     * (entity + module + property — unique across scopes).
     *
     * Returns null when no matching row exists.
     */
    protected function findIdByUniqueKey(string $entityName, ?string $moduleName, string $propertyName): ?int
    {
    }
    /**
     * Applies a WHERE clause for module_name on a query builder.
     *
     * Uses `module_name IS NULL` for core fields (null/empty) since SQL `= NULL` never matches.
     *
     * @param \Doctrine\DBAL\Query\QueryBuilder $qb Query builder to modify in place
     * @param string|null $moduleName Module name, or null/'' for core fields
     * @param string $alias Optional table alias prefix (e.g. 'eef' → 'eef.module_name')
     */
    protected function applyModuleNameFilter(\Doctrine\DBAL\Query\QueryBuilder $qb, ?string $moduleName, string $alias = ''): void
    {
    }
    /**
     * Replaces the raw 'constraints' cell of each row by the decoded constraint objects.
     *
     * Reading stays fail-safe: an unreadable constraint is dropped and logged, never thrown, because
     * definitions are hydrated on front-office requests too — a corrupt or tampered row must not take
     * a page down. Writing is the opposite: save() refuses to persist what it cannot encode.
     *
     * @param array<int, array<string, mixed>> $rows
     *
     * @return array<int, array<string, mixed>>
     */
    protected function enrichRowsWithDecodedConstraints(array $rows): array
    {
    }
    /**
     * Enriches registry rows with the synthetic 'nullable', 'enum_values' and 'multi_shop'
     * keys, deduced from the live DB structure of each definition's storage table/column.
     * These attributes are not persisted in the registry table: the extra table schema is
     * their source of truth (NULL/NOT NULL clause, ENUM literals for CHOICE columns,
     * presence of an id_shop column for per-shop storage).
     *
     * One SHOW COLUMNS query per distinct extra table; getAllDefinitions() results are cached
     * by CachedExtraPropertyDefinitionRepository, so the introspection cost is amortized.
     * Rows whose storage column does not exist (yet) are left untouched — fromRow() then
     * applies its safe defaults (nullable, no enum).
     *
     * @param array<int, array<string, mixed>> $rows
     *
     * @return array<int, array<string, mixed>>
     */
    protected function enrichRowsWithColumnMetadata(array $rows): array
    {
    }
    /**
     * Enriches registry rows with the synthetic 'associated_shop_ids' key, loaded from the
     * extra_property_definition_shop association table. Like 'multi_shop', it is not a registry
     * column — fromRow() consumes it to expose ExtraPropertyDefinition::getAssociatedShopIds().
     * Rows without association rows are left untouched (null = no explicit restriction, see
     * ExtraPropertyDefinition::isAvailableForShops()).
     *
     * One query for the whole batch, keyed on the rows' primary keys.
     *
     * @param array<int, array<string, mixed>> $rows
     *
     * @return array<int, array<string, mixed>>
     */
    protected function enrichRowsWithShopAssociations(array $rows): array
    {
    }
    /**
     * Introspects an extra table and returns nullability + ENUM literals per column.
     *
     * Returns an empty array when the table does not exist (no extra property value was
     * ever registered for that entity/scope combination yet).
     *
     * @param string $tableName Full table name (with prefix)
     *
     * @return array<string, array{nullable: bool, enum_values: list<string>|null, primary: bool}> keyed by column name
     */
    protected function fetchColumnMetadata(string $tableName): array
    {
    }
}
