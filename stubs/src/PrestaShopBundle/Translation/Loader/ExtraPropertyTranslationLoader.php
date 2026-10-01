<?php

namespace PrestaShopBundle\Translation\Loader;

/**
 * Exposes the label/description wordings declared in the extra property registry as a translation
 * resource ("extra_property" format), so the back-office (FrameworkBundle) translator bakes them
 * into its compiled catalogue — the same way XLF-declared wordings are.
 *
 * The registry domains are dot-separated (e.g. "Modules.Foo.Admin"); they are normalized to the
 * catalogue convention ("ModulesFooAdmin") so they line up with the rest of the catalogue and with
 * Module::isUsingNewTranslationSystem().
 */
class ExtraPropertyTranslationLoader implements \Symfony\Component\Translation\Loader\LoaderInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Translation\Storage\Extractor\ExtraPropertyTranslationExtractor $extraPropertyTranslationExtractor)
    {
    }
    /**
     * Lists the normalized catalogue domains the registry contributes for a locale, so callers can
     * register one resource per domain.
     *
     * @return list<string>
     */
    public function getNormalizedDomains(string $locale): array
    {
    }
    /**
     * {@inheritdoc}
     *
     * Returns the registry wordings whose normalized domain matches the requested one, as a default
     * catalogue (key == value). Several dotted domains may normalize to the same catalogue domain;
     * all their wordings are merged.
     */
    public function load($resource, $locale, $domain = 'messages'): \Symfony\Component\Translation\MessageCatalogue
    {
    }
}
