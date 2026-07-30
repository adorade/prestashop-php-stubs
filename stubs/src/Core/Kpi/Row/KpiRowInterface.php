<?php

namespace PrestaShop\PrestaShop\Core\Kpi\Row;

/**
 * Interface KpiRowInterface describes a KPI row.
 */
interface KpiRowInterface
{
    /**
     * Add a KPI to this row.
     *
     * @param KpiInterface $kpi
     */
    public function addKpi(\PrestaShop\PrestaShop\Core\Kpi\KpiInterface $kpi);
    /**
     * @return array[KpiInterface]
     */
    public function getKpis();
    /**
     * @param bool $allowRefresh
     */
    public function setAllowRefresh($allowRefresh);
    /**
     * @return bool
     */
    public function isRefreshAllowed();
    /**
     * @return array
     */
    public function getOptions();
}
