<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Catalog;

/**
 * Enumerates the identifiable-object back-office forms an extra property definition can be
 * associated with, from the prestashop.core.form.identifiable_object.form_types parameter
 * (built by IdentifiableObjectFormTypesCollectorPass in every environment).
 *
 * The form id is the type's block prefix — the exact id a form builder reports to
 * ExtraPropertiesFormBuilderModifier at runtime. Since block prefixes have no display
 * name of their own, the label reuses the translated name of the grid sharing the same
 * id when one exists (e.g. "product", "customer"), and falls back to a humanized block
 * prefix otherwise. Unresolvable form types are logged and skipped.
 *
 * The scan is memoized per instance and cached cross-request in the
 * prestashop.extra_property.catalog.filesystem_cache pool — the forms are bound to the deployed
 * code and installed modules, whose management already clears the Symfony cache the pool lives
 * in, so no dedicated invalidation is needed.
 */
class FormCatalog
{
    /**
     * @param list<string> $identifiableObjectFormTypes form type FQCNs, from the
     *                                                  prestashop.core.form.identifiable_object.form_types parameter
     */
    public function __construct(private readonly array $identifiableObjectFormTypes, private readonly \Symfony\Component\Form\FormRegistryInterface $formRegistry, private readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Catalog\GridCatalog $gridCatalog, private readonly \Psr\Log\LoggerInterface $logger, private readonly \Symfony\Contracts\Cache\CacheInterface $cache)
    {
    }
    /**
     * @return list<array{id: string, label: string}> sorted by label
     */
    public function getAll(): array
    {
    }
    public function has(string $formId): bool
    {
    }
    /**
     * @return class-string|null the form type FQCN behind the given form id
     */
    public function getFormTypeClass(string $formId): ?string
    {
    }
}
