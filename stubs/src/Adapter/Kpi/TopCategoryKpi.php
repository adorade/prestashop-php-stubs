<?php

namespace PrestaShop\PrestaShop\Adapter\Kpi;

/**
 * Class TopCategoryKpi.
 *
 * @internal
 */
final class TopCategoryKpi implements \PrestaShop\PrestaShop\Core\Kpi\KpiInterface
{
    /**
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param \PrestaShop\PrestaShop\Core\ConfigurationInterface $kpiConfiguration
     * @param string $sourceUrl
     * @param int $employeeIdLang
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Core\ConfigurationInterface $kpiConfiguration, $sourceUrl, $employeeIdLang)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function render()
    {
    }
}
