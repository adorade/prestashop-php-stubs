<?php

namespace PrestaShop\PrestaShop\Adapter\ExtraProperty\Grid\Data\Factory;

/**
 * Enriches the extra property definition grid records with the data the
 * associated_shops column renders: 'associated_shops' (shop names).
 *
 * Per page of records this costs at most three batched queries (association rows,
 * module associations for fallback rows, shop names) — never one query per row.
 *
 * Emitted values follow the availability rules of
 * ExtraPropertyDefinition::isAvailableForShops():
 *  - explicit restriction → those shops;
 *  - module-owned without restriction, module enabled somewhere → the module's shops
 *    (the live fallback);
 *  - otherwise (core-owned, or module with no shop rows) → empty lists, which the
 *    column renders as its empty_label ("All stores").
 */
class ExtraPropertyDefinitionGridDataFactoryDecorator implements \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $extraPropertyDefinitionGridDataFactory, private readonly \Doctrine\DBAL\Connection $connection, private readonly string $dbPrefix, private readonly \PrestaShop\PrestaShop\Core\Feature\FeatureInterface $multistoreFeature)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria): \PrestaShop\PrestaShop\Core\Grid\Data\GridData
    {
    }
}
