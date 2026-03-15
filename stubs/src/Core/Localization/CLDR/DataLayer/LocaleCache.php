<?php

namespace PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer;

/**
 * LocaleCache CLDR data layer.
 *
 * This locale data layer reads and writes CLDR LocaleData from a cache adapter
 */
class LocaleCache extends \PrestaShop\PrestaShop\Core\Data\Layer\AbstractDataLayer implements \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleDataLayerInterface
{
    /**
     * Symfony Cache component adapter.
     *
     * Provides cached LocaleData objects
     * Implements PSR-6: Cache Interface (@see http://www.php-fig.org/psr/psr-6/)
     *
     * @var AdapterInterface
     */
    protected $cache;
    public function __construct(\Symfony\Component\Cache\Adapter\AdapterInterface $cache)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setLowerLayer(\PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleDataLayerInterface $lowerLayer)
    {
    }
    /**
     * Actually read a CLDR LocaleData object into the current layer.
     *
     * Data is read from passed cache adapter
     *
     * @param string $localeCode
     *                           The CLDR LocaleData object identifier
     *
     * @return LocaleData|null
     *                         The wanted CLDR LocaleData object (null if not found)
     */
    protected function doRead($localeCode)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function write($id, $data)
    {
    }
    /**
     * Actually write a LocaleData object into the current layer.
     *
     * Might be a file edit, cache update, DB insert/update...
     *
     * @param mixed $localeCode
     *                          The LocaleData object identifier
     * @param LocaleData $data
     *                         The CLDR LocaleData object to be written
     *
     * @throws DataLayerException
     *                            When write fails
     */
    protected function doWrite($localeCode, $data)
    {
    }
}
