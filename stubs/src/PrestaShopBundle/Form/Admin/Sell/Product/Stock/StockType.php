<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Stock;

class StockType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @var \Symfony\Component\Routing\RouterInterface
     */
    protected $router;
    /**
     * @var string
     */
    protected $employeeIsoCode;
    /**
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param \Symfony\Component\Routing\RouterInterface $router,
     * @param array $locales
     * @param \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $packStockTypeChoiceProvider
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
