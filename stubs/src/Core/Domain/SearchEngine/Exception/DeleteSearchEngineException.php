<?php

namespace PrestaShop\PrestaShop\Core\Domain\SearchEngine\Exception;

/**
 * Is thrown when search engine(s) cannot be deleted.
 */
class DeleteSearchEngineException extends \PrestaShop\PrestaShop\Core\Domain\SearchEngine\Exception\SearchEngineException
{
    /**
     * When fails to delete single search engine.
     */
    public const FAILED_DELETE = 10;
    /**
     * When fails to delete search engines in bulk action.
     */
    public const FAILED_BULK_DELETE = 20;
}
