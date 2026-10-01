<?php

namespace PrestaShopBundle\Form\Admin\Product;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * This form class is responsible to generate the product SEO form.
 */
class ProductSeo extends \PrestaShopBundle\Form\Admin\Type\CommonAbstractType
{
    /**
     * @var \PrestaShop\PrestaShop\Adapter\LegacyContext
     */
    public $context;
    /**
     * @var \Symfony\Contracts\Translation\TranslatorInterface
     */
    public $translator;
    /**
     * Constructor.
     *
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext
     * @param \Symfony\Component\Routing\Router $router
     */
    public function __construct($translator, $legacyContext, $router)
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
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
