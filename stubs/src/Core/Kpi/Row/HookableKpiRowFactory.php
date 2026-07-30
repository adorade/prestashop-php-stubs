<?php

namespace PrestaShop\PrestaShop\Core\Kpi\Row;

/**
 * Class HookableKpiRowFactory builds a KPI row, able to dispatch a hook.
 */
final class HookableKpiRowFactory implements \PrestaShop\PrestaShop\Core\Kpi\Row\KpiRowFactoryInterface
{
    /**
     * @param KpiInterface[] $kpis
     * @param HookDispatcherInterface $hookDispatcher
     * @param string $identifier
     */
    public function __construct(array $kpis, \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, $identifier)
    {
    }
    /**
     * @return KpiRow|void
     *
     * @throws InvalidArgumentException
     */
    public function build()
    {
    }
    /**
     * Set options for kpi row
     *
     * @param array $options
     */
    public function setOptions(array $options)
    {
    }
}
