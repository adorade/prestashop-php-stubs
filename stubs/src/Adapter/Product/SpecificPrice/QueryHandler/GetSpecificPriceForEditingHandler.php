<?php

namespace PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\QueryHandler;

/**
 * Handles @see GetSpecificPriceForEditing using legacy object model
 */
class GetSpecificPriceForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\QueryHandler\GetSpecificPriceForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\Repository\SpecificPriceRepository $specificPriceRepository
     * @param \PrestaShop\PrestaShop\Adapter\Customer\Repository\CustomerRepository $customerRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\Repository\SpecificPriceRepository $specificPriceRepository, \PrestaShop\PrestaShop\Adapter\Customer\Repository\CustomerRepository $customerRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\Query\GetSpecificPriceForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\QueryResult\SpecificPriceForEditing
    {
    }
}
