<?php

namespace PrestaShop\PrestaShop\Core\Context;

class CountryContextBuilder implements \PrestaShop\PrestaShop\Core\Context\LegacyContextBuilderInterface
{
    use \PrestaShop\PrestaShop\Core\Context\LegacyObjectCheckerTrait;
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Country\Repository\CountryRepository $countryRepository, private readonly \PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager, private readonly \PrestaShop\PrestaShop\Core\Context\LanguageContext $languageContext)
    {
    }
    public function build(): \PrestaShop\PrestaShop\Core\Context\CountryContext
    {
    }
    public function buildLegacyContext(): void
    {
    }
    public function setCountryId(?int $countryId): self
    {
    }
}
