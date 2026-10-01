<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\ExtraPropertyDefinition;

/**
 * Root form type for creating and editing an extra property definition.
 *
 * This type only aggregates the 5 "card" sub-forms (one per section); it renders no field of
 * its own, so the data is nested by section (field_definition, visibility, labels, validation,
 * advanced) — see ExtraPropertyDefinitionFormDataProvider/Handler for the mapping.
 *
 * Root-level Callback constraints surface the cross-card rules enforced deeper in the stack
 * (ExtraPropertyDefinition value object, ExtraPropertyRegistry) as inline errors on the
 * relevant fields instead of failing later in the command handler:
 *  - a label wording is required as soon as the property is associated with a form or a grid;
 *  - form_type/form_options must build a working form field (the rule needs the
 *    field_definition card's type/scope/enum_values, hence root level — see FormOptionsValidator).
 */
class ExtraPropertyDefinitionType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, private readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Form\FormOptionsValidator $formOptionsValidator)
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
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
    /**
     * Mirrors the ExtraPropertyDefinition constructor rule: labelWording is required when
     * associatedForms or associatedGrids is set. Validated here at form level so the user gets
     * an inline error on the "Label wording" field instead of a generic flash message.
     *
     * @param array<string, mixed>|null $data the whole nested form data, keyed by card section
     */
    public function validateLabelWordingRequirement(?array $data, \Symfony\Component\Validator\Context\ExecutionContextInterface $context): void
    {
    }
    /**
     * Mirrors the ExtraPropertyRegistry save-time gate: the advanced card's
     * form_type/form_options must build a working form field for the type/scope/enum
     * values declared on the field_definition card. Validated here at form level so the user
     * gets an inline error on the offending field instead of a generic flash message.
     *
     * @param array<string, mixed>|null $data the whole nested form data, keyed by card section
     */
    public function validateFormTypeAndOptions(?array $data, \Symfony\Component\Validator\Context\ExecutionContextInterface $context): void
    {
    }
}
