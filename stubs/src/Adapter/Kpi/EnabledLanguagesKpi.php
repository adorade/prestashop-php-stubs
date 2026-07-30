<?php

namespace PrestaShop\PrestaShop\Adapter\Kpi;

/**
 * Class EnabledLanguagesKpi is an implementation for enabled languages KPI.
 */
final class EnabledLanguagesKpi implements \PrestaShop\PrestaShop\Core\Kpi\KpiInterface
{
    /**
     * @param TranslatorInterface $translator
     * @param ConfigurationInterface $configuration
     * @param string $clickLink a link for clicking on the KPI
     * @param string $sourceLink a link to refresh KPI
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, $clickLink, $sourceLink)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function render()
    {
    }
}
