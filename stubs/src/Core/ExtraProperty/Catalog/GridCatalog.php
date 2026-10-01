<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Catalog;

/**
 * Enumerates the back-office grids an extra property definition can be associated with, by
 * iterating every service tagged core.grid_definition_factory (the tag is applied to all
 * GridDefinitionFactoryInterface implementations via _instanceof, so module-provided factories
 * are included). Factories whose definition cannot be built are logged and skipped, so one
 * broken grid never breaks the whole catalog.
 *
 * The scan is memoized per instance and cached cross-request in the
 * prestashop.extra_property.catalog.filesystem_cache pool — the grids are bound to the deployed
 * code and installed modules, whose management already clears the Symfony cache the pool lives
 * in, so no dedicated invalidation is needed.
 *
 * @phpstan-type GridEntry array{id: string, label: string, columns: list<array{id: string, label: string, position: int}>}
 */
class GridCatalog
{
    public function __construct(
        #[\Symfony\Component\DependencyInjection\Attribute\AutowireLocator('core.grid_definition_factory')]
        private readonly \Symfony\Contracts\Service\ServiceProviderInterface $gridDefinitionFactories,
        private readonly \Psr\Log\LoggerInterface $logger,
        private readonly \Symfony\Contracts\Cache\CacheInterface $cache
    )
    {
    }
    /**
     * @return list<GridEntry> sorted by label
     */
    public function getAll(): array
    {
    }
    /**
     * @return GridEntry|null
     */
    public function get(string $gridId): ?array
    {
    }
    public function has(string $gridId): bool
    {
    }
}
