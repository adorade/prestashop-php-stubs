<?php

namespace PrestaShop\PrestaShop\Core\Product;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * Allow the export of a list of products.
 */
interface ProductExporterInterface
{
    /**
     * @param array $products
     *
     * @return Response
     */
    public function export(array $products);
}
