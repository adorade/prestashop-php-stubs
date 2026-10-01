<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Command;

/**
 * Class AbstractBulkCmsPageCategoryCommand is responsible for providing shared logic between all bulk actions
 * in cms page category listing.
 */
abstract class AbstractBulkCmsPageCategoryCommand
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
