<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Form;

/**
 * Adds extra properties fields into an identifiable object form builder.
 *
 * Placement (associatedForms entry from the definition registry, format "formId[:path[:before|after]]"):
 * - null/empty        => dedicated 'extra_fields.extra_properties' section (created if missing); on simple
 *                        forms without tabs, fields are placed at root level instead.
 * - path, no mode     => the path is a CONTAINER: navigate it (every segment must exist, throws
 *                        InvalidArgumentException otherwise) and append the field inside it.
 * - path:before       => the last path segment is an ANCHOR: navigate to the parent builder and insert the
 *                        field BEFORE the anchor (anchor must exist, throws otherwise).
 * - path:after        => same, inserting the field AFTER the anchor.
 *
 * The container vs anchor split is resolved once in ExtraPropertyDefinition::getFormEntry() (which returns
 * the resolved 'path' + 'anchor') and shared with ExtraPropertiesFormDataPersister so placement and value
 * retrieval cannot drift.
 *
 * Data mapping:
 * - fields are added as unmapped; persistence reads submitted values from the FormInterface.
 */
class ExtraPropertiesFormBuilderModifier
{
    public const FALLBACK_FORM_SECTION = 'extra_properties';
    public const DEFAULT_FALLBACK_TAB = 'extra_fields';
    public function __construct(
        protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionRepositoryInterface $repository,
        protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Value\ExtraPropertyReaderInterface $reader,
        protected readonly \Symfony\Contracts\Translation\TranslatorInterface $translator,
        protected readonly \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext,
        protected readonly \PrestaShopBundle\Form\FormBuilderModifier $formBuilderModifier,
        protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Form\ExtraPropertyFormTypeMap $formTypeMap,
        protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionShopFilterInterface $definitionShopFilter,
        // The read-side policy enforcement below logs every option/type it drops.
        protected readonly \Psr\Log\LoggerInterface $logger
    )
    {
    }
    /**
     * @param string $formId Form identifier (equals form block_prefix, e.g. 'product', 'category')
     * @param int|null $entityId When null, no prefill is attempted (create form)
     */
    public function apply(\Symfony\Component\Form\FormBuilderInterface $formBuilder, string $formId, ?int $entityId): void
    {
    }
    /**
     * Resolves the field just added, so its options go through the form type's resolver and its
     * buildForm() now rather than when the whole form is built, and drops it when that fails.
     *
     * The policy denies the options known to be unsafe; every other option — a custom type's own
     * included — is validated by the type itself. On write that happens in FormOptionsValidator
     * and refuses the definition. On read, a row written straight into the registry, a type
     * whose options changed since the definition was saved, or a bug in a custom type must not
     * take the whole entity form down: the offending field is removed and logged (with the
     * exception), its siblings stay. Every throwable is caught on purpose — the type is module
     * code, and a failing extra field is never worth a failing product or customer form.
     * Placement errors (a container or anchor that does not exist) are thrown earlier, by
     * addAtPosition(), outside this guard: they are a contract of the definition and keep failing.
     */
    protected function resolveFieldOrDrop(\Symfony\Component\Form\FormBuilderInterface $targetBuilder, string $formFieldName, \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition $definition): void
    {
    }
    /**
     * @return array{0: class-string<\Symfony\Component\Form\FormTypeInterface>, 1: array<string, mixed>}
     */
    protected function resolveFieldTypeAndOptions(\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition $definition): array
    {
    }
    /**
     * @param array<string, array<string, mixed>> $existingValues
     *
     * @return mixed
     */
    protected function resolveExistingValue(array $existingValues, \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition $definition): mixed
    {
    }
    /**
     * Adds a field at the position resolved by ExtraPropertyDefinition::getFormEntry().
     *
     * $formEntry already carries the resolved placement: path is the node the field belongs to and anchor
     * is the optional sibling field (null for container placement).
     * - anchor null => path is a container; append the field inside it.
     * - anchor set  => insert the field before/after the anchor (per $formEntry['mode']) in path.
     *
     * @param array{mode: 'before'|'after'|null, path: string|null, anchor: string|null} $formEntry
     * @param class-string<\Symfony\Component\Form\FormTypeInterface> $type
     * @param array<string, mixed> $typeOptions
     *
     * @return \Symfony\Component\Form\FormBuilderInterface|null the builder the field was added to, or null when a field of
     *                                   that name already existed there (left untouched)
     *
     * @throws \InvalidArgumentException when a path segment (container or anchor parent) does not exist
     */
    protected function addAtPosition(\Symfony\Component\Form\FormBuilderInterface $rootBuilder, array $formEntry, string $formFieldName, string $type, array $typeOptions): ?\Symfony\Component\Form\FormBuilderInterface
    {
    }
    /**
     * Resolves (and creates if missing) the designated fallback area for extra fields.
     *
     * - Forms with tabs: resolves/creates 'extra_fields.extra_properties'.
     * - Simple forms (no tabs): returns the root builder (fields injected at root level).
     */
    protected function resolveOrCreateFallbackPath(\Symfony\Component\Form\FormBuilderInterface $rootBuilder): \Symfony\Component\Form\FormBuilderInterface
    {
    }
    /**
     * Strictly resolves a dot-separated path inside an existing form builder.
     *
     * An empty path resolves to the root builder itself.
     *
     * @throws \InvalidArgumentException when any segment of the path does not exist
     */
    protected function resolvePath(\Symfony\Component\Form\FormBuilderInterface $rootBuilder, string $path): \Symfony\Component\Form\FormBuilderInterface
    {
    }
    protected function isNavigationTabForm(\Symfony\Component\Form\FormBuilderInterface $formBuilder): bool
    {
    }
    protected function hasNavigationTabTypeInHierarchy(\Symfony\Component\Form\ResolvedFormTypeInterface $resolvedType): bool
    {
    }
    /**
     * Translates a wording/domain pair from a definition, falling back to $default.
     */
    protected function translateLabel(?string $wording, ?string $domain, ?string $default = null): ?string
    {
    }
}
