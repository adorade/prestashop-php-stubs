<?php

namespace PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer;

/**
 * CurrencyCache CLDR data layer.
 *
 * This currency data layer reads and writes CLDR CurrencyData from a cache adapter
 */
final class CurrencyCache extends \PrestaShop\PrestaShop\Core\Data\Layer\AbstractDataLayer implements \PrestaShop\PrestaShop\Core\Localization\CLDR\CurrencyDataLayerInterface
{
    public function __construct(\Symfony\Component\Cache\Adapter\AdapterInterface $cache)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setLowerLayer(\PrestaShop\PrestaShop\Core\Localization\CLDR\CurrencyDataLayerInterface $lowerLayer)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function write($id, $data)
    {
    }
}
