<?php

namespace PrestaShop\PrestaShop\Core\Product;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * Used to export list of Products in CSV in the Product list page.
 * For internal use only.
 */
final class ProductCsvExporter implements \PrestaShop\PrestaShop\Core\Product\ProductExporterInterface
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShopBundle\Service\DataProvider\Admin\ProductInterface $productProvider)
    {
    }
    /**
     * In this specific case, we don't need to pass a products list.
     *
     * @param array $products
     *
     * @return CsvResponse
     *
     * @throws \InvalidArgumentException
     * @throws \Symfony\Component\Translation\Exception\InvalidArgumentException
     */
    public function export(array $products = [])
    {
    }
}
