<?php

namespace PrestaShopBundle\Form\Admin\Sell\Discount;

class DiscountTypeSelectorType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Discount\Repository\DiscountTypeRepository $discountTypeRepository, private readonly \PrestaShop\PrestaShop\Core\Context\LanguageContext $languageContext, \Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales)
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
