<?php

namespace PrestaShop\PrestaShop\Adapter\Kpi;

/**
 * @internal
 */
final class AverageOrderValueKpi implements \PrestaShop\PrestaShop\Core\Kpi\KpiInterface
{
    public function __construct(private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator, private readonly \PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface $configuration, private readonly \PrestaShop\PrestaShop\Adapter\LegacyContext $contextAdapter)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function render()
    {
    }
}
