<?php

namespace PrestaShopBundle\Form\Admin\Improve\International\Locations;

/**
 * Custom form type backing the country address-format Vue 3 visual builder.
 *
 * The submitted name remains the parent's field name (i.e. country[address_format])
 * because this type binds directly to a string — the Vue component owns a hidden
 * input with that name and keeps it in sync with the visual editor state.
 *
 * Server-side options resolved here (available_objects, required_fields,
 * default_format, sample_data, required_fields_url, translations) are serialized
 * as data-* attributes by the address_format_builder_widget block.
 */
class AddressFormatType extends \Symfony\Component\Form\AbstractType
{
    /**
     * Built-in PrestaShop default layout — used when no per-country format is set
     * and as the source of the "Default for this country" reset action.
     *
     * Mirrors the legacy AdminCountriesController's hard-coded default layout.
     */
    public const DEFAULT_LAYOUT = "firstname lastname\ncompany\nvat_number\naddress1\naddress2\npostcode city\nCountry:name\nphone";
    public function __construct(private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator, private readonly \Symfony\Component\Routing\RouterInterface $router, private readonly \PrestaShop\PrestaShop\Core\Domain\Country\AddressFormat\AddressFormatFieldsProviderInterface $fieldsProvider)
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options): void
    {
    }
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options): void
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
    public function getBlockPrefix(): string
    {
    }
    public function getParent(): string
    {
    }
}
