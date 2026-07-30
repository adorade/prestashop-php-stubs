<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product;

/**
 * This is the parent product form type
 */
class EditProductFormType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param EventSubscriberInterface $productTypeListener
     * @param ToolbarButtonsProviderInterface $toolbarButtonsProvider
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \Symfony\Component\EventDispatcher\EventSubscriberInterface $productTypeListener, \PrestaShopBundle\Form\Toolbar\ToolbarButtonsProviderInterface $toolbarButtonsProvider)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
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
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function getParent()
    {
    }
    /**
     * {@inheritDoc}
     */
    public function getBlockPrefix()
    {
    }
}
