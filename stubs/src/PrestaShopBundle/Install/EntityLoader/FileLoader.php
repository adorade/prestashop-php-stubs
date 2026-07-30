<?php

namespace PrestaShopBundle\Install\EntityLoader;

/**
 * Loads entity data from an XML file
 */
class FileLoader
{
    public const FALLBACK_LANGUAGE_CODE = 'en';
    /**
     * @param string $dataPath Path for data files
     * @param string $langPath Path for translated data files
     */
    public function __construct(string $dataPath, string $langPath)
    {
    }
    /**
     * Load an entity XML file.
     *
     * @param string $entity Name of the entity to load (eg. 'tab')
     * @param string|null $iso Language in which to load said entity. If not found, will fall back to default language.
     *
     * @return SimpleXMLElement|null
     *
     * @throws PrestashopInstallerException
     */
    public function load(string $entity, $iso = null): ?\SimpleXMLElement
    {
    }
    /**
     * Removes an item from cache
     *
     * @param string $entity Entity name
     * @param string|null $iso [default=null] 2-letter language code. If not provided, it flushes all languages for this entity
     */
    public function flushCache(string $entity, ?string $iso = null)
    {
    }
}
