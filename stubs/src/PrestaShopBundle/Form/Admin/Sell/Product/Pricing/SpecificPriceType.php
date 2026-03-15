<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Pricing;

class SpecificPriceType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param UrlGeneratorInterface $urlGenerator
     * @param ProductRepository $productRepository
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \Symfony\Component\Routing\Generator\UrlGeneratorInterface $urlGenerator, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Attribute\Repository\AttributeRepository $attributeRepository, \Symfony\Component\EventDispatcher\EventSubscriberInterface $specificPriceCombinationListener, \PrestaShop\PrestaShop\Core\Product\Combination\NameBuilder\CombinationNameBuilderInterface $combinationNameBuilder, int $contextLanguageId)
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options): void
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
