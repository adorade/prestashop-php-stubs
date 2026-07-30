<?php

namespace PrestaShopBundle\Form\Admin\Extension;

/**
 * This extension adds a new modify_all_shops option for form fields, then when the
 * form is built a checkbox is automatically added which matches the configured field.
 * This checkbox can then be used to apply the modification from the field to all shops.
 */
class ModifyAllShopsExtension extends \Symfony\Component\Form\AbstractTypeExtension
{
    public const MODIFY_ALL_SHOPS_PREFIX = 'modify_all_shops_';
    public function __construct(\PrestaShop\PrestaShop\Core\Feature\FeatureInterface $multistoreFeature, \PrestaShop\PrestaShop\Core\Multistore\MultistoreContextCheckerInterface $multistoreContextChecker, \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public static function getExtendedTypes(): iterable
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    /**
     * @param FormView $view
     * @param FormInterface $form
     * @param array $options
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options): void
    {
    }
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
}
