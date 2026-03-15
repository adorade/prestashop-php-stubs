<?php

namespace PrestaShop\PrestaShop\Adapter\TaxRulesGroup\Repository;

/**
 * Provides access to TaxRulesGroup data source
 */
class TaxRulesGroupRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractMultiShopObjectModelRepository
{
    /**
     * @param Connection $connection
     * @param string $dbPrefix
     * @param TaxRulesGroupValidator $taxRulesGroupValidator
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix, \PrestaShop\PrestaShop\Adapter\TaxRulesGroup\Validate\TaxRulesGroupValidator $taxRulesGroupValidator)
    {
    }
    /**
     * @param TaxRulesGroupId $taxRulesGroupId
     * @param CountryId $countryId
     *
     * @return int
     */
    public function getTaxRulesGroupDefaultStateId(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId $taxRulesGroupId, \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId $countryId): int
    {
    }
    /**
     * @param TaxRulesGroupId $taxRulesGroupId
     *
     * @return TaxRulesGroup
     *
     * @throws CoreException
     * @throws TaxRulesGroupNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId $taxRulesGroupId): \TaxRulesGroup
    {
    }
    /**
     * @param TaxRulesGroupId $taxRulesGroupId
     *
     * @throws CoreException
     * @throws TaxRulesGroupNotFoundException
     */
    public function assertTaxRulesGroupExists(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId $taxRulesGroupId): void
    {
    }
    /**
     * @param TaxRulesGroup $taxRulesGroup
     * @param ShopId[] $shopIds
     * @param int $errorCode
     *
     * @return TaxRulesGroupId
     */
    public function add(\TaxRulesGroup $taxRulesGroup, array $shopIds, int $errorCode = 0): \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId
    {
    }
    /**
     * @param TaxRulesGroup $taxRulesGroup
     * @param ShopId[] $shopIds
     */
    public function update(\TaxRulesGroup $taxRulesGroup, array $shopIds): void
    {
    }
    /**
     * @param TaxRulesGroup $taxRulesGroup
     * @param array $propertiesToUpdate
     * @param ShopId[] $shopIds
     * @param int $errorCode
     */
    public function partialUpdate(\TaxRulesGroup $taxRulesGroup, array $propertiesToUpdate, array $shopIds, int $errorCode): void
    {
    }
    /**
     * Get most used Tax.
     *
     * @return int
     */
    public function getIdTaxRulesGroupMostUsed()
    {
    }
}
