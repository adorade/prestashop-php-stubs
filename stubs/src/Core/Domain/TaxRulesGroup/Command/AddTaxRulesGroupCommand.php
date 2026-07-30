<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Command;

/**
 * Command responsible for multiple tax rules groups deletion
 */
class AddTaxRulesGroupCommand
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var bool
     */
    protected $enabled;
    /**
     * @var int[]
     */
    protected $shopAssociation = [];
    /**
     * @param string $name
     * @param bool $enabled
     */
    public function __construct(string $name, bool $enabled)
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
    public function isEnabled(): bool
    {
    }
    /**
     * @return int[]
     */
    public function getShopAssociation(): array
    {
    }
    /**
     * @param int[] $shopAssociation
     *
     * @return self
     *
     * @throws TaxRulesGroupConstraintException
     */
    public function setShopAssociation(array $shopAssociation): self
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
