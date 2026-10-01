<?php

namespace PrestaShop\PrestaShop\Core\Translation\Storage\Extractor;

/**
 * Builds a MessageCatalogue from the extra property registry so that the label and description
 * wordings declared by modules (and the core) become translatable from the back office.
 *
 * Each definition contributes up to two wordings (label and description), each stored under the
 * domain declared alongside it (e.g. "Modules.Demoextrafield.Admin"). A wording without a paired
 * domain falls back to the "messages" domain — the same default Symfony uses — instead of being
 * dropped.
 *
 * The returned catalogue is intentionally not filtered by module or type: callers (the catalogue
 * providers) keep only the domains relevant to their context, reusing the same domain filtering
 * already applied to wordings extracted from source code.
 */
class ExtraPropertyTranslationExtractor
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionRepositoryInterface $definitionRepository)
    {
    }
    /**
     * Returns every registered label/description wording, keyed under its declared translation
     * domain. The catalogue is NOT filtered by context — neither by domain (each catalogue
     * provider narrows it to its own domains) nor by shop association (wordings must stay
     * translatable even for definitions restricted to other shops). Domain names contain
     * separating dots, like the wordings extracted from source code.
     *
     * @param string $locale The locale used for the message catalogue. Note that wordings won't be translated in this locale.
     */
    public function extract(string $locale): \Symfony\Component\Translation\MessageCatalogue
    {
    }
}
