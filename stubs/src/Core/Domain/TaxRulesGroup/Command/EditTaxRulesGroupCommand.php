<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Command;

/**
 * Command responsible for multiple tax rules groups deletion
 */
class EditTaxRulesGroupCommand
{
    /**
     * @var TaxRulesGroupId
     */
    protected $taxRulesGroupId;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var bool|null
     */
    protected $enabled;
    /**
     * @var int[]|null
     */
    protected $shopAssociation;
    /**
     * @param int $taxRulesGroupId
     *
     * @throws TaxRulesGroupConstraintException
     */
    public function __construct(int $taxRulesGroupId)
    {
    }
    /**
     * @return TaxRulesGroupId
     */
    public function getTaxRulesGroupId(): \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId
    {
    }
    /**
     * @return string|null
     */
    public function getName(): ?string
    {
    }
    /**
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
    }
    /**
     * @return bool|null
     */
    public function isEnabled(): ?bool
    {
    }
    /**
     * @param bool|null $enabled
     *
     * @return self
     */
    public function setEnabled(?bool $enabled): self
    {
    }
    /**
     * @return int[]|null
     */
    public function getShopAssociation(): ?array
    {
    }
    /**
     * @param int[] $shopAssociation
     *
     * @return self
     *
     * @throws TaxRulesGroupConstraintException
     */
    public function setShopAssociation(?array $shopAssociation): self
    {
    }
    /**
     * @param array $values
     *
     * @return bool
     */
    protected function assertArrayContainsOnlyIntegerValues(array $values): bool
    {
    }
}
