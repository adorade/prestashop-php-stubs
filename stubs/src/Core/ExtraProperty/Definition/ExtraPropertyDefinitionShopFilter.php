<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Definition;

/**
 * Resolves the shop-availability inputs, then delegates the actual filtering to
 * ExtraPropertyDefinitionCollection::filterByShops().
 *
 * The module→shops association (fallback for module-owned definitions without an explicit
 * restriction) is cached in the shared extra-property filesystem pool with PER-SHOP keys:
 *  - every module state change (install, enable, disable, …) dispatches a
 *    ModuleManagementEvent whose subscriber runs SymfonyCacheClearer, which wipes
 *    var/cache/{env} — the pool's directory — so module actions invalidate these entries
 *    without any coupling from this class;
 *  - a shop created or duplicated after the cache was warmed simply has no entry yet,
 *    so per-shop keys can never serve stale data for it.
 *
 * The module association and shop count lookups are direct queries because they read
 * entity data (ps_module_shop / ps_module / ps_shop), not configuration; the multistore
 * flag goes through the configuration service like everywhere else. Constructible in
 * every container the pool and resolver are wired in — the three Symfony kernels and
 * the hand-built FO legacy container.
 */
class ExtraPropertyDefinitionShopFilter implements \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionShopFilterInterface
{
    /**
     * Request-level memoization on top of the filesystem pool.
     *
     * @var array<int, list<string>>
     */
    protected array $moduleNamesByShop = [];
    /**
     * @var list<string>|null
     */
    protected ?array $associatedModuleNames = null;
    protected ?bool $multiShopUsed = null;
    public function __construct(protected readonly \Doctrine\DBAL\Connection $connection, protected readonly string $prefix, protected readonly \PrestaShop\PrestaShop\Core\Shop\ShopListResolverInterface $shopListResolver, protected readonly \Symfony\Contracts\Cache\CacheInterface $definitionCache, protected readonly \PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface $configuration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function filterByShopConstraint(\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionCollection $definitions, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionCollection
    {
    }
    /**
     * {@inheritdoc}
     */
    public function filterByShopIds(\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionCollection $definitions, array $shopIds): \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionCollection
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getAvailableShopIds(\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition $definition, array $shopIds): array
    {
    }
    /**
     * Builds the module→shops map ExtraPropertyDefinitionCollection::filterByShops() expects,
     * restricted to the modules that actually need it: module-owned definitions without an
     * explicit restriction. Modules with no ps_module_shop row at all are deliberately left
     * OUT of the map (absent key → null → unrestricted, the degenerate rule documented on
     * ExtraPropertyDefinition::isAvailableForShops()); modules with rows get the subset of
     * $shopIds they are enabled on — possibly empty, which means "not available here".
     *
     * @param list<int> $shopIds
     *
     * @return array<string, list<int>>
     */
    protected function getModuleShopIdsByName(\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionCollection $definitions, array $shopIds): array
    {
    }
    /**
     * Module technical names enabled on one shop, cached per shop id.
     *
     * @return list<string>
     */
    protected function getModuleNamesForShop(int $shopId): array
    {
    }
    /**
     * Module technical names having at least one ps_module_shop row, anywhere.
     *
     * Needed to tell apart "module enabled on other shops only" (definition filtered out)
     * from "module has no shop rows at all" (unrestricted — registration happens during
     * install(), before the module is enabled on any shop).
     *
     * @return list<string>
     */
    protected function getAssociatedModuleNames(): array
    {
    }
    /**
     * Multistore is USED when the feature flag is on AND more than one shop exists —
     * the same semantics as MultistoreFeature::isUsed() / Shop::isFeatureActive(), which
     * is the single criterion shared by every extra-property multistore gate, filtering
     * layer (here, the grid query builder) and UI (grid column, form fields) alike: with
     * a single shop a restriction can never usefully exclude anything, so enforcing it
     * while the UI to manage it is hidden would only produce invisible definitions.
     *
     * PS_MULTISHOP_FEATURE_ACTIVE is a global-only configuration value, hence the explicit
     * all-shops constraint (same pattern as the shop context listeners). The shop count is
     * memoized per request only, NEVER stored in the filesystem pool: creating a shop does
     * not clear that pool, so a pooled count could keep single-shop semantics alive after
     * the second shop is created.
     */
    protected function isMultiShopUsed(): bool
    {
    }
}
