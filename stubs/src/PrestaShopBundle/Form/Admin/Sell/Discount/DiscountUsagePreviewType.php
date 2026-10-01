<?php

namespace PrestaShopBundle\Form\Admin\Sell\Discount;

/**
 * Display-only form type that shows discount usage information:
 * - "quantityUsed / totalQuantity" (e.g. "3 / 10" or "3 / ∞")
 * - "(Remaining quantity: X)" or "(Remaining quantity: ∞)"
 */
class DiscountUsagePreviewType extends \Symfony\Component\Form\AbstractType
{
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options): void
    {
    }
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options): void
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
    public function getBlockPrefix(): string
    {
    }
}
