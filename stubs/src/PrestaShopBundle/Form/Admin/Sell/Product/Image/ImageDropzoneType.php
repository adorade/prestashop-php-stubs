<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Image;

/**
 * This form type integrates a Dropzone used to manage images, the twig templates is a simple div
 * with data attributes, it needs javascript from the Dropzone.vue component to work.
 *
 * This form type though should be used to pass any configuration to the javascript components, like
 * translations, locales, or productId (maybe even urls could be configurable).
 */
class ImageDropzoneType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \PrestaShop\PrestaShop\Core\Feature\FeatureInterface $multistoreFeature)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
    }
}
