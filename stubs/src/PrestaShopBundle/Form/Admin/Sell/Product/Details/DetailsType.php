<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Details;

class DetailsType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @var bool
     */
    protected $isFeatureEnabled;
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param FormChoiceProviderInterface $productConditionChoiceProvider
     * @param bool $isFeatureEnabled
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $productConditionChoiceProvider, bool $isFeatureEnabled)
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
