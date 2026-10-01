<?php

namespace PrestaShop\PrestaShop\Core\Theme;

interface ConfigReaderInterface
{
    /**
     * Read file properties
     *
     * @param string $name The theme name
     *
     * @return \PrestaShop\PrestaShop\Core\Util\ArrayFinder|null
     */
    public function read(string $name): ?\PrestaShop\PrestaShop\Core\Util\ArrayFinder;
}
