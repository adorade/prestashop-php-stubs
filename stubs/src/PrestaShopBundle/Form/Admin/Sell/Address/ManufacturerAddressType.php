<?php

namespace PrestaShopBundle\Form\Admin\Sell\Address;

/**
 * Defines form for address create/edit actions (Sell > Catalog > Brands & Suppliers)
 */
class ManufacturerAddressType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param array $locales
     * @param array $manufacturerChoices
     * @param \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface $statesChoiceProvider
     * @param int $contextCountryId
     * @param \PrestaShopBundle\Service\Routing\Router $router
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, array $manufacturerChoices, \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface $statesChoiceProvider, $contextCountryId, \PrestaShopBundle\Service\Routing\Router $router)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
