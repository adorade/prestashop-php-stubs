<?php

namespace PrestaShopBundle\Form\Admin\Sell\Customer;

/**
 * Type is used to created form for customer add/edit actions
 */
class CustomerType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @var \PrestaShopBundle\Form\FormCloner
     */
    protected $formCloner;
    /**
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\GroupByIdChoiceProvider $groupByIdChoiceProvider
     * @param array $locales
     * @param array $riskChoices
     * @param bool $isB2bFeatureEnabled
     * @param bool $isPartnerOffersEnabled
     * @param \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration
     * @param \PrestaShopBundle\Form\FormCloner $formCloner
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\GroupByIdChoiceProvider $groupByIdChoiceProvider, array $locales, array $riskChoices, $isB2bFeatureEnabled, $isPartnerOffersEnabled, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, \PrestaShopBundle\Form\FormCloner $formCloner)
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
