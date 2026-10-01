<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Definition;

/**
 * Immutable, iterable collection of extra property definitions.
 *
 * Each item is a typed ExtraPropertyDefinition value object.
 * Provides fluent helpers for filtering and inspection without modifying the original data.
 *
 * @implements \IteratorAggregate<int, ExtraPropertyDefinition>
 */
final class ExtraPropertyDefinitionCollection implements \Countable, \IteratorAggregate
{
    /**
     * @param list<ExtraPropertyDefinition> $definitions
     */
    public function __construct(array $definitions)
    {
    }
    /**
     * Returns the shared empty collection instance (singleton).
     *
     * Reusing a single instance avoids repeated allocations in the common case
     * where an entity has no extra properties registered.
     */
    public static function empty(): self
    {
    }
    // -------------------------------------------------------------------------
    // Countable / IteratorAggregate
    // -------------------------------------------------------------------------
    public function count(): int
    {
    }
    /**
     * @return \Traversable<int, ExtraPropertyDefinition>
     */
    public function getIterator(): \Traversable
    {
    }
    // -------------------------------------------------------------------------
    // Inspection helpers
    // -------------------------------------------------------------------------
    public function isEmpty(): bool
    {
    }
    /**
     * Returns the first definition, or null when the collection is empty.
     *
     * @return ExtraPropertyDefinition|null
     */
    public function first(): ?\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition
    {
    }
    // -------------------------------------------------------------------------
    // Filtering (return new immutable instances)
    // -------------------------------------------------------------------------
    /**
     * Returns a new collection filtered to the given module.
     *
     * Pass null to get core (no-module) definitions.
     * Pass '_core' as a string alias for core fields.
     *
     * @param string|null $moduleName Module technical name, or null/'_core'/'' for core fields
     */
    public function filterByModuleName(?string $moduleName): self
    {
    }
    /**
     * Returns a new collection filtered to the given scope.
     */
    public function filterByScope(\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyScope $scope): self
    {
    }
    /**
     * Returns a new collection filtered to the given LOGICAL entity name.
     *
     * Useful when a collection groups definitions from multiple entities. Callers
     * holding an ObjectModel table name ($definition['table']) must use
     * filterByTableName() instead — the two differ for irregular entities
     * ('combination' vs 'product_attribute').
     *
     * @param string $entityName Logical entity name (e.g. 'product', 'combination')
     */
    public function filterByEntity(string $entityName): self
    {
    }
    /**
     * Returns a new collection filtered to the given PHYSICAL entity table.
     *
     * The ObjectModel/FO path identifies an entity by its table
     * (ObjectModel::$definition['table'], e.g. 'product_attribute' for Combination):
     * this filter matches it against the definitions' resolved table name.
     *
     * @param string $tableName Entity table name without prefix (e.g. 'product_attribute')
     */
    public function filterByTableName(string $tableName): self
    {
    }
    /**
     * Returns a new collection containing only definitions associated with the given form ID.
     *
     * @param string $formId Form identifier (usually equals form block_prefix, e.g. 'category')
     */
    public function filterByForm(string $formId): self
    {
    }
    /**
     * Returns a new collection containing only definitions associated with the given grid ID.
     *
     * A definition is included when any of its associated_grids entries targets $gridId,
     * using the "gridId[.columnId[:before|after]]" format.
     *
     * @param string $gridId Grid identifier (e.g. 'product', 'customer')
     */
    public function filterByGrid(string $gridId): self
    {
    }
    /**
     * Filters definitions eligible for front-office display.
     *
     * Only fields with display_front = true are returned.
     * Use this before passing definitions to the FO reader or presenter.
     */
    public function filterForFrontOffice(): self
    {
    }
    /**
     * Returns a new collection containing only definitions that target the given Admin API operation,
     * identified by its URI template and HTTP method (via ExtraPropertyDefinition::matchesApi()).
     *
     * Chainable: $collection->filterByEntity('product')->filterByApi('/products/{productId}', 'GET')
     */
    public function filterByApi(string $uriTemplate, string $method): self
    {
    }
    /**
     * Returns a new collection containing only definitions available for at least one of the
     * given shops (via ExtraPropertyDefinition::isAvailableForShops()).
     *
     * Pure filter: resolving a ShopConstraint to shop ids and loading the module→shops
     * association is the job of ExtraPropertyDefinitionShopFilterInterface — use its
     * filterByShopConstraint() unless both inputs are already resolved.
     *
     * @param list<int> $shopIds shops in the current scope
     * @param array<string, list<int>> $moduleShopIdsByName enabled shop ids indexed by module technical name
     */
    public function filterByShops(array $shopIds, array $moduleShopIdsByName = []): self
    {
    }
}
