<?php

namespace PrestaShop\PrestaShop\Adapter\Supplier\QueryHandler;

/**
 * Handles query which gets supplier for viewing
 */
final class GetSupplierForViewingHandler implements \PrestaShop\PrestaShop\Core\Domain\Supplier\QueryHandler\GetSupplierForViewingHandlerInterface
{
    /**
     * @param Locale $locale
     * @param int $defaultCurrencyId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Localization\Locale $locale, int $defaultCurrencyId)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws SupplierException
     * @throws LocalizationException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Supplier\Query\GetSupplierForViewing $query)
    {
    }
}
