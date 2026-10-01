<?php

namespace PrestaShop\PrestaShop\Adapter\Kpi;

/**
 * Renders percent of most common customers gender.
 */
final class MostCommonCustomersGenderKpi implements \PrestaShop\PrestaShop\Core\Kpi\KpiInterface
{
    /**
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param \PrestaShop\PrestaShop\Core\ConfigurationInterface $kpiConfiguration
     * @param string $sourceUrl
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Core\ConfigurationInterface $kpiConfiguration, $sourceUrl)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function render()
    {
    }
}
