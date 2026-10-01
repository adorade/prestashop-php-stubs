<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\ExtraPropertyDefinition;

/**
 * "Validation" card: Symfony Constraint(s) applied to the value before persistence.
 *
 * Limited to an allowlist (see ExtraPropertyConstraintGrammar). Each row is one constraint: bare
 * (NotBlank), a single value via the constraint's default option (TypedRegex('generic_name')),
 * named options (Length(min: 2, max: 64)), or a composite (per_language rows fold into one
 * All[...] — the per-language validation of multilingual fields).
 *
 * The constraint rows are the MAPPED form data: the form data provider splits the stored
 * constraints into rows (ConstraintRowPresenter) and the data handler folds them back
 * (ConstraintRowSerializer -> the DSL string the command parses). Each row validates its own token
 * (see ExtraPropertyConstraintRowType); abandoned rows are dropped at submit by delete_empty.
 */
class ExtraPropertyDefinitionValidationType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, private readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Form\ExtraPropertyConstraintCatalog $constraintCatalog)
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
