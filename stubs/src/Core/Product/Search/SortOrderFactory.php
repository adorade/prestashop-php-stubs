<?php

namespace PrestaShop\PrestaShop\Core\Product\Search;

/**
 * This class is not a factory but a provider of default Sort Orders.
 *
 * @deprecated since 1.7.6 and to be removed in the next major: use SortOrdersCollection:getDefaults instead.
 */
class SortOrderFactory
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * @return array
     *
     * @throws \Exception
     */
    public function getDefaultSortOrders()
    {
    }
}
