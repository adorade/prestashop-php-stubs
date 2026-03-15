<?php

namespace PrestaShop\PrestaShop\Core\Module;

interface ConfigReaderInterface
{
    /**
     * Read file properties
     *
     * @param string $name The module name
     * @param string $isoCode The current iso code format fr_FR
     *
     * @return ArrayFinder|null
     */
    public function read(string $name, string $isoCode): ?\PrestaShop\PrestaShop\Core\Util\ArrayFinder;
}
