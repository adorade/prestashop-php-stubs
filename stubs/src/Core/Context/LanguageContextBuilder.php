<?php

namespace PrestaShop\PrestaShop\Core\Context;

class LanguageContextBuilder implements \PrestaShop\PrestaShop\Core\Context\LegacyContextBuilderInterface
{
    use \PrestaShop\PrestaShop\Core\Context\LegacyObjectCheckerTrait;
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Language\LanguageRepositoryInterface $languageRepository, private readonly \PrestaShop\PrestaShop\Core\Localization\Locale\RepositoryInterface $localeRepository, private readonly \PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager, private readonly \PrestaShop\PrestaShop\Adapter\Language\Repository\LanguageRepository $objectModelLanguageRepository)
    {
    }
    public function build(): \PrestaShop\PrestaShop\Core\Context\LanguageContext
    {
    }
    public function buildDefault(): \PrestaShop\PrestaShop\Core\Context\LanguageContext
    {
    }
    public function setLanguageId(int $languageId): void
    {
    }
    public function setDefaultLanguageId(int $languageId): void
    {
    }
    public function buildLegacyContext(): void
    {
    }
}
