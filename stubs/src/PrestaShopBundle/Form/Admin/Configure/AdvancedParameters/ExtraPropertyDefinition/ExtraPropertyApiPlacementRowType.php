<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\ExtraPropertyDefinition;

/**
 * One row of the "Admin API" placement subsection — a MAPPED collection entry carrying one
 * associated_apis entry ("uriPath[:METHOD[,METHOD...]]"). Same contract as
 * ExtraPropertyFormPlacementRowType: the URI stays free text so endpoints outside the catalog
 * never block saving, and the row validates its own grammar on submit.
 *
 * methods holds the uppercase CSV the method chips write back ("GET,PATCH"); empty means the
 * entry matches every method (a bare entry, no ":METHODS" suffix).
 */
class ExtraPropertyApiPlacementRowType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
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
