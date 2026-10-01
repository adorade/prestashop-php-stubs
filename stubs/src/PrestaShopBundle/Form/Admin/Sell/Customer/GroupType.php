<?php

namespace PrestaShopBundle\Form\Admin\Sell\Customer;

class GroupType extends \Symfony\Component\Form\AbstractType
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\GroupByIdChoiceProvider $groupByIdChoiceProvider)
    {
    }
    public function getParent(): string
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
}
