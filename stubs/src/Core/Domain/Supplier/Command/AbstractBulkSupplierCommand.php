<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\Command;

/**
 * Class AbstractBulkSupplierCommand is responsible for providing shared logic between all bulk actions
 * in brands and suppliers listing.
 */
abstract class AbstractBulkSupplierCommand
{
    /**
     * @param array $ids
     *
     * @return bool
     */
    protected function assertIsEmptyOrContainsNonIntegerValues(array $ids)
    {
    }
}
