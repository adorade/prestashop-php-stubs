<?php

namespace PrestaShopBundle\Form\Admin\Sell\Supplier;

/**
 * Defines form for supplier create/edit actions (Sell > Catalog > Brands & Suppliers > Supplier)
 */
class SupplierType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface $statesChoiceProvider
     * @param int $contextCountryId
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param bool $isMultistoreEnabled
     * @param \Symfony\Bundle\FrameworkBundle\Routing\Router $router
     * @param array $locales
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface $statesChoiceProvider, $contextCountryId, \Symfony\Contracts\Translation\TranslatorInterface $translator, $isMultistoreEnabled, \Symfony\Bundle\FrameworkBundle\Routing\Router $router, array $locales = [])
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
