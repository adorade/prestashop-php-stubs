<?php

namespace PrestaShop\PrestaShop\Adapter\TaxRulesGroup\Repository;

/**
 * Provides access to TaxRulesGroup data source
 */
class TaxRulesGroupRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractMultiShopObjectModelRepository
{
    /**
     * @param \Doctrine\DBAL\Connection $connection
     * @param string $dbPrefix
     * @param \PrestaShop\PrestaShop\Adapter\TaxRulesGroup\Validate\TaxRulesGroupValidator $taxRulesGroupValidator
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix, \PrestaShop\PrestaShop\Adapter\TaxRulesGroup\Validate\TaxRulesGroupValidator $taxRulesGroupValidator)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId $taxRulesGroupId
     * @param \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId $countryId
     *
     * @return int
     */
    public function getTaxRulesGroupDefaultStateId(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId $taxRulesGroupId, \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId $countryId): int
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId $taxRulesGroupId
     *
     * @return \TaxRulesGroup
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     * @throws \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Exception\TaxRulesGroupNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId $taxRulesGroupId): \TaxRulesGroup
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId $taxRulesGroupId
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     * @throws \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Exception\TaxRulesGroupNotFoundException
     */
    public function assertTaxRulesGroupExists(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId $taxRulesGroupId): void
    {
    }
    /**
     * @param \TaxRulesGroup $taxRulesGroup
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId[] $shopIds
     * @param int $errorCode
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId
     */
    public function add(\TaxRulesGroup $taxRulesGroup, array $shopIds, int $errorCode = 0): \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId
    {
    }
    /**
     * @param \TaxRulesGroup $taxRulesGroup
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId[] $shopIds
     */
    public function update(\TaxRulesGroup $taxRulesGroup, array $shopIds): void
    {
    }
    /**
     * @param \TaxRulesGroup $taxRulesGroup
     * @param array $propertiesToUpdate
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId[] $shopIds
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
