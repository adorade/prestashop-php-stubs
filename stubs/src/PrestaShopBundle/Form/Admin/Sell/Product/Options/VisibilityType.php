<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Options;

class VisibilityType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param array $locales
     * @param \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface&\PrestaShop\PrestaShop\Core\Form\FormChoiceAttributeProviderInterface $productVisibilityChoiceProvider
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, $productVisibilityChoiceProvider)
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
}
