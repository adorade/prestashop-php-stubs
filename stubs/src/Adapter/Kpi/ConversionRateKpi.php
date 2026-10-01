<?php

namespace PrestaShop\PrestaShop\Adapter\Kpi;

/**
 * @internal
 */
final class ConversionRateKpi implements \PrestaShop\PrestaShop\Core\Kpi\KpiInterface
{
    public function __construct(private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator, private readonly \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, private readonly \PrestaShop\PrestaShop\Adapter\LegacyContext $contextAdapter)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function render()
    {
    }
}
