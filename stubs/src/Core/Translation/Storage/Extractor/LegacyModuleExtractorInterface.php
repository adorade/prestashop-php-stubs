<?php

namespace PrestaShop\PrestaShop\Core\Translation\Storage\Extractor;

/**
 * Parse code content of module, searching for l() calls and retrieve
 * a Message Catalogue with all the keys and translations.
 */
interface LegacyModuleExtractorInterface
{
    /**
     * Extracts the wordings from source code and returns the translation messages.
     * Note that domain names will contain separating dots.
     *
     * @param string $moduleName
     * @param string $locale The locale used for the message catalogue. Note that wordings won't be translated in this locale.
     *
     * @return MessageCatalogue
     */
    public function extract(string $moduleName, string $locale): \Symfony\Component\Translation\MessageCatalogue;
}
