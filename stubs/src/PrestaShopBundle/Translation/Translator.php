<?php

namespace PrestaShopBundle\Translation;

/**
 * Replacement for the original Symfony FrameworkBundle translator
 */
class Translator extends \Symfony\Bundle\FrameworkBundle\Translation\Translator implements \PrestaShopBundle\Translation\TranslatorInterface
{
    use \PrestaShopBundle\Translation\PrestaShopTranslatorTrait;
    use \PrestaShopBundle\Translation\TranslatorLanguageTrait;
    /**
     * Injected via OverrideTranslatorServiceCompilerPass (the FrameworkBundle builds this service
     * with a fixed constructor signature, so the dependency is set through a method call instead).
     */
    public function setExtraPropertyTranslationLoader(\PrestaShopBundle\Translation\Loader\ExtraPropertyTranslationLoader $extraPropertyTranslationLoader): void
    {
    }
    /**
     * {@inheritdoc}
     */
    public function addResource($format, $resource, $locale, $domain = null): void
    {
    }
    /**
     * {@inheritdoc}
     *
     * Adds the extra property registry wordings to the catalogue being built, so they are baked
     * into the compiled (cached) catalogue like any other resource (dumpCatalogue() calls this
     * method and dumps $this->catalogues[$locale] right after).
     *
     * Two things are done for the registry domains, in this order:
     *  - their "db" resources are registered BEFORE the catalogue is built, so admin translations
     *    of those wordings (ps_translation) load like every other domain's and legitimately
     *    override the sources;
     *  - the wordings themselves are merged AFTER the catalogue is built, and NON-overwriting: a
     *    wording equal to a key another resource already defines (core or module XLF, an admin
     *    translation) resolves to that existing translation instead of replacing it with its
     *    untranslated source. Resources load in registration order and these would come last,
     *    so registering them as resources let a definition author un-translate core strings
     *    shop-wide by declaring a core domain; merging by hand closes that.
     *
     * Only real locales are handled: addResource() resets ALL catalogues when given a fallback
     * locale (Symfony behaviour), which would corrupt the catalogue being built as this method
     * recurses into fallbacks ("en", "default"), and the "default" pseudo-locale is not a
     * database language, so its "db" resource would make SqlTranslationLoader throw. Each
     * real-locale catalogue carries the source wordings (key == value) directly, so trans()
     * resolves them without ever needing the fallback catalogue.
     */
    protected function initializeCatalogue(string $locale): void
    {
    }
}
