<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Definition;

/**
 * Immutable value object representing an extra property definition.
 *
 * Serves as both the module-facing configuration object (passed to Module::registerExtraProperty())
 * and the internal read DTO (returned by repository methods). All fields use typed Enum values
 * instead of raw strings for type safety and PHPStan coverage.
 *
 * Fields used only at schema-creation time (not persisted in the registry):
 *   - $nullable: NULL vs NOT NULL in the DDL
 *   - $enumValues: ENUM literals for ExtraPropertyType::CHOICE fields
 *
 * Use the static factory ExtraPropertyDefinition::fromRow() to build an instance from a DB row.
 * Use withModuleName() to derive a copy with injected module context.
 *
 * Constructor validation:
 * - entityName and propertyName are required and must be non-empty.
 * - associatedForms: each entry must match "formId[:path[:before|after]]"; no duplicate formId.
 * - associatedGrids: each entry must match "gridId[:columnId[:before|after]]"; no duplicate gridId.
 * - associatedApis: each entry must match "uriPath[:METHOD[,METHOD...]]"; uriPath is the operation URI template.
 * - labelWording is required when associatedForms or associatedGrids is non-empty.
 *
 * @see ExtraPropertyRegistryInterface::register()
 * @see \PrestaShop\PrestaShop\Core\ExtraProperty\Schema\ColumnDefinitionMapper
 */
final class ExtraPropertyDefinition
{
    /**
     * Module-name key used in grouped arrays for fields that have no owning module (core fields).
     */
    public const CORE_MODULE_KEY = '_core';
    /**
     * @param string $entityName Entity table name (e.g. 'product'). Required — must be non-empty. Normalized to lower snake_case at construction.
     * @param string $propertyName Property name as declared by the module (e.g. 'video_link'). Required.
     * @param ExtraPropertyType $type Field storage type. Determines the SQL column type via ColumnDefinitionMapper.
     * @param ExtraPropertyScope $scope Storage scope: COMMON (entity-level), LANG (per-language), SHOP (per-shop)
     * @param string|null $moduleName Owning module name. Null = core field ('' and '_core' are normalized to null). Auto-populated by Module::registerExtraProperty().
     * @param list<string>|null $enumValues For CHOICE type: SQL ENUM allowed values. Not persisted — schema creation only.
     * @param scalar|null $defaultValue Adds a DEFAULT clause in DDL. Also persisted in registry.
     * @param bool $nullable Controls NULL vs NOT NULL in DDL. Not persisted — schema creation only.
     * @param bool $required when true, marks the field as required in BO forms and in the Admin API (OpenAPI) schema
     * @param int|null $size for STRING type: varchar column length (defaults to 255)
     * @param ExtraPropertySqlIndex $sqlIndex SQL index strategy on the storage column
     * @param bool $displayFront allow this field to be exposed in front-office presenters
     * @param list<string>|null $associatedForms Form placement entries: "formId[:path[:before|after]]". Each formId must be unique.
     * @param list<string>|null $associatedGrids Grid placement entries: "gridId[:columnId[:before|after]]". Each gridId must be unique.
     * @param list<string>|null $associatedApis Admin API placement entries: "uriPath[:METHOD[,METHOD...]]", matched against the operation URI template (+ optional HTTP methods). No method modifier matches every method.
     * @param string|null $formType fully-qualified Symfony Form type FQCN override for BO forms
     * @param array<string, mixed>|null $formOptions extra options passed verbatim to the Symfony form type constructor
     * @param list<\Symfony\Component\Validator\Constraint>|null $constraints Symfony validation constraints applied to each value before persistence. Null/empty means no validation. Must be serializable (no Callback with a closure).
     * @param string|null $labelWording Translation wording key shown in BO. Required when associatedForms or associatedGrids is set.
     * @param string|null $labelDomain translation domain for label wording
     * @param string|null $descriptionWording translation wording key shown as BO help text
     * @param string|null $descriptionDomain translation domain for description wording
     * @param bool|null $multiShop Whether values are stored per shop (the storage table carries an id_shop column). Not persisted — the live storage table schema is the source of truth (see ExtraPropertyDefinitionRepository::enrichRowsWithColumnMetadata()). Null = not introspected yet; isMultiShop() then falls back to the scope's structural default (SHOP → true, COMMON/LANG → false).
     * @param list<int>|null $associatedShopIds Shops this definition is restricted to, persisted in the extra_property_definition_shop association table by the repository's save(). Null = no information — the stored association is left untouched on save, so a module re-registering without shop data cannot clobber a BO-configured restriction; [] = clear the stored association (revert to fallback); non-empty = explicit restriction. Without explicit rows, core-owned definitions apply to all shops and module-owned definitions follow their module's enabled shops (see isAvailableForShops()).
     * @param string|null $tableName Physical entity table (without DB prefix). Usually omitted — deduced from the entity name (see the $tableName property docblock). Explicit value = escape hatch for third-party ObjectModels whose entity name differs from their table.
     * @param string|null $primaryKeyName Entity primary key column. Usually omitted — deduced from the ObjectModel class or the 'id_' + entityName convention; the repository injects the introspected live value at hydration.
     * @param string|null $controllerName BO controller name used as the permission subject (e.g. grid toggle). Usually omitted — deduced from the entity name (irregular-tab map, then 'Admin' + pluralized entity). Explicit value = escape hatch for third-party entities whose BO tab breaks the convention; a value equal to the deduction collapses to null (only genuine overrides are kept and persisted).
     *
     * @throws \PrestaShop\PrestaShop\Core\ExtraProperty\Exception\InvalidExtraPropertyDefinitionException when entityName or propertyName is empty or not a valid SQL identifier, when tableName/primaryKeyName is given but not a valid SQL identifier, when associatedForms/associatedGrids have invalid format or duplicates, when labelWording is missing despite being required, or when the computed storage column name exceeds 64 characters
     */
    public function __construct(string $entityName, protected readonly string $propertyName, protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyType $type = \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyType::STRING, protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyScope $scope = \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyScope::COMMON, ?string $moduleName = null, protected readonly ?array $enumValues = null, protected readonly int|float|string|bool|null $defaultValue = null, protected readonly bool $nullable = true, protected readonly bool $required = false, protected readonly ?int $size = null, protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertySqlIndex $sqlIndex = \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertySqlIndex::NONE, protected readonly bool $displayFront = false, protected readonly ?array $associatedForms = null, protected readonly ?array $associatedGrids = null, protected readonly ?array $associatedApis = null, protected readonly ?string $formType = null, protected readonly ?array $formOptions = null, protected readonly ?array $constraints = null, protected readonly ?string $labelWording = null, protected readonly ?string $labelDomain = null, protected readonly ?string $descriptionWording = null, protected readonly ?string $descriptionDomain = null, protected readonly ?bool $multiShop = null, ?array $associatedShopIds = null, ?string $tableName = null, ?string $primaryKeyName = null, ?string $controllerName = null)
    {
    }
    /**
     * nullable and enumValues are not persisted in the registry table: the live DB schema of
     * the storage column is their source of truth. The repository injects them into the row
     * under the synthetic 'nullable' and 'enum_values' keys (see
     * ExtraPropertyDefinitionRepository::enrichRowsWithColumnMetadata()). When the keys are
     * absent (e.g. storage column not created yet), safe defaults apply (nullable, no enum).
     *
     * @param array<string, mixed> $row
     *
     * @throws \PrestaShop\PrestaShop\Core\ExtraProperty\Exception\InvalidExtraPropertyDefinitionException when entityName or propertyName is empty in the row
     */
    public static function fromRow(array $row): self
    {
    }
    // -------------------------------------------------------------------------
    // Copy-with methods
    // -------------------------------------------------------------------------
    /**
     * Returns a copy of this definition with the given module name set.
     *
     * Used by Module::registerExtraProperty() to inject the calling module's name
     * when moduleName was left null by the developer.
     */
    public function withModuleName(string $moduleName): self
    {
    }
    /**
     * Returns a copy of this definition with the given fields overridden.
     *
     * Used by BO registry handlers to apply command overrides onto a freshly loaded
     * definition without re-listing every untouched field. Keys match constructor
     * parameter names; absent keys keep their current value (checked via array_key_exists
     * so an override can legitimately be set back to null).
     *
     * @param array<string, mixed> $overrides
     */
    public function withOverrides(array $overrides): self
    {
    }
    // -------------------------------------------------------------------------
    // Getters
    // -------------------------------------------------------------------------
    /**
     * Logical entity name — always lower snake_case, canonical spelling (normalized at
     * construction). Use getTableName() for anything that becomes SQL.
     */
    public function getEntityName(): string
    {
    }
    /**
     * Physical entity table name (without DB prefix) — see the $tableName property
     * docblock for the resolution rules. Equals getEntityName() for conventional
     * entities; differs for irregular ones ('combination' → 'product_attribute').
     */
    public function getTableName(): string
    {
    }
    /**
     * Returns the primary key column name of the entity — also the FK column of the
     * *_extra tables. Resolution: introspected/explicit value (see the $primaryKeyName
     * property docblock) → the 'id_' + entityName naming convention. Centralized so
     * callers holding a definition never build it manually.
     */
    public function getPrimaryKeyName(): string
    {
    }
    /**
     * BO controller name of the entity — the permission subject for any employee-permission
     * check tied to this definition (e.g. the grid toggle endpoint). Resolution: explicit
     * override (see the $controllerName property docblock) → ENTITY_CONTROLLER_NAMES map for
     * irregular tabs → 'Admin' + pluralized classified entity name. A resolved name matching
     * no existing tab is DENY-safe: Access::isGranted() grants nothing for unknown subjects.
     */
    public function getControllerName(): string
    {
    }
    /**
     * The raw controller name OVERRIDE — null for every definition following the deduction
     * (the constructor collapses a matching explicit value). This is what the repository
     * persists in the controller_name column; use getControllerName() for the resolved value.
     */
    public function getControllerNameOverride(): ?string
    {
    }
    /**
     * Owning module technical name — always null for core fields (normalized at construction).
     */
    public function getModuleName(): ?string
    {
    }
    /**
     * Returns true when this definition is owned by a module (as opposed to a core field).
     * Module-owned definitions are read-only from the BO registry management UI.
     */
    public function isModuleOwned(): bool
    {
    }
    public function getPropertyName(): string
    {
    }
    public function getType(): \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyType
    {
    }
    public function getScope(): \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyScope
    {
    }
    /**
     * @return list<string>|null
     */
    public function getAssociatedApis(): ?array
    {
    }
    /**
     * Returns the parsed Admin API placement entries.
     *
     * @return list<array{path: string, methods: list<string>|null}>
     */
    public function getApiEntries(): array
    {
    }
    /**
     * Returns true when this definition targets the given Admin API operation, identified by its
     * URI template and HTTP method. Matching is purely URI-template based, so a definition never
     * leaks onto a resource it does not explicitly list. An entry with no method modifier matches
     * every HTTP method on that template.
     */
    public function matchesApi(string $uriTemplate, string $method): bool
    {
    }
    public function isDisplayFront(): bool
    {
    }
    public function isRequired(): bool
    {
    }
    public function isNullable(): bool
    {
    }
    /**
     * Whether values of this property are stored per shop, i.e. the storage table carries
     * an id_shop column. SHOP scope is per-shop by construction ({entity}_extra_shop mirrors
     * the {entity}_shop PK); LANG scope depends on the base {entity}_lang table shape — only
     * multilang-multishop entities (product, category, …) have id_shop there, so consumers
     * (reader, writer, grid joins) must NOT reference id_shop when this returns false.
     *
     * Deduced from the live storage table schema by the repository (synthetic 'multi_shop'
     * row key); when not introspected yet, falls back to the scope's structural default.
     */
    public function isMultiShop(): bool
    {
    }
    /**
     * Shops this definition is explicitly restricted to, or null when it has no explicit
     * restriction ([] is the transient write-time "clear" marker — see the property
     * docblock). Distinct from isMultiShop(), which describes how VALUES are stored:
     * this field describes on which shops the definition exists at all — a COMMON-scope
     * definition can be restricted to specific shops (the restriction is then pure
     * visibility, since its single storage row is shared by every shop).
     *
     * @return list<int>|null
     */
    public function getAssociatedShopIds(): ?array
    {
    }
    /**
     * Returns true when this definition is available for at least one of the given shops.
     *
     * Availability rules:
     *  - explicit restriction set → available when it intersects $shopIds;
     *  - no restriction, core-owned → available everywhere;
     *  - no restriction, module-owned → follows the owning module's enabled shops
     *    ($moduleShopIds): an empty list means "the module is enabled on other shops
     *    only" and excludes the definition, while null means "unknown or no shop rows
     *    at all" and is treated as unrestricted — registration runs during install(),
     *    before the module is enabled on any shop, so absence of data must not hide
     *    the definition (same degenerate rule as
     *    ExtraPropertyWriter::filterShopScopeByAssociations()).
     *
     * Pure array logic — resolving a ShopConstraint to shop ids and loading the module
     * association is the job of ExtraPropertyDefinitionShopFilter.
     *
     * @param list<int> $shopIds shops in the current scope
     * @param list<int>|null $moduleShopIds shops the owning module is enabled on, restricted or not to $shopIds
     *                                      (ignored for core-owned definitions); null = unknown/unrestricted
     */
    public function isAvailableForShops(array $shopIds, ?array $moduleShopIds = null): bool
    {
    }
    /**
     * @return list<\Symfony\Component\Validator\Constraint>|null
     */
    public function getConstraints(): ?array
    {
    }
    public function getFormType(): ?string
    {
    }
    /**
     * @return array<string, mixed>|null
     */
    public function getFormOptions(): ?array
    {
    }
    public function getSize(): ?int
    {
    }
    public function getSqlIndex(): \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertySqlIndex
    {
    }
    /**
     * @return list<string>|null
     */
    public function getEnumValues(): ?array
    {
    }
    public function getDefaultValue(): int|float|string|bool|null
    {
    }
    public function getLabelWording(): ?string
    {
    }
    public function getLabelDomain(): ?string
    {
    }
    public function getDescriptionWording(): ?string
    {
    }
    public function getDescriptionDomain(): ?string
    {
    }
    /**
     * @return list<string>|null
     */
    public function getAssociatedForms(): ?array
    {
    }
    /**
     * Returns the fully-resolved placement entry for a specific form, or null if not associated.
     *
     * @return array{formId: string, mode: 'before'|'after'|null, path: string|null, anchor: string|null}|null
     */
    public function getFormEntry(string $formId): ?array
    {
    }
    /**
     * @return list<string>|null
     */
    public function getAssociatedGrids(): ?array
    {
    }
    /**
     * Returns the parsed placement entry for a specific grid, or null if not associated.
     *
     * @return array{gridId: string, columnId: string|null, mode: 'before'|'after'|null}|null
     */
    public function getGridEntry(string $gridId): ?array
    {
    }
    // -------------------------------------------------------------------------
    // Naming helpers
    // -------------------------------------------------------------------------
    /**
     * Returns the physical SQL storage column name for this definition.
     */
    public function getStorageColumnName(): string
    {
    }
    /**
     * The property's flat field identifier, used identically by the back-office form (field name), the grid
     * (column id / SELECT alias) and the Admin API (inline list key).
     *
     * A property is unique per module + property name, so the scope is intentionally not part of it — keeping
     * identifiers short and predictable.
     */
    public function getFieldName(): string
    {
    }
    /**
     * Returns the module key used in grouped extra-property arrays: the module
     * technical name, or the canonical '_core' key for core fields.
     */
    public function getNormalizedModuleKey(): string
    {
    }
    /**
     * Returns the name of the extra value table (without DB prefix) for this definition's
     * scope — always built from the PHYSICAL table name, so extra tables sit next to the
     * base table they mirror ('combination' definitions store in product_attribute_extra).
     */
    public function getExtraTableName(): string
    {
    }
    /**
     * Returns the name of the base entity table (without DB prefix) for this definition's scope.
     *
     * Used by SchemaManager to verify the base table exists before creating the extra table.
     * LANG scope → {table}_lang, SHOP scope → {table}_shop, COMMON → {table}.
     */
    public function getBaseTableName(): string
    {
    }
    /**
     * Returns the extra value table name for a given entity TABLE and scope.
     *
     * $tableName is the physical table (ObjectModel $definition['table'], or the stored
     * table_name registry column) — never the logical entity name, which may differ for
     * irregular entities. Prefer getExtraTableName() whenever a definition instance is
     * available. Use this static version only when none exists:
     * ExtraPropertyWriter::deleteAll() (sweeps all scope tables regardless of registered
     * definitions; its caller passes the ObjectModel table) and
     * ExtraPropertyDefinitionRepository::enrichRowsWithColumnMetadata() (runs on raw rows
     * before definitions can be constructed; reads the stored table_name).
     *
     * @return string e.g. 'product_extra', 'product_extra_lang', 'product_extra_shop'
     */
    public static function buildExtraTableName(string $tableName, \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyScope $scope): string
    {
    }
    /**
     * Returns the storage column name for a given module and property name.
     *
     * Prefer getStorageColumnName() whenever a definition instance is available. Use this
     * static version only when none exists:
     * ExtraPropertyDefinitionRepository::enrichRowsWithColumnMetadata() (runs on raw rows
     * before definitions can be constructed).
     */
    public static function buildStorageColumnName(?string $moduleName, string $propertyName): string
    {
    }
}
