<?php

namespace PrestaShop\PrestaShop\Adapter\Kpi;

/**
 * Class MainCountryKpi is an implementation for main countries KPI.
 */
final class MainCountryKpi implements \PrestaShop\PrestaShop\Core\Kpi\KpiInterface
{
    /**
     * @param TranslatorInterface $translator
     * @param ConfigurationInterface $configuration
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
