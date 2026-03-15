<?php

namespace PrestaShop\PrestaShop\Core\Kpi\Row;

/**
 * Interface KpiRowPresenterInterface describes a KPI row presenter.
 */
interface KpiRowPresenterInterface
{
    /**
     * @param KpiRowInterface $kpiRow
     *
     * @return array
     */
    public function present(\PrestaShop\PrestaShop\Core\Kpi\Row\KpiRowInterface $kpiRow);
}
