<?php

namespace PrestaShopBundle\Form\Admin\Sell\Discount;

class DiscountInformationType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, protected readonly \PrestaShop\PrestaShop\Core\Context\LanguageContext $languageContext, protected readonly \PrestaShop\PrestaShop\Adapter\Discount\Repository\DiscountTypeRepository $discountTypeRepository)
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    public function getParent()
    {
    }
}
