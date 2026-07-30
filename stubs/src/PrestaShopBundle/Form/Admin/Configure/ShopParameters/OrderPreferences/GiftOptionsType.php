<?php

namespace PrestaShopBundle\Form\Admin\Configure\ShopParameters\OrderPreferences;

/**
 * Class generates "Gift options" form
 * in "Configure > Shop Parameters > Order Settings" page.
 */
class GiftOptionsType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param ConfigurationInterface $configuration
     * @param string $defaultCurrencyIsoCode
     * @param array $taxChoices
     * @param RouterInterface $router
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, $defaultCurrencyIsoCode, array $taxChoices, \Symfony\Component\Routing\RouterInterface $router)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
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
    public function getBlockPrefix()
    {
    }
    /**
     * {@inheritdoc}
     *
     * @see MultistoreConfigurationTypeExtension
     */
    public function getParent(): string
    {
    }
}
