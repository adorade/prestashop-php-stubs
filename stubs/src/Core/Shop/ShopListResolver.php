<?php

namespace PrestaShop\PrestaShop\Core\Shop;

/**
 * Orchestration layer over ShopRepository, which owns the single constraint → shop ids
 * query (usable shops only for group/all scopes): this service adds the per-request
 * memoization and the representative-shop rule. Usable in every container the repository
 * is wired in (the three Symfony kernels and the hand-built FO legacy container).
 *
 * Group and all-shops lookups are memoized per request — a request that creates or
 * deletes a shop and resolves the same scope again reads the memoized list, which is
 * acceptable for the fan-out/read use cases this serves.
 */
class ShopListResolver implements \PrestaShop\PrestaShop\Core\Shop\ShopListResolverInterface
{
    /**
     * @var array<string, list<int>>
     */
    protected array $shopIdsCache = [];
    public function __construct(protected readonly \PrestaShop\PrestaShop\Adapter\Shop\Repository\ShopRepository $shopRepository, protected readonly \PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface $configuration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function resolveShopIds(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): array
    {
    }
    /**
     * {@inheritdoc}
     */
    public function resolveRepresentativeShopId(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): int
    {
    }
    /**
     * PS_SHOP_DEFAULT is a global-only configuration value, hence the explicit all-shops
     * constraint (same pattern as the shop context listeners).
     *
     * Configuration is always read through the configuration abstraction, never straight
     * from the DB: configuration is not bound to the DB persistence layer and may gain
     * other sources (environment variables, static parameter files), so a direct query
     * would silently bypass them. An earlier revision queried the DB directly under the
     * mistaken belief that the configuration service was unavailable in some containers —
     * the Adapter\Configuration service is wired in every container, including the
     * hand-built FO legacy one. No memoization here: Configuration keeps its own
     * static cache, a second lookup never hits the DB.
     */
    protected function getDefaultShopId(): int
    {
    }
}
