<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Form;

/**
 * Persists extra properties submitted in a Back Office form.
 *
 * Strategy:
 * - Read submitted values from form fields (unmapped) based on definitions.
 * - Group them by module/property — scope routing happens inside the writer.
 * - Write directly via ExtraPropertyWriterInterface.
 */
class ExtraPropertiesFormDataPersister
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionRepositoryInterface $repository, protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Value\ExtraPropertyWriterInterface $writer, protected readonly \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext, protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionShopFilterInterface $definitionShopFilter)
    {
    }
    public function persist(\Symfony\Component\Form\FormInterface $form, string $entityName, int $entityId): void
    {
    }
    /**
     * Resolves the sub-form that holds the unmapped extra field, consistent with ExtraPropertiesFormBuilderModifier.
     *
     * $targetPath is the node the field lives in (already resolved by getFormEntry): the full container
     * path for no-mode entries, or the anchor's parent for before/after entries.
     */
    protected function resolveTargetFormForExtraField(\Symfony\Component\Form\FormInterface $rootForm, string $targetPath, string $formFieldName): ?\Symfony\Component\Form\FormInterface
    {
    }
    protected function resolvePathForm(\Symfony\Component\Form\FormInterface $rootForm, string $path): ?\Symfony\Component\Form\FormInterface
    {
    }
    protected function isNavigationTabForm(\Symfony\Component\Form\FormInterface $form): bool
    {
    }
    protected function hasNavigationTabTypeInHierarchy(\Symfony\Component\Form\ResolvedFormTypeInterface $resolvedType): bool
    {
    }
}
