<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\QueryResult;

/**
 * Transfers tax rules group data for editing
 */
class EditableTaxRulesGroup
{
    /**
     * @var TaxRulesGroupId
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
     * @param TaxRulesGroupId $taxRulesGroupId
     * @param string $name
     * @param bool $active
     * @param array<int> $shopAssociationIds
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId $taxRulesGroupId, string $name, bool $active, array $shopAssociationIds)
    {
    }
    /**
     * @return TaxRulesGroupId
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
