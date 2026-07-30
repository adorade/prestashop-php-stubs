<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Stock;

class StockType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @var RouterInterface
     */
    protected $router;
    /**
     * @var string
     */
    protected $employeeIsoCode;
    /**
     * @param TranslatorInterface $translator
     * @param RouterInterface $router,
     * @param array $locales
     * @param FormChoiceProviderInterface $packStockTypeChoiceProvider
     * @param string $employeeIsoCode
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $packStockTypeChoiceProvider, \Symfony\Component\Routing\RouterInterface $router, string $employeeIsoCode)
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
