<?php

namespace PrestaShop\PrestaShop\Core\Theme;

interface ConfigReaderInterface
{
    /**
     * Read file properties
     *
     * @param string $name The theme name
     *
     * @return ArrayFinder|null
     */
    public function read(string $name): ?\PrestaShop\PrestaShop\Core\Util\ArrayFinder;
}
