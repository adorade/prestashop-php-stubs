<?php

namespace PrestaShopBundle\Form\Admin\Product;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * This form class is responsible to generate the product combination form.
 */
class ProductCombination extends \PrestaShopBundle\Form\Admin\Type\CommonAbstractType
{
    /**
     * @var \Symfony\Contracts\Translation\TranslatorInterface
     */
    public $translator;
    /**
     * Constructor.
     *
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext
     * @param \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
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
     * Returns the block prefix of this type.
     *
     * @return string The prefix name
     */
    public function getBlockPrefix()
    {
    }
}
