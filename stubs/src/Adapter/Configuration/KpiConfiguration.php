<?php

namespace PrestaShop\PrestaShop\Adapter\Configuration;

/**
 * Class KpiConfiguration provides access to legacy ConfigurationKpi methods.
 */
class KpiConfiguration extends \PrestaShop\PrestaShop\Adapter\Configuration
{
    /**
     * Changes configuration definition before calling it's methods.
     *
     * @param string $name
     * @param mixed $arguments
     *
     * @return mixed|void
     */
    public function __call($name, $arguments)
    {
    }
}
