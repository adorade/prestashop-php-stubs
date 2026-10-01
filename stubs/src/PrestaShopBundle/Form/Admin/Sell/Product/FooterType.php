<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product;

class FooterType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Shop\Url\ProductPreviewProvider
     */
    protected $productPreviewUrlProvider;
    /**
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param array $locales
     * @param \PrestaShop\PrestaShop\Adapter\Shop\Url\ProductProvider $productUrlProvider
     * @param \PrestaShop\PrestaShop\Adapter\Shop\Url\ProductPreviewProvider $productPreviewUrlProvider
     * @param \Symfony\Component\Routing\RouterInterface $router
     * @param \PrestaShop\PrestaShop\Core\Feature\FeatureInterface $multistoreFeature
     * @param int|null $contextShopId
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \PrestaShop\PrestaShop\Adapter\Shop\Url\ProductProvider $productUrlProvider, \PrestaShop\PrestaShop\Adapter\Shop\Url\ProductPreviewProvider $productPreviewUrlProvider, \Symfony\Component\Routing\RouterInterface $router, \PrestaShop\PrestaShop\Core\Feature\FeatureInterface $multistoreFeature, ?int $contextShopId)
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
