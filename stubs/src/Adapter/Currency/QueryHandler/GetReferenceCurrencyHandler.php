<?php

namespace PrestaShop\PrestaShop\Adapter\Currency\QueryHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class GetReferenceCurrencyHandler implements \PrestaShop\PrestaShop\Core\Domain\Currency\QueryHandler\GetReferenceCurrencyHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository $localeRepository
     * @param array $languages
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository $localeRepository, array $languages)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Query\GetReferenceCurrency $query): \PrestaShop\PrestaShop\Core\Domain\Currency\QueryResult\ReferenceCurrency
    {
    }
}
