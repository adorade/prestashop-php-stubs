<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Value;

/**
 * Reads extra property values from the *_extra / *_extra_lang / *_extra_shop tables.
 *
 * Values are grouped by module technical name then by field name, and returned TYPED:
 * every value is cast from its raw DB string to the declared PHP type via
 * ExtraPropertyValueCaster::castFromDb() (bool/int/float, nullable-aware NULLs).
 * Used by ObjectModel (via ServiceLocator) and front-office LazyArray / presenter contexts.
 */
class ExtraPropertyReader implements \PrestaShop\PrestaShop\Core\ExtraProperty\Value\ExtraPropertyReaderInterface
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionRepositoryInterface $repository, protected readonly \Doctrine\DBAL\Connection $connection, protected readonly string $prefix, protected readonly \PrestaShop\PrestaShop\Core\Shop\ShopListResolverInterface $shopListResolver, protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionShopFilterInterface $definitionShopFilter, protected readonly \Psr\Log\LoggerInterface $logger)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getExtraProperties(string $tableName, string $primaryKeyName, int $entityId, ?int $langId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint, ?\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionCollection $definitions = null): array
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getMultipleExtraProperties(string $tableName, string $primaryKeyName, array $entityIds, ?int $langId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint, ?\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionCollection $definitions = null): array
    {
    }
    /**
     * Fetches extra property values for one scope across several entity ids, with a single query, and returns them
     * grouped by entity id then module name.
     *
     * For LANG scope with $langId = null: all languages are fetched and the value is an array keyed by id_lang —
     * used by BO forms and Admin API single-item reads. For LANG scope with $langId set: a single scalar per field.
     * For SHOP scope: a single scalar for the given shop constraint. COMMON scope: a single scalar per field.
     *
     * Every requested entity id is seeded with the default-valued structure, so an id with no row still appears.
     *
     * @param int[] $entityIds Positive, de-duplicated entity ids
     * @param \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionCollection $definitions All definitions for this scope (non-empty)
     *
     * @return array<int, array<string, array<string, mixed>>> [entityId => [module_key => [property_name => value]]]
     */
    protected function hydrateExtraPropertiesScope(string $primaryKeyName, array $entityIds, \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyScope $fieldScope, \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionCollection $definitions, ?int $langId, int $shopId): array
    {
    }
}
