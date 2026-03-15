<?php

namespace PrestaShop\PrestaShop\Adapter\Product;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * Extracted from Product Controller, used to cleanup the request.
 * For internal use only.
 */
final class FilterCategoriesRequestPurifier
{
    public const CATEGORY = 'filter_category';
    /**
     * Changes the filter category values in case it is not numeric or signed.
     *
     * @param Request $request
     *
     * @return Request
     */
    public function purify(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}
