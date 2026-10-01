<?php

namespace PrestaShop\PrestaShop\Adapter\Kpi;

/**
 * Class TranslationsKpi is an implementation for translations KPI.
 */
final class TranslationsKpi implements \PrestaShop\PrestaShop\Core\Kpi\KpiInterface
{
    /**
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration
     * @param string $sourceLink a link to refresh KPI
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, $sourceLink)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function render()
    {
    }
}
