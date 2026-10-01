<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * This form type includes automatically a choice type (by default radio buttons) that
 * allows toggling between its children. The choices of the radios are automatically built
 * based on the children this form type contains.
 *
 * Usage:
 *   - create a compound type (that extends AbstractType for example) and override the getParent method
 *     so it returns this form type as parent (ToggleChildrenChoiceType::class)
 *   - your form must use the prestashop UI kit form theme (via its parent, via twig form_theme, or via the form_theme option)
 *   - you will need some JS code to activate the toggle behaviour:
 *       window.prestashop.component.initComponents(['ToggleChildrenChoice']);
 *   - if you need a state where no child is selected you can define a placeholder option
 *
 *  Custom choice:
 *  You can override the type used for the choice element thanks to the choice_type option, and you can override or
 *  complement its options thanks to the choice_options option.
 */
class ToggleChildrenChoiceType extends \Symfony\Component\Form\AbstractType
{
    public function __construct(protected readonly \PrestaShopBundle\Form\FormBuilderModifier $formBuilderModifier)
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
