<?php

namespace PrestaShopBundle\EventListener\API;

/**
 * Bridges Admin API responses with the extra property system, and is the single API-Platform-coupled entry point of
 * the feature: it resolves the entity id and converts LANG values between locale and id_lang (LocalizedValueUpdater),
 * so the pure-Core services it drives — the reader (single item), the grid-record collector (list) and the writer
 * — never depend on API Platform. Validation lives in the dedicated CQRSApiValidator decorator.
 *
 * On kernel.response (after API Platform produced the JSON body) it:
 *  - persists the submitted extraProperties payload of a write, once the entity id is in the response body,
 *  - enriches the response: a single item gets the nested `extraProperties` object (all locales), each item of a
 *    paginated list gets the grid-fetched values inline at its root (single context locale).
 *
 * Registered only in the Admin API kernel.
 */
class ExtraPropertyApiSubscriber implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionRepositoryInterface $repository, protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Value\ExtraPropertyReaderInterface $reader, protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Api\ExtraPropertyApiListRecordCollector $listRecordCollector, protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Value\ExtraPropertyWriterInterface $writer, protected readonly \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext, protected readonly \PrestaShop\PrestaShop\Core\Context\LanguageContext $languageContext, protected readonly \PrestaShopBundle\ApiPlatform\LocalizedValueUpdater $localizedValueUpdater, protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionShopFilterInterface $definitionShopFilter, protected readonly ?\ApiPlatform\Metadata\Property\Factory\PropertyNameCollectionFactoryInterface $propertyNameCollectionFactory = null, protected readonly ?\ApiPlatform\Metadata\Property\Factory\PropertyMetadataFactoryInterface $propertyMetadataFactory = null)
    {
    }
    public static function getSubscribedEvents(): array
    {
    }
    public function onKernelResponse(\Symfony\Component\HttpKernel\Event\ResponseEvent $event): void
    {
    }
    /**
     * Enriches each item of a collection response with its extra properties, inline at the item root under the field
     * name (single context-locale value), combining two sources:
     *  - grid-associated properties on a grid-backed list (QueryListProvider + grid data factory) are reused from the
     *    collector — the grid query already fetched them, so no extra read;
     *  - the rest are read from the database in a single batched query: on a grid-backed list that is the
     *    API-associated-but-not-grid properties (exposed on the API yet absent from the grid); on a CQRS-paginated
     *    list (e.g. /products/{id}/combinations) the grid never runs, so it is every property.
     *
     * @param array<int, mixed> $items
     *
     * @return array<int, mixed>
     */
    protected function enrichListItems(array $items, \ApiPlatform\Metadata\HttpOperation $operation, \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionCollection $definitions, string $tableName, string $resourceClass): array
    {
    }
    /**
     * The subset of $definitions NOT associated with any grid — exposed on the API (and possibly a form) but never
     * fetched by a grid query, so they are absent from the grid-record collector and must be read from the database.
     */
    protected function apiOnlyDefinitions(\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionCollection $definitions): \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionCollection
    {
    }
    /**
     * A list is grid-backed when it is served by QueryListProvider through a grid data factory — the only case
     * where ExtraPropertyApiListRecordCollector has captured the values. Everything else (CQRS-paginated lists)
     * must be read from the database.
     */
    protected function isGridBackedCollection(\ApiPlatform\Metadata\HttpOperation $operation): bool
    {
    }
    protected function isJsonEntityResponse(\Symfony\Component\HttpFoundation\Response $response): bool
    {
    }
    /**
     * @param array<string, mixed> $decoded
     */
    protected function isCollection(\ApiPlatform\Metadata\HttpOperation $operation, array $decoded): bool
    {
    }
    protected function isWriteMethod(string $method): bool
    {
    }
    /**
     * Resolves the integer entity identifier from a normalized API item. Resolution order: the
     * #[ApiProperty(identifier: true)] property (via metadata) → the generic 'id' field → the camelCase
     * "{entity}Id" pattern built from the LOGICAL entity name (combination → combinationId,
     * order → orderId — this is why the heuristic must never use the physical table name,
     * which would give productAttributeId/ordersId) → the same pattern built from the primary
     * key column with its id_ prefix stripped (covers bare-table registrations whose entity
     * name is not the resource's noun). Returns 0 when none is found.
     *
     * @param array<string, mixed> $normalizedData
     */
    protected function resolveId(array $normalizedData, \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition $definition, string $resourceClass): int
    {
    }
    /**
     * Reads the submitted extraProperties sub-object from the initial request body and keeps only the properties
     * actually associated with this operation — those in $definitions, already narrowed by filterByApi. Without this
     * filtering, a write to any endpoint-associated property would let the payload smuggle in unrelated extra
     * properties (no definition of theirs matched the operation). Request::getContent() is cached, so this does not
     * consume the input stream a second time.
     *
     * @return array<string, array<string, mixed>>
     */
    protected function extractRequestPayload(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionCollection $definitions): array
    {
    }
    /**
     * @return array<string, array<string, true>> [moduleKey][propertyName] => true for LANG-scoped definitions
     */
    protected function langScopedFields(\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionCollection $definitions): array
    {
    }
    /**
     * Converts the LANG fields of a submitted payload from locale keys to id_lang keys; other scopes pass through.
     *
     * @param array<string, array<string, mixed>> $payload
     * @param array<string, array<string, true>> $langScopedFields
     *
     * @return array<string, array<string, mixed>>
     */
    protected function localesToIds(array $payload, array $langScopedFields): array
    {
    }
    /**
     * Converts the LANG fields of loaded values from id_lang keys to locale keys; other scopes pass through.
     *
     * @param array<string, array<string, mixed>> $valuesByModule
     * @param array<string, array<string, true>> $langScopedFields
     *
     * @return array<string, array<string, mixed>>
     */
    protected function idsToLocales(array $valuesByModule, array $langScopedFields): array
    {
    }
}
