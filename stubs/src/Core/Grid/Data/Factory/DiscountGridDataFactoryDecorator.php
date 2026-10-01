<?php

namespace PrestaShop\PrestaShop\Core\Grid\Data\Factory;

/**
 * Decorates discount grid data to display a fallback when expiration date is null
 */
final class DiscountGridDataFactoryDecorator implements \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $discountGridDataFactory, private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria): \PrestaShop\PrestaShop\Core\Grid\Data\GridDataInterface
    {
    }
}
