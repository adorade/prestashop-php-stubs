<?php

namespace PrestaShop\PrestaShop\Adapter\Product\QueryHandler;

/**
 * Handles products search using legacy object model
 */
final class SearchProductsHandler extends \PrestaShop\PrestaShop\Adapter\Order\AbstractOrderHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\QueryHandler\SearchProductsHandlerInterface
{
    /**
     * @param int $contextLangId
     * @param LocaleInterface $contextLocale
     * @param Tools $tools
     * @param CurrencyDataProvider $currencyDataProvider
     * @param ContextStateManager $contextStateManager
     */
    public function __construct(int $contextLangId, \PrestaShop\PrestaShop\Core\Localization\LocaleInterface $contextLocale, \PrestaShop\PrestaShop\Adapter\Tools $tools, \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider $currencyDataProvider, \PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @param SearchProducts $query
     *
     * @return array
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Query\SearchProducts $query): array
    {
    }
}
