<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * This form type is used to select one or multiple shops, it is used with the
 */
class ShopSelectorType extends \Symfony\Component\Form\Extension\Core\Type\ChoiceType
{
    public function __construct(\PrestaShopBundle\Entity\Repository\ShopRepository $shopRepository, array $shopGroups, ?int $contextShopId)
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
