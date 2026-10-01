<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\ExtraPropertyDefinition;

/**
 * One row of the Validation card's constraint builder — a MAPPED collection entry carrying one
 * constraint DSL token. The data handler folds the rows back into the DSL string through
 * ConstraintRowSerializer.
 *
 * options holds the token's VERBATIM argument tail (the text between "(...)"/"[...]" — e.g.
 * "min: 2, max: 64" or "'generic_name'"); the page JS renders typed inputs over it when it can and
 * shows it as-is when it can't, so the row stays lossless either way. per_language flags the rows
 * living in the "Applied to each language's value" zone — they fold into one All[...] line on
 * serialization. The row validates its own token through the exact parser the command runs
 * later, so an unknown name or a bad argument surfaces on the offending row.
 */
class ExtraPropertyConstraintRowType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options): void
    {
    }
    /**
     * Validates the row's DSL token with the exact parser the command runs later, so a row
     * accepted here is guaranteed to be accepted downstream. An abandoned row (no name, no
     * options) is skipped; options without a name get a dedicated message instead of silently
     * serializing to nothing.
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
