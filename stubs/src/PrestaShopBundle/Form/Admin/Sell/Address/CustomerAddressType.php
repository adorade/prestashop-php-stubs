<?php

namespace PrestaShopBundle\Form\Admin\Sell\Address;

/**
 * Form type for address add/edit
 */
class CustomerAddressType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * CustomerAddressType constructor.
     *
     * Backwards compatibility break introduced in 1.7.8.0 due to addition of Router as mandatory constructor argument
     * as well as extension of TranslationAwareType instead of using translator as dependency.
     *
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param ConfigurableFormChoiceProviderInterface $stateChoiceProvider
     * @param int $contextCountryId
     * @param RouterInterface $router
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface $stateChoiceProvider, $contextCountryId, \Symfony\Component\Routing\RouterInterface $router)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
}
