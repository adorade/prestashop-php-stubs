<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Stock;

class AvailabilityType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param array $locales
     * @param \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $outOfStockTypeChoiceProvider
     * @param \Symfony\Component\Routing\RouterInterface $router
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $outOfStockTypeChoiceProvider, \Symfony\Component\Routing\RouterInterface $router, private \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext)
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
