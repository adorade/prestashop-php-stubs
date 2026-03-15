<?php

namespace PrestaShop\PrestaShop\Adapter\Kpi;

/**
 * Class EmptyCategoriesKpi.
 *
 * @internal
 */
final class EmptyCategoriesKpi implements \PrestaShop\PrestaShop\Core\Kpi\KpiInterface
{
    /**
     * @param TranslatorInterface $translator
     * @param ConfigurationInterface $configuration
     * @param string $sourceUrl
     * @param string $hrefUrl
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, $sourceUrl, $hrefUrl)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function render()
    {
    }
}
