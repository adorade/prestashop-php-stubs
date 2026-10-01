<?php

namespace PrestaShop\PrestaShop\Core\Translation\Storage\Provider;

/**
 * Normalizes the domain names of a source catalogue (removing dots, e.g. "Modules.Foo.Admin"
 * becomes "ModulesFooAdmin") and keeps only the domains matching one of the given filename
 * filter patterns.
 *
 * Shared by the module and core catalogue providers so the same per-context domain filtering is
 * applied to wordings gathered from any source (source code templates, the extra property
 * registry, …): when wordings are extracted, the domain names are in format
 * Modules.MODULENAME.DOMAIN.DOMAIN, while the catalogue domains must be camelcased with the dots
 * removed (ModulesModulenameDomain…).
 */
class CatalogueDomainConverter
{
    /**
     * @param \Symfony\Component\Translation\MessageCatalogue $catalogue source catalogue, with dot-separated domain names
     * @param array<int, string> $filenameFilters regex patterns; a normalized domain is kept only when it matches one of them
     *
     * @return \Symfony\Component\Translation\MessageCatalogue a new catalogue with normalized domains, restricted to the matching ones
     */
    public function normalizeAndFilter(\Symfony\Component\Translation\MessageCatalogue $catalogue, array $filenameFilters): \Symfony\Component\Translation\MessageCatalogue
    {
    }
}
