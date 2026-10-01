<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Api;

/**
 * Request-scoped store of the extra-property values a grid query already fetched and cast, so a list
 * (collection) response can reuse them instead of re-reading the database row by row.
 *
 * It is populated from QueryListProvider with the records returned by the grid data factory — which the
 * ExtraPropertiesGridQueryBuilderModifier enriched with one column per grid-associated extra property — and read
 * back by ExtraPropertyApiSubscriber while enriching each list item.
 *
 * Registered only in the Admin API kernel. Records are keyed by entity name then entity id; values keep the grid
 * column name (ExtraPropertyDefinition::getFieldName()) and the single context-locale value the grid fetched.
 */
class ExtraPropertyApiListRecordCollector implements \Symfony\Contracts\Service\ResetInterface
{
    /**
     * @var array<string, array<int, array<string, mixed>>>
     */
    protected array $recordsByEntity = [];
    public function __construct(protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionRepositoryInterface $repository)
    {
    }
    /**
     * Captures, from the given grid records, the extra-property columns of the definitions that target the
     * operation (URI template + HTTP method). A column only ends up stored when the grid actually fetched it
     * (i.e. the property is both API- and grid-associated), so nothing not displayed in a list is kept.
     *
     * No shop filter here on purpose: shop availability is inherited from the grid, whose
     * ExtraPropertiesGridQueryBuilderModifier only SELECTs the definitions available for the request's shop
     * scope — an out-of-scope column is simply absent from the records and nothing gets captured for it.
     *
     * @param array<int, array<string, mixed>> $records Records as returned by the grid data factory
     */
    public function capture(array $records, string $uriTemplate, string $method): void
    {
    }
    /**
     * @return array<string, mixed>|null Extra-property columns (formFieldName => value) captured for the row
     */
    public function find(string $entityName, int $entityId): ?array
    {
    }
    public function reset(): void
    {
    }
    /**
     * @return array<string, \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionCollection>
     */
    protected function groupByEntity(\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionCollection $definitions): array
    {
    }
}
