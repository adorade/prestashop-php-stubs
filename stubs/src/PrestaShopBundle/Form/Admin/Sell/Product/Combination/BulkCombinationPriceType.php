<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Combination;

class BulkCombinationPriceType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, string $currencyIsoCode, string $weightUnit, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Tax\TaxComputer $taxComputer)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options): void
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options): void
    {
    }
}
