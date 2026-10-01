<?php

namespace PrestaShop\PrestaShop\Adapter\Kpi;

/**
 * @internal
 */
final class AbandonedCartKpi implements \PrestaShop\PrestaShop\Core\Kpi\KpiInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\LegacyContext $contextAdapter, private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator, private readonly \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, private readonly \PrestaShop\PrestaShop\Core\Context\LanguageContext $languageContext, private readonly \Symfony\Component\Routing\Generator\UrlGeneratorInterface $router)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function render()
    {
    }
}
