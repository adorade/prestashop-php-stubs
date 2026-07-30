<?php

namespace PrestaShop\PrestaShop\Core\Kpi\Row;

/**
 * Interface KpiRowFactoryInterface describes a KPI row factory.
 */
interface KpiRowFactoryInterface
{
    /**
     * Builds a KPI row.
     *
     * @return KpiRowInterface
     */
    public function build();
}
