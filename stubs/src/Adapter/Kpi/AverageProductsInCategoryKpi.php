<?php

namespace PrestaShop\PrestaShop\Adapter\Kpi;

/**
 * Class AverageProductsInCategoryKpi.
 *
 * @internal
 */
final class AverageProductsInCategoryKpi implements \PrestaShop\PrestaShop\Core\Kpi\KpiInterface
{
    /**
     * @param TranslatorInterface $translator
     * @param ConfigurationInterface $kpiConfiguration
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
