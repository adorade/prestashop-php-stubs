<?php

namespace PrestaShopBundle\Form\Admin\Extension;

/**
 * This form extension introduce a form_theme option that can be used on any form (it's more usually used
 * on compound forms), this allows setting the form theme in the form type options instead of the twig
 * template. Thus adding this option on a form:
 *
 *     [
 *         'form_theme' => '@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/features.html.twig',
 *     ]
 *
 * is equivalent to doing this in the twig template:
 *
 *     {% form_theme form '@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/features.html.twig' %}
 *
 * This option is very handy to customize collection sub-types (or any other container form type), or if
 * a module wishes to add its custom form type that needs a custom design. Since the rendering of the recent
 * form is automatic with a single form_row it is hard to define the form theme from twig, that's one of the
 * use cases of this extension.
 *
 * Additionally, you can also specify multiple form themes for example:
 *
 *     [
 *         'form_theme' => [
 *             'bootstrap_4_layout.html.twig',
 *             '@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/features.html.twig',
 *         ],
 *     ]
 *
 * is equivalent to:
 *
 *     {% form_theme productForm with ['bootstrap_4_layout.html.twig', '@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/features.html.twig'] %}
 *
 *
 * Finally, you should know that by default the form theme applied in tig are not complete replacement, they are actually
 * applied on top of the default themes set in the app/config/config.yml file in the "twig > form_themes" section. In some cases
 * you don't want to extend the theme from config you want to use your theme and your theme ONLY. In this case you can use the
 * "use_default_themes" option to disable this behavior (by default it is true so config theme is always used by default).
 *
 * So, as an example this configuration:
 *
 *     [
 *         'form_theme' => '@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product.html.twig',
 *         'use_default_themes' => false,
 *     ]
 *
 * is equivalent to the twig (the important thing here is the use of the "only" keyword):
 *
 *     {% form_theme productForm with ['@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product.html.twig'] only %}
 */
class FormThemeExtension extends \Symfony\Component\Form\AbstractTypeExtension
{
    /**
     * @var FormRendererInterface
     */
    protected $formRenderer;
    /**
     * @param FormRendererInterface $formRenderer
     */
    public function __construct(\Symfony\Component\Form\FormRendererInterface $formRenderer)
    {
    }
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
