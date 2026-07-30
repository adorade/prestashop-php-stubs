<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPage\Exception;

/**
 * Is thrown on failure when deleting cms page
 */
class CannotDeleteCmsPageException extends \PrestaShop\PrestaShop\Core\Domain\CmsPage\Exception\CmsPageException
{
    /**
     * When fails to delete single cms page
     */
    public const FAILED_DELETE = 10;
    /**
     * When fails to delete cms pages on bulk action
     */
    public const FAILED_BULK_DELETE = 20;
}
