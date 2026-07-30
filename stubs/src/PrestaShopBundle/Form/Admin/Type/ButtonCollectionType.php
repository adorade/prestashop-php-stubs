<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * ButtonCollectionType is a form type used to group buttons in a common form group which
 * is useful for forms which have multiple submit buttons.
 *
 * $builder
 *     ->add('buttons', ButtonCollectionType::class, [
 *         'buttons' => [
 *             'save' => SubmitType::class,
 *             'cancel' => [
 *                 'type' => SubmitType::class,
 *                 'options' => [
 *                     'label' => 'Cancel',
 *                 ],
 *                 'group' => 'left',
 *             ],
 *         ],
 *     ])
 * ;
 */
class ButtonCollectionType extends \Symfony\Component\Form\AbstractType
{
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
