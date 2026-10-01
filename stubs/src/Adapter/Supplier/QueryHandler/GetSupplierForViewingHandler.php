<?php

namespace PrestaShop\PrestaShop\Adapter\Supplier\QueryHandler;

/**
 * Handles query which gets supplier for viewing
 */
final class GetSupplierForViewingHandler implements \PrestaShop\PrestaShop\Core\Domain\Supplier\QueryHandler\GetSupplierForViewingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Localization\Locale $locale
     * @param int $defaultCurrencyId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Localization\Locale $locale, int $defaultCurrencyId)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Supplier\Exception\SupplierException
     * @throws \PrestaShop\PrestaShop\Core\Localization\Exception\LocalizationException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Supplier\Query\GetSupplierForViewing $query)
    {
    }
}
