<?php

namespace PrestaShop\PrestaShop\Core\Context;

class CurrencyContextBuilder implements \PrestaShop\PrestaShop\Core\Context\LegacyContextBuilderInterface
{
    use \PrestaShop\PrestaShop\Core\Context\LegacyObjectCheckerTrait;
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Currency\Repository\CurrencyRepository $currencyRepository, private readonly \PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager, private readonly \PrestaShop\PrestaShop\Core\Context\LanguageContext $languageContext)
    {
    }
    public function build(): \PrestaShop\PrestaShop\Core\Context\CurrencyContext
    {
    }
    public function buildLegacyContext(): void
    {
    }
    public function setCurrencyId(int $currencyId)
    {
    }
}
