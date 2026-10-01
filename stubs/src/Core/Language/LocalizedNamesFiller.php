<?php

namespace PrestaShop\PrestaShop\Core\Language;

/**
 * Fills empty/missing localized values with the default language value, for every active language.
 *
 * This reproduces the legacy back office auto-fill behavior at the CQRS level, so it applies whatever
 * builds the command: a form, an ajax call that only provides the current language, or the Admin API.
 */
class LocalizedNamesFiller
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Language\LanguageDataProvider $languageDataProvider, private readonly \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    /**
     * Returns the localized values with every active language filled in.
     *
     * Non-empty values from $localizedValues are applied on top of $existingValues, so a partial
     * update (e.g. the ajax call that only sends the current language) keeps the languages it does
     * not touch. Languages that are still empty afterwards are filled with the default value.
     *
     * @param array<int, string> $localizedValues lang-ID-keyed values to apply
     * @param array<int, string> $existingValues lang-ID-keyed values already stored (empty on creation)
     *
     * @return array<int, string>
     */
    public function fill(array $localizedValues, array $existingValues = []): array
    {
    }
}
