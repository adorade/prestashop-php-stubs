<?php

namespace PrestaShopBundle\Form\Admin\Product;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * This form class is responsible to generate the product quantity form.
 */
class ProductQuantity extends \PrestaShopBundle\Form\Admin\Type\CommonAbstractType
{
    /**
     * @var ConfigurationInterface
     */
    public $configuration;
    /**
     * @var LegacyContext
     */
    public $legacyContext;
    /**
     * @var array<int|Language>
     */
    public $locales;
    /**
     * Constructor.
     *
     * @param TranslatorInterface $translator
     * @param Router $router
     * @param LegacyContext $legacyContext
     * @param ConfigurationInterface $configuration
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \Symfony\Component\Routing\Router $router, \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    /**
     * {@inheritdoc}
     *
     * Builds form
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    /**
     * {@inheritdoc}
     *
     * Configure options
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    /**
     * Returns the block prefix of this type.
     *
     * @return string The prefix name
     */
    public function getBlockPrefix()
    {
    }
}
