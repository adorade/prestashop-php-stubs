<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Combination;

class CombinationAvailabilityType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param FormChoiceProviderInterface $outOfStockTypeChoiceProvider
     * @param RouterInterface $router
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $outOfStockTypeChoiceProvider, \Symfony\Component\Routing\RouterInterface $router)
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
