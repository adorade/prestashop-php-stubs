<?php

namespace PrestaShop\PrestaShop\Core\Kpi;

/**
 * Interface RenderableKpi describes a renderable KPI.
 */
interface RenderableKpi
{
    /**
     * Renders the KPI's view.
     *
     * @return string
     */
    public function render();
}
