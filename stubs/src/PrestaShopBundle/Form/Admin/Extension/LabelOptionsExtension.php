<?php

namespace PrestaShopBundle\Form\Admin\Extension;

/**
 * For some forms we need extra options to configure the label rendering, we cannot use the existing
 * label_attr option because it adds attributes directly on the label. These extra options are used
 * inside our PrestaShop UI kit form theme.
 *
 * Form theme path: src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig
 */
class LabelOptionsExtension extends \Symfony\Component\Form\AbstractTypeExtension
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
