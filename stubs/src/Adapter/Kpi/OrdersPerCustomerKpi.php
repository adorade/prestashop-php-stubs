<?php

namespace PrestaShop\PrestaShop\Adapter\Kpi;

/**
 * Renders amount of orders per customer.
 */
final class OrdersPerCustomerKpi implements \PrestaShop\PrestaShop\Core\Kpi\KpiInterface
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
