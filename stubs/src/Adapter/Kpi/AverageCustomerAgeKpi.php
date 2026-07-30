<?php

namespace PrestaShop\PrestaShop\Adapter\Kpi;

/**
 * Renders average age of all customers.
 */
final class AverageCustomerAgeKpi implements \PrestaShop\PrestaShop\Core\Kpi\KpiInterface
{
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
