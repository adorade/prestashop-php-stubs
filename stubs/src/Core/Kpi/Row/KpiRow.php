<?php

namespace PrestaShop\PrestaShop\Core\Kpi\Row;

/**
 * Class KpiRow defines a row of KPIs.
 */
final class KpiRow implements \PrestaShop\PrestaShop\Core\Kpi\Row\KpiRowInterface
{
    /**
     * @param array $options
     */
    public function __construct(array $options = [])
    {
    }
    /**
     * {@inheritdoc}
     */
    public function addKpi(\PrestaShop\PrestaShop\Core\Kpi\KpiInterface $kpi)
    {
    }
    /**
     * @return array[KpiInterface]
     */
    public function getKpis()
    {
    }
    /**
     * @param bool $allowRefresh
     */
    public function setAllowRefresh($allowRefresh)
    {
    }
    /**
     * @return bool
     */
    public function isRefreshAllowed()
    {
    }
    /**
     * @return array
     */
    public function getOptions()
    {
    }
}
