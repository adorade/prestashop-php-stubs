<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Exception;

/**
 * Is thrown on failure when deleting a cms page category
 */
class CannotDeleteCmsPageCategoryException extends \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Exception\CmsPageCategoryException
{
    /**
     * When fails to delete single cms page category
     */
    public const FAILED_DELETE = 10;
    /**
     * When fails to delete cms page categories on bulk action
     */
    public const FAILED_BULK_DELETE = 20;
}
