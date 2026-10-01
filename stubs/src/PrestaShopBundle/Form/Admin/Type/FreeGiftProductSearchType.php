<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * Product search input dedicated to free gift selection in discounts.
 * Uses a dedicated endpoint that returns eligibility information for each product.
 */
class FreeGiftProductSearchType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \Symfony\Component\Routing\RouterInterface $router, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository)
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
    public function getParent(): string
    {
    }
}
