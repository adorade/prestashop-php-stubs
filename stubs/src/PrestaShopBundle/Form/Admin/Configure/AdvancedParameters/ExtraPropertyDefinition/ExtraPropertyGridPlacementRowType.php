<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\ExtraPropertyDefinition;

/**
 * One row of the "Grids" placement subsection — a MAPPED collection entry carrying one
 * associated_grids entry ("gridId[:columnId[:before|after]]") split into its explicit parts. Same
 * contract as ExtraPropertyFormPlacementRowType: ids stay free text so unknown grids never block
 * saving, the row validates its own grammar on submit, cross-row rules live on the collection.
 *
 * mode keeps only an EXPLICIT ":before"/":after" suffix ("" otherwise) so serializing the row
 * re-emits the original entry — the runtime's "after" default for a bare "gridId:columnId" entry
 * is a display concern, not a stored one.
 */
class ExtraPropertyGridPlacementRowType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options): void
    {
    }
    /**
     * Validates the row's serialized entry with the exact parser the value object runs later —
     * see ExtraPropertyFormPlacementRowType::validateRow() for the shape of the check.
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
