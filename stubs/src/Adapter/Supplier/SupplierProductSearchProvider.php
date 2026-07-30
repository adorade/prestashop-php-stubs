<?php

namespace PrestaShop\PrestaShop\Adapter\Supplier;

/**
 * Class responsible of retrieving products in Suppliers page of Front Office.
 *
 * @see SupplierController
 */
class SupplierProductSearchProvider implements \PrestaShop\PrestaShop\Core\Product\Search\ProductSearchProviderInterface
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \Supplier $supplier)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function runQuery(\PrestaShop\PrestaShop\Core\Product\Search\ProductSearchContext $context, \PrestaShop\PrestaShop\Core\Product\Search\ProductSearchQuery $query)
    {
    }
}
