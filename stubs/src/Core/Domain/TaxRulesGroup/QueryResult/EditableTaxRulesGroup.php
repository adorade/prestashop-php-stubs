<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\QueryResult;

/**
 * Transfers tax rules group data for editing
 */
class EditableTaxRulesGroup
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId
     */
    protected $taxRulesGroupId;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var bool
     */
    protected $active;
    /**
     * @var int[]
     */
    protected $shopAssociationIds;
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId $taxRulesGroupId
     * @param string $name
     * @param bool $active
     * @param array<int> $shopAssociationIds
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId $taxRulesGroupId, string $name, bool $active, array $shopAssociationIds)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId
     */
    public function getTaxRulesGroupId(): \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId
    {
    }
    /**
     * @return string
     */
    public function getName(): string
    {
    }
    /**
     * @return bool
     */
    public function isActive(): bool
    {
    }
    /**
     * @return int[]
     */
    public function getShopAssociationIds(): array
    {
    }
}
