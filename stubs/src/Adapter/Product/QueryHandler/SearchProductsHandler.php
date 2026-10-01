<?php

namespace PrestaShop\PrestaShop\Adapter\Product\QueryHandler;

/**
 * Handles products search using legacy object model
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class SearchProductsHandler extends \PrestaShop\PrestaShop\Adapter\Order\AbstractOrderHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\QueryHandler\SearchProductsHandlerInterface
{
    /**
     * @param int $contextLangId
     * @param \PrestaShop\PrestaShop\Core\Localization\LocaleInterface $contextLocale
     * @param \PrestaShop\PrestaShop\Adapter\Tools $tools
     * @param \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider $currencyDataProvider
     * @param \PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager
     */
    public function __construct(int $contextLangId, \PrestaShop\PrestaShop\Core\Localization\LocaleInterface $contextLocale, \PrestaShop\PrestaShop\Adapter\Tools $tools, \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider $currencyDataProvider, \PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Query\SearchProducts $query
     *
     * @return array
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Query\SearchProducts $query): array
    {
    }
}
