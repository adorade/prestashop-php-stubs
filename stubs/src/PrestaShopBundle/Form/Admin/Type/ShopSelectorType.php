<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * This form type is used to select one or multiple shops, it is used with the
 */
class ShopSelectorType extends \Symfony\Component\Form\AbstractType
{
    public function __construct(
        private readonly \PrestaShopBundle\Entity\Repository\ShopRepository $shopRepository,
        /**
         * @var ShopGroup[]
         */
        private readonly array $shopGroups,
        private readonly \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext
    )
    {
    }
    public function getParent(): string
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
    public function getBlockPrefix(): string
    {
    }
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options): void
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options): void
    {
    }
}
