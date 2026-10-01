<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\ExtraPropertyDefinition;

/**
 * One row of the "Forms" placement subsection — a MAPPED collection entry carrying one
 * associated_forms entry ("formId[:path[:before|after]]") split into its explicit parts. The data
 * handler serializes the rows back through AssociationRowSerializer.
 *
 * form_id is deliberately a free TextType (never a ChoiceType): pointing at a form the catalog
 * does not know is a supported manual override and must not block submission. The row validates
 * its own GRAMMAR on submit (the same assertValid* check the ExtraPropertyDefinition constructor
 * runs) so a malformed entry surfaces on the offending row; cross-row rules (duplicate ids) live
 * on the collection (see ExtraPropertyDefinitionAdvancedType).
 */
class ExtraPropertyFormPlacementRowType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options): void
    {
    }
    /**
     * Validates the row's serialized entry with the exact parser the value object runs later, so a
     * row accepted here is guaranteed to be accepted downstream. An all-empty row is skipped (the
     * collection's delete_empty already dropped it); a row with content but no id gets a dedicated
     * message instead of silently serializing to nothing.
     */
    public function validateRow(?array $row, \Symfony\Component\Validator\Context\ExecutionContextInterface $context): void
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
    public function getBlockPrefix(): string
    {
    }
}
