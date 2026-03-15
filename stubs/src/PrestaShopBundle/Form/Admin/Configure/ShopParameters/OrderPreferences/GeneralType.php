<?php

namespace PrestaShopBundle\Form\Admin\Configure\ShopParameters\OrderPreferences;

/**
 * Class generates "General" form
 * in "Configure > Shop Parameters > Order Settings" page.
 */
class GeneralType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, $defaultCurrencyIsoCode, array $tosCmsChoices)
    {
    }
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
