<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Grid;

/**
 * Adds JOIN/SELECT/FILTER clauses for extra properties in BO Symfony grids.
 *
 * Cardinality invariant: every LEFT JOIN added here covers the FULL primary key of its
 * extra table ({e}_extra: id_e; {e}_extra_lang: id_e + id_lang, plus id_shop only on
 * multilang-multishop entities whose base {e}_lang table carries it; {e}_extra_shop:
 * id_e + id_shop), so each join matches at most one row per existing grid row. Joins
 * enrich rows 1:1 and can never multiply them — pagination and COUNT stay correct without
 * any GROUP BY (which is forbidden in this service). Whether the extra lang table has an
 * id_shop column is read from the definition (schema-derived isMultiShop()); referencing
 * it on an entity like contact, whose lang table has no shop column, would be a hard SQL
 * error.
 *
 * The shop pin of lang/shop joins is resolved per builder, in order: the base
 * {entity}_lang/{entity}_shop join alias when that builder has one, the builder's own
 * :shopId parameter, then ShopContext (single-shop constraint → its id, otherwise the
 * current shop id — same rule as the toggle column in ExtraPropertiesGridDefinitionModifier).
 *
 * Joins and parameters are built independently for the search and count builders: their
 * query shapes usually differ (count builders rarely carry the base lang/shop joins), so
 * an alias resolved on one builder is never reused on the other.
 *
 * This modifier assumes:
 * - grid id matches the entity table name (e.g. "product")
 * - registry structure and *_extra tables are coherent (no runtime checks for performance)
 */
class ExtraPropertiesGridQueryBuilderModifier
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionRepositoryInterface $repository, protected readonly string $dbPrefix, protected readonly \PrestaShop\PrestaShop\Core\Context\LanguageContext $languageContext, protected readonly \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext, protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionShopFilterInterface $definitionShopFilter, protected readonly \Psr\Log\LoggerInterface $logger)
    {
    }
    public function apply(\Doctrine\DBAL\Query\QueryBuilder $searchQueryBuilder, \Doctrine\DBAL\Query\QueryBuilder $countQueryBuilder, \PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria, string $gridId): void
    {
    }
    /**
     * Casts the extra property columns of fetched grid records to their declared PHP types.
     *
     * Counterpart of apply(): apply() only shapes the query (JOIN/SELECT/WHERE), so values come
     * out of the DB as raw strings; this method is called after the query has run (see
     * DoctrineGridDataFactory) and casts each extra column in place via ExtraPropertyValueCaster.
     * Grid lang values are single-language scalars (joined on one id_lang), so the scalar cast
     * applies to every scope.
     *
     * @param array<int, array<string, mixed>> $records Rows fetched by the grid search query
     *
     * @return array<int, array<string, mixed>> Same rows with typed extra property values
     */
    public function castExtraProperties(array $records, string $gridId): array
    {
    }
    /**
     * Grid definitions restricted to the current shop context — the shared lookup of
     * apply(), castExtraProperties() and ExtraPropertiesGridDefinitionModifier, which MUST
     * all stay in lockstep (same service, same constraint source): a column without its
     * SELECT — or the reverse — breaks the grid.
     */
    protected function getShopFilteredDefinitions(string $gridId): \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionCollection
    {
    }
    /**
     * @param array<int, array{0: \Doctrine\DBAL\Query\QueryBuilder, 1: string}> $builders [[builder, mainAlias], ...], search builder first
     * @param \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionCollection $definitions
     */
    protected function applyEntityScope(array $builders, \PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $criteria, string $primaryKey, \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionCollection $definitions): void
    {
    }
    /**
     * @param array<int, array{0: \Doctrine\DBAL\Query\QueryBuilder, 1: string}> $builders [[builder, mainAlias], ...], search builder first
     * @param \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionCollection $definitions
     */
    protected function applyLangScope(array $builders, \PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $criteria, string $tableName, string $primaryKey, \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionCollection $definitions): void
    {
    }
    /**
     * @param array<int, array{0: \Doctrine\DBAL\Query\QueryBuilder, 1: string}> $builders [[builder, mainAlias], ...], search builder first
     * @param \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionCollection $definitions
     */
    protected function applyShopScope(array $builders, \PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $criteria, string $tableName, string $primaryKey, \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionCollection $definitions): void
    {
    }
    /**
     * Resolves the shop id used to pin lang/shop extra joins when no base join carries it:
     * the builder's own :shopId parameter when set, otherwise the context shop (single-shop
     * constraint → its id; all-shops/group context → the current shop id, mirroring the
     * toggle column rule in ExtraPropertiesGridDefinitionModifier).
     */
    protected function resolveShopId(\Doctrine\DBAL\Query\QueryBuilder $qb): int
    {
    }
    /**
     * Adds the SELECT aliases (search builder only) and the filter WHEREs (every builder,
     * so the count stays consistent with the page).
     *
     * @param array<int, array{0: \Doctrine\DBAL\Query\QueryBuilder, 1: string}> $builders [[builder, mainAlias], ...], search builder first
     * @param \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionCollection $definitions
     */
    protected function applySelectsAndFilters(array $builders, \PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $criteria, string $joinAlias, \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionCollection $definitions): void
    {
    }
    protected function applyWhereEquals(\Doctrine\DBAL\Query\QueryBuilder $qb, string $alias, string $column, string $paramName, mixed $value): void
    {
    }
    protected function applyWhereLike(\Doctrine\DBAL\Query\QueryBuilder $qb, string $alias, string $column, string $paramName, mixed $value): void
    {
    }
    protected function buildFilterParamName(string $filterName): string
    {
    }
    /**
     * Adds a LEFT JOIN to one builder unless the table is already joined there; the
     * condition's parameters are only bound when the join is actually added.
     *
     * @param array<string, mixed> $parameters Named parameters used by $condition
     */
    protected function ensureLeftJoin(\Doctrine\DBAL\Query\QueryBuilder $qb, string $fromAlias, string $joinTable, string $joinAlias, string $condition, array $parameters = []): void
    {
    }
    protected function resolveMainAlias(\Doctrine\DBAL\Query\QueryBuilder $qb, string $gridId, string $tableName): ?string
    {
    }
    /**
     * @return array{0: string|null, 1: string|null}
     */
    protected function findJoinedTableAliasAndCondition(\Doctrine\DBAL\Query\QueryBuilder $qb, string $tableName): array
    {
    }
    protected function joinConditionMentionsShopId(string $langAlias, string $joinCondition): bool
    {
    }
}
