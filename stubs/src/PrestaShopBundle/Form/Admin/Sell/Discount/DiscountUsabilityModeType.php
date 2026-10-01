<?php

namespace PrestaShopBundle\Form\Admin\Sell\Discount;

class DiscountUsabilityModeType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public const AUTO_MODE = 'auto';
    public const CODE_MODE = 'code';
    protected const GENERATED_CODE_LENGTH = 8;
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
    public function getParent()
    {
    }
}
