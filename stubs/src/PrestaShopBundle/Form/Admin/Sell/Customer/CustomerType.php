<?php

namespace PrestaShopBundle\Form\Admin\Sell\Customer;

/**
 * Type is used to created form for customer add/edit actions
 */
class CustomerType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param array $genderChoices
     * @param array $groupChoices
     * @param array $riskChoices
     * @param bool $isB2bFeatureEnabled
     * @param bool $isPartnerOffersEnabled
     * @param ConfigurationInterface $configuration
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, array $genderChoices, array $groupChoices, array $riskChoices, $isB2bFeatureEnabled, $isPartnerOffersEnabled, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
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
}
