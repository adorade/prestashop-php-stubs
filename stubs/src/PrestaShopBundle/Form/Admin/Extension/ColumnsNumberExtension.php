<?php

namespace PrestaShopBundle\Form\Admin\Extension;

/**
 * Adds the "columns_number" option to all Form Types.
 *
 * You can use it together with the UI kit form theme to adapt the display of a form group into columns,
 * the form theme will add a class that affects the display into flex container with fixed size for sub elements.
 *
 * ```
 * 'columns_number' => 4,
 * ```
 */
class ColumnsNumberExtension extends \Symfony\Component\Form\AbstractTypeExtension
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
