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
     * @return \PrestaShop\PrestaShop\Adapter\Entity\LocalizationPack
     */
    public function createNew();
}
