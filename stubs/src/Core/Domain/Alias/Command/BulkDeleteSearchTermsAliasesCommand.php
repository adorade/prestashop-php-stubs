<?php

namespace PrestaShop\PrestaShop\Core\Domain\Alias\Command;

/**
 * Delete all aliases by multiple given search terms.
 */
class BulkDeleteSearchTermsAliasesCommand
{
    public function __construct(array $searchTerms)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Alias\ValueObject\SearchTerm[]
     */
    public function getSearchTerms(): array
    {
    }
}
