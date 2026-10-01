<?php

namespace PrestaShopBundle\Form\Admin\Extension;

/**
 * Adds the "row_attr" option to all Form Types.
 *
 * You can use it together with the UI kit form theme to add classes to your from rows:
 *
 * ```
 * 'row_attr' => [
 *   'class' => 'foo bar',
 * ],
 * ```
 */
class RowAttributesExtension extends \Symfony\Component\Form\AbstractTypeExtension
{
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
    }
    /**
     * {@inheritdoc}
     */
    public static function getExtendedTypes(): iterable
    {
    }
}
