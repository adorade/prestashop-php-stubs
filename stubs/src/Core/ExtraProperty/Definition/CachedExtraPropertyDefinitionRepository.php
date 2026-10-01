<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Definition;

/**
 * Cache-decorating repository: wraps ExtraPropertyDefinitionRepository for both reads and writes.
 *
 * Read: caches getAllDefinitions() under a single global key; findDefinitionByModuleAndField()
 * is never cached (write-path lookup that must always reflect current DB state).
 *
 * Write: delegates to the inner repository and invalidates the cache after each successful write.
 * This is the single point of cache invalidation for extra property definitions.
 *
 * Cache key scheme: "extra_property_definition_all" (one entry for all definitions).
 * Cache tags: ["extra_property_definition"] (when tag-aware).
 */
class CachedExtraPropertyDefinitionRepository implements \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionRepositoryInterface, \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionWriterInterface
{
    public const CACHE_KEY = 'extra_property_definition_all';
    public function __construct(protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionRepository $repository, protected readonly \Symfony\Contracts\Cache\CacheInterface $definitionCache)
    {
    }
    // -------------------------------------------------------------------------
    // Read — ExtraPropertyDefinitionRepositoryInterface
    // -------------------------------------------------------------------------
    /**
     * {@inheritdoc}
     *
     * Cached under a single global key. All callers use collection filter helpers
     * (filterByEntity, filterByForm, filterByGrid, etc.) to narrow the result.
     */
    public function getAllDefinitions(): \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionCollection
    {
    }
    /**
     * {@inheritdoc}
     *
     * Not cached: targeted write-path lookup that must always reflect current DB state.
     */
    public function findDefinitionByModuleAndField(string $entityName, ?string $moduleName, string $fieldName): ?\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition
    {
    }
    /**
     * {@inheritdoc}
     *
     * Not cached: same rationale as findDefinitionByModuleAndField().
     */
    public function getDefinitionById(int $id): ?\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition
    {
    }
    /**
     * {@inheritdoc}
     *
     * Not cached: same rationale as findDefinitionByModuleAndField().
     */
    public function getUnprotectedDefinitionById(int $id): \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition
    {
    }
    // -------------------------------------------------------------------------
    // Write — ExtraPropertyDefinitionWriterInterface
    // -------------------------------------------------------------------------
    /**
     * {@inheritdoc}
     */
    public function save(\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition $definition): int|false
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
    // -------------------------------------------------------------------------
    // Cache management
    // -------------------------------------------------------------------------
    /**
     * Removes the global definition cache entry so the next getAllDefinitions() reloads from DB.
     */
    protected function invalidateCache(): void
    {
    }
}
