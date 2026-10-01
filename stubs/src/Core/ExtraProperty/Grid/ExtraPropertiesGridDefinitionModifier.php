<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Grid;

/**
 * Adds extra properties columns and filters into BO Symfony grids.
 */
class ExtraPropertiesGridDefinitionModifier
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionRepositoryInterface $repository, protected readonly \Symfony\Contracts\Translation\TranslatorInterface $translator, protected readonly \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext, protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionShopFilterInterface $definitionShopFilter)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Grid\Definition\GridDefinition $definition
     * @param string $gridId Grid identifier (usually equals entity table name, e.g. "product")
     */
    public function apply(\PrestaShop\PrestaShop\Core\Grid\Definition\GridDefinition $definition, string $gridId): void
    {
    }
    protected function buildColumn(string $label, \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition $definition): \PrestaShop\PrestaShop\Core\Grid\Column\ColumnInterface
    {
    }
    /**
     * @return class-string
     */
    protected function resolveFilterType(\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition $definition): string
    {
    }
    protected function addBeforeActionsOrAtEnd(\PrestaShop\PrestaShop\Core\Grid\Column\ColumnCollectionInterface $columns, \PrestaShop\PrestaShop\Core\Grid\Column\ColumnInterface $column): void
    {
    }
    protected function hasColumnId(\PrestaShop\PrestaShop\Core\Grid\Column\ColumnCollectionInterface $columns, string $id): bool
    {
    }
    protected function translateLabel(?string $wording, ?string $domain): string
    {
    }
}
