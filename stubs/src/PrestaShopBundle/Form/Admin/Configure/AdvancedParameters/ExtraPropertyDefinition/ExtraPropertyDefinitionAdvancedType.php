<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\ExtraPropertyDefinition;

/**
 * "Placement" card: where the field appears in the back office (forms, grids) and Admin API,
 * plus the developer-oriented form type/options overrides.
 *
 * Each association is a MAPPED collection of builder rows — the submitted form data itself. The
 * form data provider splits the stored entries into rows (AssociationRowPresenter) and the data
 * handler serializes them back (AssociationRowSerializer). Each row validates its own grammar
 * (see the row types); the collections only add the cross-row rule the value object enforces too:
 * a form/grid may only be referenced once. Abandoned rows (all fields empty) are dropped at
 * submit by delete_empty.
 *
 * The card exposes the forms/grids/APIs catalogs and the type=>default form type map as the
 * "extra_property_catalogs" view var, inlined by the form theme as a JSON block so the picker
 * components can suggest ids without AJAX (the per-form field tree stays lazy — see
 * ExtraPropertyDefinitionController::formFieldsAction()).
 *
 * Defined in app/config/admin/services.yml ONLY (excluded from the form types prototype glob):
 * ApiEndpointCatalog needs the OpenApi services that exist solely in the admin kernel (see its
 * docblock). Building this form in another kernel fails until swagger is enabled there.
 */
class ExtraPropertyDefinitionAdvancedType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, private readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Catalog\FormCatalog $formCatalog, private readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Catalog\GridCatalog $gridCatalog, private readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Catalog\ApiEndpointCatalog $apiEndpointCatalog, private readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Form\ExtraPropertyFormTypeMap $formTypeMap)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options): void
    {
    }
    /**
     * {@inheritdoc}
     */
    public function finishView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options): void
    {
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getParent(): string
    {
    }
}
