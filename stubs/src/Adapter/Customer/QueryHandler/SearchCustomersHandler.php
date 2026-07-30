<?php

namespace PrestaShop\PrestaShop\Adapter\Customer\QueryHandler;

/**
 * Handles query that searches for customers by given phrases
 *
 * @internal
 */
final class SearchCustomersHandler implements \PrestaShop\PrestaShop\Core\Domain\Customer\QueryHandler\SearchCustomersHandlerInterface
{
    /**
     * @param Configuration $configuration
     * @param int $contextLangId
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Configuration $configuration, int $contextLangId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Query\SearchCustomers $query)
    {
    }
}
