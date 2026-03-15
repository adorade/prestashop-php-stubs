<?php

namespace PrestaShop\PrestaShop\Core\Localization\Pack\Factory;

/**
 * Interface LocalizationPackFactoryInterface defines contract for localization pack factory.
 */
interface LocalizationPackFactoryInterface
{
    /**
     * Creates new localization pack.
     *
     * @return LocalizationPack
     */
    public function createNew();
}
