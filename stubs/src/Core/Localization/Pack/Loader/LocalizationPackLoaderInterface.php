<?php

namespace PrestaShop\PrestaShop\Core\Localization\Pack\Loader;

/**
 * Interface LocalizationPackLoaderInterface defines contract for localization pack loaders.
 */
interface LocalizationPackLoaderInterface
{
    /**
     * Get localization packs list.
     *
     * @return SimpleXMLElement|null SimpleXMLElement with localization packs data or null if packs are not available
     */
    public function getLocalizationPackList();
    /**
     * Get single localization pack data.
     *
     * @param string $countryIso Country ISO Alpha-2 code
     *
     * @return SimpleXMLElement|null
     */
    public function getLocalizationPack($countryIso);
}
