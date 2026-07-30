<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Shipping;

/**
 * Form type containing product shipping information
 */
class ShippingType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param string $currencyIsoCode
     * @param FormChoiceProviderInterface $carrierChoiceProvider
     * @param FormChoiceProviderInterface $additionalDeliveryTimeNoteTypesProvider
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, string $currencyIsoCode, \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $carrierChoiceProvider, \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $additionalDeliveryTimeNoteTypesProvider)
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
