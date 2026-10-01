<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Definition;

/**
 * Write-only registry implementation: register/unregister extra property definitions.
 *
 * Orchestrates:
 *   - ExtraPropertyDefinitionRepositoryInterface (read) for pre-flight existence checks
 *   - ExtraPropertyDefinitionWriterInterface for definition persistence (save/delete)
 *   - ExtraPropertySchemaManagerInterface for DDL on *_extra / *_extra_lang / *_extra_shop tables
 *
 * Cache invalidation is not handled here: the injected definition writer
 * (CachedExtraPropertyDefinitionRepository in production) invalidates the
 * definitions cache on every save/delete.
 */
class ExtraPropertyRegistry implements \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyRegistryInterface
{
    public function __construct(
        protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionRepositoryInterface $readRepository,
        protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionWriterInterface $writeRepository,
        protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Schema\ExtraPropertySchemaManagerInterface $schemaManager,
        protected readonly \Psr\Log\LoggerInterface $logger,
        // Required: the registry is only defined in Symfony kernels (services/extra_property/backend.yml),
        // where the form factory is always available — never in the FO legacy container.
        protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Form\FormOptionsValidator $formOptionsValidator,
        protected readonly \PrestaShop\PrestaShop\Adapter\Shop\Repository\ShopRepository $shopRepository
    )
    {
    }
    /**
     * {@inheritdoc}
     *
     * Constructor-level validations (entityName, propertyName, associatedForms/Grids format,
     * labelWording, moduleName format, storageColumnName length) are enforced by ExtraPropertyDefinition itself.
     *
     * The registry additionally validates:
     * - scope-uniqueness: a module cannot register the same propertyName in two different scopes for the same entity
     * - destructive schema changes on already-registered definitions are refused (see hasStorageChanges())
     * - formType/formOptions must build a working form field (see FormOptionsValidator) — being the single
     *   write choke point, this covers every path: BO form, CQRS commands and Module::registerExtraProperty()
     * - every shop id in the shop association must exist (the association rows carry no foreign key)
     *
     * Non-destructive schema changes (defaultValue change, STRING size increase, nullable
     * relaxing, CHOICE enum value addition) are applied to the live column by the schema
     * manager: ensureExtraTableAndColumn() syncs the column definition the same way it
     * syncs the index.
     *
     * Operation order: validate changes → create/alter DDL → persist to DB. DDL runs FIRST
     * on purpose: MySQL/MariaDB DDL statements trigger an implicit commit, so a transaction
     * wrapping "row write + DDL" could never roll the row back once the DDL ran. Ordering the
     * single row write last gives the equivalent guarantees instead:
     *   - creation failure persists nothing (no orphan definition row);
     *   - update DDL failure leaves the previous definition row intact;
     *   - a row-write failure after DDL on a CREATION removes the column it just added
     *     (best-effort compensation, gated on the column having actually been added by this
     *     call so pre-existing data is never dropped);
     *   - a row-write failure after DDL on an UPDATE leaves the column synced — harmless,
     *     a retry of register() re-attempts the row write (save() is idempotent).
     * Destructive changes (type/scope change, size decrease, nullable tightening, enum value
     * removal) require unregister() + register() — automatic data migration is not supported.
     *
     * @throws \PrestaShop\PrestaShop\Core\ExtraProperty\Exception\ExtraPropertyRegistryException the failure reason is carried by the exception code:
     *                                        SCOPE_CONFLICT, DESTRUCTIVE_SCHEMA_CHANGE, INVALID_FORM_OPTIONS, INVALID_CONSTRAINTS,
     *                                        UNKNOWN_SHOP, BASE_TABLE_NOT_FOUND, SCHEMA_FAILURE or
     *                                        PERSISTENCE_FAILURE
     */
    public function register(\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition $definition): int
    {
    }
    /**
     * {@inheritdoc}
     *
     * The stored definition is resolved first (entity + module + property are unique
     * across scopes) and used for both the DDL drop and the registry deletion, so the
     * caller's definition does not need an accurate scope (a wrong scope would
     * otherwise target the wrong *_extra table for the column drop).
     *
     * Operation order: delete the registry row FIRST, drop the column second. A failed
     * column drop then leaves a benign unreferenced column (the definition is already
     * gone, readers never see it) instead of a broken definition pointing at a missing
     * column. Trade-off: retrying unregister() after a failed drop is a no-op (no stored
     * row anymore), the column has to be removed manually — the thrown exception says so.
     *
     * @throws \PrestaShop\PrestaShop\Core\ExtraProperty\Exception\ExtraPropertyRegistryException code PERSISTENCE_FAILURE when deleting the definition row fails,
     *                                        SCHEMA_FAILURE when dropping the column fails (the row is already removed)
     */
    public function unregister(\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition $definition, bool $dropColumn = false): void
    {
    }
    /**
     * Whether the declared defaultValue can actually serve as a default of the declared
     * type — the SAME isValueCompatible() rule-set the validator applies to every regular
     * write, so what is refused as a value is refused as a default and vice versa (only
     * literal datetimes for DATE, no 'tomorrow'; numeric strings for INT/FLOAT; enum
     * membership for CHOICE; valid JSON…). Only the failure handling differs: here it is
     * the INVALID_DEFAULT_VALUE registration error.
     */
    protected function isDefaultValueCompatible(\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition $definition): bool
    {
    }
    /**
     * Returns true when $incoming would change the column schema in a DESTRUCTIVE way,
     * i.e. a change that risks data already stored in the extra column:
     *   - type or scope change (data conversion / storage table move)
     *   - physical table change (a different explicit tableName): the definition would
     *     silently relocate to another {table}_extra, orphaning every stored value
     *   - STRING size decrease — truncation risk; effective lengths compared (null ≡ 255)
     *   - nullable tightening (NULL → NOT NULL): existing NULL rows would break the ALTER
     *   - CHOICE enum value removal, or switching between ENUM and the VARCHAR fallback:
     *     values already stored would no longer fit the column
     *
     * Non-destructive changes (defaultValue change, size increase, nullable relaxing, enum
     * value addition) are NOT flagged: the schema manager syncs them onto the live column —
     * see ExtraPropertySchemaManager::syncExtraColumnDefinition(). Display flags, labels,
     * form options, placements, and index type are always freely mutable.
     *
     * nullable / enumValues on $existing are deduced from the live column schema by the
     * repository, so the comparison reflects the actual DDL state.
     */
    protected function hasStorageChanges(\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition $incoming, \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition $existing): bool
    {
    }
}
